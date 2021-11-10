<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class loginController extends Controller
{
   public function login(request $request){
      

       $user_td=DB::select("select id,username,role_id from users where username='$request->txtName' and password='$request->txtPass'");
        
       if( $user_td==null){
            return redirect("/")->with(['status'=>'Incorrect username or password!','username'=>$request->txtName,'password'=>$request->txtPass]);
       }else{

        $user=$user_td[0];
    
       $session_id=session()->getId();
            
       session(['sess_id'=>$session_id,
               'sess_user_id'=>$user->id,
               'sess_user_name'=>$user->username,               
               'sess_role_id'=>$user->role_id,
              
               ]);

         return redirect("/dashboard");

      }

   }


   function logout(){
      session()->forget(['sess_id', 'sess_user_id','sess_user_name','sess_role_id']);
      session()->flush();
      session()->regenerate();
  
      return redirect("/")->with('status','Bye');
     
     }

}
