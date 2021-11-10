

@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

                        <form class="tab-wizard wizard-circle wizard clearfix" action="{{route('position.store')}}" method="post" >
                        @csrf
                         
                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Position:</label>
											<input type="text" name="txtPosition" id="txtPosition" class="form-control">
										</div>
									</div>
									
								</div>

                                <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                                
                                </div>
</form>

 @endsection