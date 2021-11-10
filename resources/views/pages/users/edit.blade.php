

@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

                        <form class="tab-wizard wizard-circle wizard clearfix" action="{{route('users.update',$user->id)}}" method="post" >
                        @method("PUT")
                        @csrf
                        <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>First Name :</label>
											<input type="text" name="txtName" value="{{$user->username}}" id="txtName" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Role :</label>
											<input type="text"  name="txtRole" value="{{$user->role_id}}" id="txtRole" class="form-control">
										</div>
									</div>
								</div>

                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Password :</label>
											<input type="text" name="txtPassword" value="{{$user->password}}" id="txtPassword" class="form-control">
										</div>
									</div>
									
								</div>

                                <div class="card-footer">
                                <button type="submit" class="btn btn-info">Update</button>
                                
                                </div>
</form>

                        @endsection