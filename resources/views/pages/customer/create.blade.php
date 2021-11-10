

@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

                        <form class="tab-wizard wizard-circle wizard clearfix" action="{{route('customer.store')}}" method="post" >
                        @csrf
                                                    
							
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Name:</label>
											<input type="text" name="txtName" id="txtName" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Nid :</label>
											<input type="text"  name="txtNid" id="txtNid" class="form-control">
										</div>
									</div>
								</div>

                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Mobile:</label>
											<input type="text" name="txtMobile" id="txtMobile" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email :</label>
											<input type="text"  name="txtEmail" id="txtEmail" class="form-control">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Date:</label>
											<input type="date" name="txtDate" id="txtDate" class="form-control">
										</div>
									</div>
									
								</div>

                               

                                <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                                
                                </div>
</form>

                        @endsection