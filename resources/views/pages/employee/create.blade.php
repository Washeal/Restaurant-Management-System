

@extends('layout.app')

@section('title')
 
welcome

@endsection


@section('page')

<form class="tab-wizard wizard-circle wizard clearfix" action="{{route('employee.store')}}" method="post" >
@csrf
                        

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label> Name :</label>
                <input type="text" name="txtName" id="txtName" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Depertment :</label>
                <input type="text"  name="txtDepertment" id="txtDepertment" class="form-control">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Position :</label>
                <input type="text" name="txtPosition" id="txtPosition" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Salary :</label>
                <input type="text" name="txtSalary" id="txtSalary" class="form-control">
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Date :</label>
                <input type="date" name="txtDate" id="txtDate" class="form-control">
            </div>
        </div>
       
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-info">Save</button>
    
    </div>
</form>

                        @endsection