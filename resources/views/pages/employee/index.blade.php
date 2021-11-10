@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

		

    <!-- Main content -->
 

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <a href="{{url('/employee/create')}}" class="btn btn-success">Create Employee</a>
         
        </div>
        <div class="card-body p-0">
          <table class="table table-hover projects">
              <thead>                
                  <tr>
                     <th >  ID  </th>
                      <th > Name  </th>
                      <th> Depertment </th>
                      <th >Position </th>
                      <th >Salary  </th>
                      <th >Date  </th>
                     
                    
                  </tr>              
                </thead>
              <tbody>
                  @foreach($employees as $emp)
                  <tr>
                     
                      <td > {{$emp->id}} </td>
                      <td > {{$emp->name}} </td>
                      <td> {{$emp->depertment_id}} </td>
                      <td > {{$emp->position_id}} </td>
                      <td > {{$emp->salary}} </td>
                      <td > {{$emp->date}} </td>
                     
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{url('/employee/'.$emp->id)}}">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('/employee/'.$emp->id.'/edit')}}">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                              <i class="fas fa-trash"></i>
                              Delete                              
                            <form class='delete' action="{{route('employee.destroy',$emp->id)}}" method="post">
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

  
			
	
                @endsection