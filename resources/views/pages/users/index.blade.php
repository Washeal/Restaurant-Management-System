@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

		

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <a href="{{url('/users/create')}}" class="btn btn-success">Create User</a>
         
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>                
                  <tr>
                     <th style="width: 5%">  ID  </th>
                      <th style="width: 15%"> Name  </th>
                      <th style="width: 10%"> role </th>
                      <th style="width: 15%">Password </th>
                      <th style="width: 20%">Time  </th>
                    
                  </tr>              
                </thead>
              <tbody>
                  @foreach($users as $user)
                  <tr>
                     
                      <td style="width: 5%"> {{$user->id}} </td>
                      <td style="width: 15%"> {{$user->username}} </td>
                      <td style="width: 10%"> {{$user->name}} </td>
                      <td style="width: 15%"> {{$user->password}} </td>
                      <td style="width: 15%"> {{$user->create_at}} </td>
                     
                      <td class="project-actions text-right" style="width:30%">
                          <a class="btn btn-primary btn-sm" href="{{url('/users/'.$user->id)}}">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('/users/'.$user->id.'/edit')}}">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                              <i class="fas fa-trash"></i>
                              Delete                              
                            <form class='delete' action="{{route('users.destroy',$user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            </form>  
                          </a>
                      </td>
                  </tr>
                 @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
			
	
                @endsection