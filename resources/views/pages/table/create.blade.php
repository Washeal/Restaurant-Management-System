

@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

                        <form class="tab-wizard wizard-circle wizard clearfix" action="{{route('tables.store')}}" method="post" >
                        @csrf
                                                    
							
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Table Name:</label>
											<input type="text" name="txtTitle" id="txtTitle" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Waiter :</label>
											<input type="text"  name="txtWaiter" id="txtWaiter" class="form-control">
										</div>
									</div>
								</div>

                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Person :</label>
											<input type="text" name="txtparson" id="txtparson" class="form-control">
										</div>
									</div>
									
								</div>

                                <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                                
                                </div>
</form>

                        @endsection