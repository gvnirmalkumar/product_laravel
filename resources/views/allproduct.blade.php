<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            



                
                <div class="row">
     <div class="col-md-12">
     <h1 class="h3 mb-3">All Product</h1>
          <div class="card">
          <div class="card-body">
                    <!-- ****** data-table-start ****** -->
          <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
               <th>id</th>
                <th>Product Name</th>
                <th>Unit Type</th>
                <th>Product Category</th>
                <th>Product Images</th>
                <th>Product Price</th>
                <th>Discount Percentage</th>
                <th>Discount Amount</th>
                <th>Discount Range From Date</th>
                <th>Discount Range To Date</th>
                <th>Tax Percentage</th>
                <th>Tax Amount</th>
                <th>Stock Entry Quantiy Number</th>
                <th>Staus</th>
                <th>Date</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach($allproduct as $allproduct)
        <tr id="sid{{$allproduct->id}}">
               <td style="width:2%;text-align: center;">{{$allproduct->id}}</td>
               <td style="width:10%;text-align: center;">{{$allproduct->pname}}</td>
               <td style="width:2%;text-align: center;">{{$allproduct->unittype}}</td>
               <td style="width:2%;text-align: center;">{{$allproduct->pcategory}}</td>
               <td style="width:10%;text-align: center;">{{$allproduct->pimages}}</td>
               <td style="width:2%;text-align: center;">{{$allproduct->pprice}}</td>
               <td style="width:2%;text-align: center;">{{$allproduct->dpercentage}}</td>
               <td style="width:2%;text-align: center;">{{$allproduct->damount}}</td>
               <td style="width:10%;text-align: center;">{{$allproduct->dfdate}}</td>
               <td style="width:8%;text-align: center;">{{$allproduct->dtdate}}</td>
               <td style="width:5%;text-align: center;">{{$allproduct->tpercentage}}</td>
               <td style="width:5%;text-align: center;">{{$allproduct->tamount}}</td>
               <td style="width:5%;text-align: center;">{{$allproduct->seqty}}</td>
               <td style="width:10%;text-align: center;">{{$allproduct->create}}</td>

               <td style="width:10%;text-align: center;">{{$allproduct->created_at}}</td>
               <td>
                <div style="display: flex;">
                    <a href="javascript:void(0)" onclick="editproduct({{$allproduct->id}})"><x-far-edit style="width:100%;color:#2196F3;"/></a>
                    
                 
                 
      <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteproduct({{$allproduct->id}})">
        <x-fas-trash style="width:80%;color:red;"/>
      </a>
                </div>
               </td>
               
          </tr>


<!-- model-code-functionality  -->
<!-- Button trigger modal -->
<!-- Edit Product Modal -->


<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      

      <form method="POST" action="insert" id="editprouct" enctype="multipart/form-data">
        @csrf

        <x-text-input id="id" class="block mt-1 w-full" type="hidden" name="id" required />
        
        <div>
            <x-input-label for="Product Name" :value="__('Product Name')" />
            <x-text-input id="pname2" class="block mt-1 w-full" type="text" name="pname" :value="old('pname')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('pname')" class="mt-2" />
        </div>
<br/>
        <div>
        <x-input-label for="Unit Type" :value="__('Unit Type')" />    
                <select x-model="color" class="block mt-1 w-full" id="unittype2" name="unittype" required style=" background: #111827; border-color: #374151; border-radius: 5px;">
                    <option value="" disabled>Unit Type</option>    
                    <option value="Quantity">Quantity</option>
                    <option value="Litre">Litre</option>
                    <option value="KG">KG </option>
                    <option value="Meter">Meter </option>
            </select>
        </div>
        <br/>
        <div>
            <x-input-label for="Product Category " :value="__('Product Category ')" />
            <x-text-input id="pcategory2" class="block mt-1 w-full" type="text" name="pcategory" :value="old('pcategory')" required />
            <x-input-error :messages="$errors->get('pcategory')" class="mt-2" />
        </div>
        <br/>
        <div>
        <x-input-label for="Product Images " :value="__('Product Images ')" />
        <input type="file" id="pimages2" name="pimages" accept="image/png, image/jpeg" multiple/>
        </div>  

        <br/>
        <div>
            <x-input-label for="Product Price " :value="__('Product Price ')" />
            <x-text-input id="pprice2" class="block mt-1 w-full" type="text" name="pprice" :value="old('pprice')" required />
            <x-input-error :messages="$errors->get('pprice')" class="mt-2" />
        </div>
        <br/>
        <div>
            <x-input-label for="Discount Percentage " :value="__('Discount Percentage ')" />
            <x-text-input id="dpercentage2" class="block mt-1 w-full" type="text" name="dpercentage" :value="old('dpercentage')" required />
            <x-input-error :messages="$errors->get('dpercentage')" class="mt-2" />
        </div>
        <br/>
        <div>
            <x-input-label for="Discount Amount " :value="__('Discount Amount ')" />
            <x-text-input id="damount2" class="block mt-1 w-full" type="text" name="damount" :value="old('damount')" required />
            <x-input-error :messages="$errors->get('damount')" class="mt-2" />
        </div>

        <br/>
        <div>
            <x-input-label for="Discount Range Dates " :value="__('Discount Range Dates ')" />
            <div style=" display: flex;">  
            <div style=" width: 100%;">  
            <x-input-label for="From Date" :value="__('From Date')" />
            <x-text-input id="dfdate2" class="block mt-1 w-full" type="date" name="dfdate" :value="old('dfdate')" required />
            <x-input-error :messages="$errors->get('dfdate')" class="mt-2" />
            </div>
              <div style=" width: 100%;">  
            <x-input-label for="To Date" :value="__('To Date')" />  
            <x-text-input id="dtdate2" class="block mt-1 w-full" type="date" name="dtdate" :value="old('dtdate')" required />
            <x-input-error :messages="$errors->get('dtdate')" class="mt-2" />
            </div>
        </div>
        </div>
        <br/>
        <div>
            <x-input-label for="Tax Percentage " :value="__('Tax Percentage ')" />
            <x-text-input id="tpercentage2" class="block mt-1 w-full" type="text" name="tpercentage" :value="old('tpercentage')" required />
            <x-input-error :messages="$errors->get('tpercentage')" class="mt-2" />
        </div>
        <br/>
        <div>
            <x-input-label for="Tax Amount " :value="__('Tax Amount ')" />
            <x-text-input id="tamount2" class="block mt-1 w-full" type="text" name="tamount" :value="old('tamount')" required />
            <x-input-error :messages="$errors->get('tamount')" class="mt-2" />
        </div>

        <br/>
        <div>
            <x-input-label for="Stock Entry" :value="__('Stock Entry (Quantity No’s) ')" />
            <x-text-input id="seqty2" class="block mt-1 w-full" type="text" name="seqty" :value="old('seqty')" required />
            <x-input-error :messages="$errors->get('seqty')" class="mt-2" />
        </div>
        <br/>
        
        <button type="submit" class="btn btn-primary" style="background-color: #959595;padding: 10px;border-radius: 10px;" id="update" name="update" value="Update Product">Update Product</button>
            
        </div>
    </form>
      </div> -->



      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
       <a href="{{url('delete_course/'.$allproduct->id)}}"><button  class="btn btn-danger">Delete</button></a>
      </div> -->

    <!-- </div>
  </div>
</div> -->
<!-- model-code-functionality -->
          @endforeach
        </tbody>
    </table>
                    <!-- ****** data-table-end ****** -->
               </div>
          </div>
     </div>
</div>


                </div>
            </div>
        </div>
    </div>
   
<script type="text/javascript">
 function deleteproduct(id)
 {
  if(confirm("delete this product?"))
  {
    $.ajax({
      url:'/deleteproduct/'+id,
      type:'DELETE',
      data:{
        _token : $("input[name=_token]").val()
      },
      success:function(response)
      {
        $("#sid"+id).remove();
      }
    });
  }
 }

</script>

<script type="text/javascript">
 function editproduct(id)
 {
  $.get('/productid/'+id,function(product)
  {
    $("#id").val(product.id);
    $("#pname2").val(product.pname);
    $("#unittype2").val(product.unittype);
    $("#pcategory2").val(product.pcategory);
    $("#pimages2").val(product.pimages);
    $("#pprice2").val(product.pprice);
    $("#dpercentage2").val(product.dpercentage);
    $("#damount2").val(product.damount);
    $("#dfdate2").val(product.dfdate);
    $("#dtdate2").val(product.dtdate);
    $("#tpercentage2").val(product.tpercentage);
    $("#tamount2").val(product.tamount);
    $("#seqty2").val(product.seqty);
    $("#update").val(product.update);

    $("#exampleModal").model('toggle');



  })
}

</script>


</x-app-layout>
