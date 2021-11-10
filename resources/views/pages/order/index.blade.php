@extends("layout.app")
@section('title','Contact')
@section('page')


   
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
   
        <div class="card-body">
        <form name="frmPurchase" action="{{url('invoice/store')}}" method="post">
              @csrf

              <div class="row form-group">
                <label class="col-md-2">Customer</label>
                <div class="col-md-3">
                    <select name="cmbCustomer" class="form-control">
                    @foreach($customer as $custo)
                 <option value="{{$custo->id}}">{{$custo->name}}</option>
                @endforeach
                    </select>
                </div>
              </div>  
              <div class="row form-group">
                <label class="col-md-2">Mobile</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="txtMobile"  />
                </div>
              </div>  
              <div class="row form-group">
                <label class="col-md-2">Time</label>
                <div class="col-md-3">
                    <input type="time" class="form-control" name="txtTime"  />
                </div>
              </div> 

              <div class="row form-group">
                <label class="col-md-2">Table</label>
                <div class="col-md-3">
                <select name="txtShippingAddress" class="form-control">
                   @foreach($tables as $table)
                 <option value="{{$table->id}}">{{$table->title}}</option>
                @endforeach
                </div>
              </div>  
              <div>
                <input type="hidden" name="hidRemark" />
              </div>

           </form>


        <form action="{{url('invoice/addItem')}}" method="post">
           @csrf                     
           <table class="table">
            <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Discount</th>
              <th>&nbsp;</th>
            </tr>
            <tr>

              <td><select name="txtId" style="width:300px;" class="form-control">
                @foreach($products as $product)
                 <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
              </select></td>
              <td><input class="form-control" type="text" size="5" value="1" name="txtQty" placeholder="Qty" style="text-align:center" /></td>
              <td><input class="form-control" type="text" size="8" name="txtPrice"  placeholder="Price" /></td>
              <td><input class="form-control" type="text" size="8" name="txtDiscount" placeholder="Discount"  /></td>
              <td><button class="btn btn-primary" type="submit" name="btnAdd">Add</button></td>
            </tr>
          </table>
          </form>

          <table class="table">
              <?php $total=0;?>
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                 <?php// print_r(session('cart'));  ?>
                  <tr>
                  <td><img src="{{asset('img')}}" width="50" /> {{$details['name']}}</td>
                  
                    <td><input type="text" size="5" name="txtQty" value="{{$details['qty']}}" /></td>
                    <td><input type="text" size="6" name="txtPrice" value="{{$details['price']}}" /></td>
                    <td> </td>
                    <td>{{ $details['qty']*$details['price'] }}</td>
                   
                    <td> 
                        
                         <form action="{{url('invoice/removeItem')}}" method="post" class="btn btn-danger">
                            @csrf  
                            @method('DELETE')
                            <input type="hidden" name="txtId" value="{{$id}}" />
                            <button class="fas fa-trash btn-danger" style="border:none;"  type="submit" /></button>
                        </form>

                        <form action="{{url('invoice/updateItem')}}" method="post" class="btn btn-primary">
                            @csrf  
                            @method('POST')
                            <input type="hidden" name="txtId" value="{{$id}}" />                     
                            <button class="fas fa-edit btn-primary" style="border:none;"  type="submit" /></button>
                        </form>
                  </td>
                  </tr>
                  <?php $total+=$details['qty']*$details['price']; ?>
                @endforeach
            @endif
            <tr>
              <th colspan="4" style="text-align:right">Total</th>
              <th>{{$total}}</th>
            </tr>
           </table> 

           <form name="frmSummary">
             
             <div class="row form-group">
                <label class="col-md-2">Remark</label>
                <div class="col-md-3">
                <input type="text"  name="txtRemark" />
                </div>
              </div>  
              <div>
           </form>

           <input type="button" onclick="purchase()" class="btn btn-primary" value="Purchase" name="btnPurchase" />
        </div>
        <!-- /.card-body -->      
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  



@endsection

@section("script")
   <script>
      
      function purchase(){ 

        if(confirm('Are you sure?')){              
            var remark=document.frmSummary.txtRemark.value;
            document.frmPurchase.hidRemark.value=remark;
            document.frmPurchase.submit();
        }
      }
   
   </script>
@endsection

