<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Test database connection
                try {
                  // DB::connection()->getPdo();
                 
                  $users=DB::select("select u.id,u.username,r.name,u.password,u.create_at from users u,roles r where u.role_id=r.id");
                  return view('pages.users.index',['users'=>$users]);

                  
                } catch (\Exception $e) {
                    die("Could not connect to the database.  Please check your configuration. error:" . $e );
                }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("insert into users(username,role_id,password,create_at)values('$request->txtName','$request->txtRole','$request->txtPassword',now())");

                       
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=DB::select("select id,username,role_id,password from users where id='$id'");        
         return view("pages.users.edit",["user"=>$users[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::update("update users set username='$request->txtName',role_id='$request->txtRole',password='$request->txtPassword' where id='$id'");
        return redirect("users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from users where id='$id'");
        return redirect("users");
    }
}
