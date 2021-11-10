@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

		

    <!-- Main content -->
    <section class="content">


   
          <table class="table table-striped projects">
              <thead>                
                  <tr>
                      <th>ID</th>
                      <th> Name</th>
                      <th> Nid</th>
                      <th> Mobile</th>
                      <th> Email</th>
                      <th> Date</th>
                      
                    
                  </tr>              
                </thead>
              <tbody>
                  @foreach($customers as $customer)
                  <tr>
                     
                      <td > {{$customer->id}} </td>
                      <td > {{$customer->name}} </td>
                      <td > {{$customer->nid}} </td>
                      <td > {{$customer->mobile}} </td>
                      <td > {{$customer->email}} </td>
                      <td > {{$customer->date}} </td>
                   
                      
                     
                      <td class="project-actions text-right" style="width:30%">
                          <a class="btn btn-primary btn-sm" href="{{url('/customer/'.$customer->id)}}">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('/customer/'.$customer->id.'/edit')}}">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="$(this).find('.delete').submit();">
                              <i class="fas fa-trash"></i>
                              Delete                              
                            <form class='delete' action="{{route('customer.destroy',$customer->id)}}" method="post">
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
    
      <!-- /.card -->

    </section>
			
	
                @endsection