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
          
         
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>                
                  <tr>
                      <th>ID</th>
                      <th>Table Name</th>
                      <th>Waiter Name</th>
                      <th> Person</th>
                      <th>Time</th>
                      
                     
                  </tr>              
                </thead>
              <tbody>
                  @foreach($table as $tables)
                  <tr>
                     
                      <td > {{$tables->id}} </td>
                      <td > {{$tables->title}} </td>
                      <td > {{$tables->waiter_id}} </td>
                      <td > {{$tables->person}} </td>
                      <td > {{$tables->create_at}} </td>
                      
                     
                      <td class="project-actions text-right" style="width:30%">
                          <a class="btn btn-primary btn-sm" href="{{url('/tables/'.$tables->id)}}">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('/tables/'.$tables->id.'/edit')}}">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                              <i class="fas fa-trash"></i>
                              Delete                              
                            <form class='delete' action="{{route('tables.destroy',$tables->id)}}" method="post">
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