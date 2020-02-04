@extends('backend.layouts.main')
@section('content')
<style>
.btn-warning
	{
		background-color: #fd7e14;
	}
.btn-info
	{
		background-color: #20bba6;
	}
</style>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class=" text-center">جدول العروض</h1>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary" style="float:right">العروض</h6>
				   
			<button class="btn btn-success"  data-toggle="modal" data-target="#addModal" style="float:left">
			اضف العرض
			</button>
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0"style="float:right">
                  <thead>
				
                    <tr>
					  <th>الرقم</th>
                      <th>اسم العرض</th>
                      <th>وصف العرض</th>
					  <th>الخصم</th>
                      <th>الصوره</th>
                      <th>العرض</th>
					  <th>التعديل</th>
					  <th>الحذف</th>
                    </tr>
                  </thead>
                 
                  <tbody  id="tableOffer" >
				  
					</tbody>
					
				  </table>
				  
				</div>
			  </div>
			</div>
</div>
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title pull-right" id="myModalLabel">عرض العرض</h4>
      </div>
      <div class="modal-body" dir="rtl" >
	 <label style="float:right">اسم العرض</label>
		<input type="text" name="name" id="name" class="form-control"
			   >
	 <label style="float:right">خصم هذا العرض</label>
		<input type="text" name="sale" id="sale" class="form-control">
	<label style="float:right" >وصف العرض</label>
		<textarea type="text" name="description"
		id="description" class="form-control" rows="8" cols="20"></textarea>
	<label style="float:right">صوره العرض</label>
		  <br>
		  <br>
	  <img src="" name=image id="imageShow" width="120px" height="100px"style="float:right">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"style="float:right">اغلاق</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title pull-right" id="myModalLabel">تعديل العرض</h4>
      </div>
      <div class="modal-body" dir="rtl" >
<form method="post" id="formEdit" enctype="multipart/form-data">
		@csrf
	<input type="hidden" name="id" id="idEdit" >
	 <label style="float:right">اسم العرض</label>
		<input type="text" name="name" id="nameEdit" class="form-control">

	 <label style="float:right">خصم هذا العرض</label>
		<input type="text" name="sale" id="saleEdit" class="form-control">
	<label style="float:right" >وصف العرض</label>
		<textarea type="text" name="description"
		id="descriptionEdit" class="form-control" rows="8" cols="20"></textarea>
	 <div class="form-group" style="float:right">
        <label style="float:right">صوره العرض</label>
              <input type="file" name="image" class="form-control image"  style="float:right">
                     
             <img src="{{ asset('uploads/offer_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="" id="imageEdit" style="float:right">
           </div>
	
     
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:left">اغلاق</button>
       <button type="submit" class="btn btn-info " id="update"  style="float:right" >تعديل</button>
</div>
		  </form>
    </div>
  </div>
</div>
	</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title pull-right" id="myModalLabel">اضف العرض</h4>
      </div>
      <div class="modal-body" dir="rtl">
		<form  method="POST" id="formOffer" enctype="multipart/form-data" >
               {{csrf_field()}}
			  <div class="col-md-12">
			  <label style="float:right" >اسم العرض</label>
	        <input type="text" name="name" id="nameOffer" class="form-control" style="float:right">
		</div>
			 <div class="col-md-12">
			  <label style="float:right" >خصم هذا العرض</label>
	        <input type="text" name="sale" id="saleOffer" class="form-control" style="float:right">
		</div>
		  <div class="col-md-12">
			  <label style="float:right">شرح العرض</label>
	       <textarea type="text" name="description"
		id="descriptionOffer" class="form-control" rows="8" cols="20" style="float:right"></textarea>
		</div>	  
		
			  <div class="form-group">
                            <label style="float:right">صوره العرض</label>
                            <input type="file" name="image" class="form-control image" id="image" style="float:right">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/offer_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
        
		 <button type="submit" class="btn btn-primary" id="btnAdd">اضف العرض</button>
			  </div>
		  </form>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function load(){
	$.get('/admin/offers/fetch',function(data){
		$.each(data.data,function(key,val){
			key=key+1;
		  $('#tableOffer').append("<tr>"+
							   "<td>"+key+"</td>"
							   +"<td id='ename'>"+val.name+"</td>"
							   +"<td id='edescription'>"+val.description+"</td>"
							   +"<td id='esale'>"+val.sale+"%</td>"
							   +"<td >"+'<img src="{{asset('uploads/offer_images')}}/'+val.image+'" width="100" height="100"  data-photo='+val.image+' id="eimage">'+
							   "</td>"
							   +"<td>"
							   +"<button class='btn btn-warning' id='btnShow' data-id="+val.id+" data-toggle='modal' data-target='#showModal'>عرض</button>"+
							   "</td>"
							   +"<td>"
							   +"<button class='btn btn-info' id='btnEdit' data-id="+val.id+" data-toggle='modal' data-target='#EditModal'>تعديل</button>"+
							   "</td>"
							   +"<td>"
							   +"<button class='btn btn-danger' id='btnDelete' data-id="+val.id+">حذف</button>"+
							   "</td>"+
							   "</tr>");
		});
		
	});
	}
load();		
		///////////////////
$(".image").change(function () {

    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image-preview').attr('src', e.target.result);
		}
 reader.readAsDataURL(this.files[0]);
	}
});
$(document).on('click','#btnShow',function(){
			id=$(this).data('id');
			let action  = "{{ url('/') }}/admin/offers/show/"+id;
	$.get(action,{id:id},function(data)
			{
			$('#name').val(data.data.name);
			$('#description').val(data.data.description);
			$('#sale').val(data.data.sale);
			 $('#imageShow').attr('src','{{asset('uploads/offer_images')}}/'+data.data.image+'');
			})
		});
$(document).on('click','#btnEdit',function(){
			id=$(this).data('id');

 name=$(this).parent().parent().find('#ename').text();
 description=$(this).parent().parent().find('#edescription').text();
sale=$(this).parent().parent().find('#esale').text();
image=$(this).parent().parent().find('#eimage').attr("src");
id=$(this).parent().parent().find('#btnEdit').attr('data-id');
	$('#idEdit').attr('data-id',id);
	$('#nameEdit').val(name);
	$('#descriptionEdit').val(description);
	$('#saleEdit').val(sale);	
	$('#imageEdit').attr("src",image);
	$('#update').attr('data-id',$(this).data('id'));

});
$('#formEdit').on('submit', function(e) {
   e.preventDefault();
	    
	  id=$('#update').attr('data-id');
	  let url= "{{ url('/') }}/admin/offers/update/"+id;
	
      name=$('#nameEdit').val();
	  description=$('#descriptionEdit').val();
	  sale=$('#saleEdit').val();
	  image=$('#imageEdit').val();
	 var data=new FormData($('#formEdit')[0]);
	$.ajax({
    url : url,
    type: "POST",
    data :data,
    processData: false,
    contentType: false,
    success:function(data){
    
		$('#nameEdit').val('');
        $('#descriptionEdit').val('');
        $('#saleEdit').val('');
        $('#imageEdit').attr("src");
		
	   $('#tableOffer').html('');
		 
	   load();
	   
    }
	});
  });
$('#formOffer').on('submit', function(e) {
        e.preventDefault();
	
        let url         = "{{ url('/') }}/admin/offers/store";
        name=$('#nameOffer').val();
	    description=$('#descriptionOffer').val();
	    sale=$('#saleOffer').val();
	    image =$('#image').val() ;
	    var data=new FormData($('#formOffer')[0]);
	console.log(data);
	$.ajax({
    url : url,
    type: "POST",
    data : data,
    processData: false,
    contentType: false,
    success:function(data){
    console.log('true');
		
		$('#nameOffer').val('');
        $('#descriptionOffer').val('');
        $('#saleOffer').val('');
        $('#image').val('');
		
		 $('#tableOffer').append("<tr>"+
							   "<td >"+data.store.id+"</td>"
							   +"<td id='ename'>"+data.store.name+"</td>"
							   +"<td id='edescription'>"+data.store.description+"</td>"
							   +"<td id='esale'>"+data.store.sale+"%</td>"
							   +"<td >"+'<img src="{{asset('uploads/offer_images')}}/'+data.store.image+'" width="100" height="100" data-photo='+data.store.image+' id="eimage">'+
							   "</td>"
							   +"<td>"
							   +"<button class='btn btn-warning' id='btnShow' data-id="+data.store.id+" data-toggle='modal' data-target='#showModal'>عرض</button>"+
							   "</td>"
							   +"<td>"
							   +"<button class='btn btn-info' id='btnEdit' data-id="+data.store.id+" data-toggle='modal' data-target='#EditModal'>تعديل</button>"+
							   "</td>"
							   +"<td>"
							   +"<button class='btn btn-danger' id='btnDelete' data-id="+data.store.id+">حذف</button>"+
							   "</td>"+
							   "</td>");
		}
		})
	});



$(document).on('click','#btnDelete',function(){
	id=$(this).data('id');
	let action  = "{{ url('/') }}/admin/offers/destroy";
	v=confirm('هل انت تريد مسح هذا الحقل');
	if(v==true){
	$.post(action,{id:id},function(){
		$('#tableOffer').html('');
	      load();
			});
	}

		
		else
			{
				 				 
              
				
			}
	});
});
	

</script>
@endsection