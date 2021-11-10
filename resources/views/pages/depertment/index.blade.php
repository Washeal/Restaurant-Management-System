@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

		

    <!-- Main content -->
 

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <a href="{{url('/depertment/create')}}" class="btn btn-success">Create Depertment</a>
         
        </div>
        <div class="card-body p-0">
          <table class="table table-hover projects">
              <thead>                
                  <tr>
                     <th >  ID  </th>
                      <th > Name  </th>
                
                  </tr>              
                </thead>
              <tbody>
                  @foreach($depertment as $depert)
                  <tr>
                     
                      <td > {{$depert->id}} </td>
                      <td > {{$depert->name}} </td>
                     
                     
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{url('/employee/'.$depert->id)}}">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('/employee/'.$depert->id.'/edit')}}">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                              <i class="fas fa-trash"></i>
                              Delete                              
                            <form class='delete' action="{{route('employee.destroy',$depert->id)}}" method="post">
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