

@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

                        <form class="tab-wizard wizard-circle wizard clearfix" action="{{route('manus.store')}}" method="post" >
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
											<label>Price :</label>
											<input type="text"  name="txtprice" id="txtprice" class="form-control">
										</div>
									</div>
								</div>

                               

                                <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                                
                                </div>
</form>

                        @endsection