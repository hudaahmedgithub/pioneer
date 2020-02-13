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
          <h1 class=" text-center">جدول الانشطه</h1>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-success" style="float:right">الانشطه</h6>
					 <form class="form-inline search-container ml-auto my-2 my-lg-0" id="searchActivity" >
               
                   <input class="form-control mr-sm-2 search-in" type="search" placeholder="Search" aria-label="Search" id="search" >
                   <button class="btn btn-danger my-4 my-sm-0 search-btn" type="submit" style="margint-left:-200px">search</button>
             
                 </form> 
			<button class="btn btn-success"  data-toggle="modal" data-target="#addModal" style="float:left">
			اضف نشاط
			</button>
				
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0"style="float:right">
                  <thead>
				
                    <tr>
					  <th>الرقم</th>
                      <th>اسم النشاط</th>
                      <th> وصف النشاط </th>
                      <th>العرض</th>
					  <th>التعديل</th>
					  <th>الحذف</th>
                    </tr>
                  </thead>
                 
                  <tbody  id="tableActivity" >
				  
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
        <h4 class="modal-title pull-right" id="myModalLabel">عرض النشاط</h4>
      </div>
      <div class="modal-body" dir="rtl" >
	 <label style="float:right">اسم النشاط</label>
		<input type="text" name="name" id="name" class="form-control">
		 <div class="col-md-12">
		   <label style="float:right" >وصف الخدمة</label>
		<textarea type="text" name="description"
		id="description" class="form-control" rows="8" cols="20"></textarea>
		</div>
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
		  <h4 class="modal-title pull-right" id="myModalLabel">تعديل النشاط</h4>
      </div>
      <div class="modal-body" dir="rtl" >
<form method="post" id="formEdit" enctype="multipart/form-data" >
		@csrf
	<input type="hidden" name="id" id="idEdit" >
	 <label style="float:right">اسم النشاط</label>
		<input type="text" name="name" id="nameEdit" class="form-control">
	
	 <div class="col-md-12">
			<label style="float:right" >وصف النشاط</label>
		<textarea type="text" name="description"
		id="descriptionEdit" class="form-control" rows="8" cols="20"></textarea>
		</div>	  
	 <div class="form-group" style="float:right">
        <label style="float:right">صوره النشاط</label>
              <input type="file" name="image" class="form-control image"  style="float:right">
                     
             <img src="{{ asset('uploads/activity_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="" id="imageEdit" style="float:right">
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
        <h4 class="modal-title pull-right" id="myModalLabel">اضف النشاط</h4>
      </div>
      <div class="modal-body" dir="rtl">
		<form  method="POST" id="formActivity" enctype="multipart/form-data" >
               {{csrf_field()}}
			  <div class="col-md-12">
			  <label style="float:right" >اسم النشاط</label>
	        <input type="text" name="name" id="nameActivity" class="form-control" style="float:right">
		</div>
			 <div class="col-md-12">
		 
			  <label style="float:right"> وصف النشاط </label>
	    
	       <textarea type="text" name="description"
		id="descriptionActivity" class="form-control" rows="8" cols="20" style="float:right"></textarea>
	  
		<div class="form-group">
				  <label style="float:right">صوره النشاط</label>
                            <input type="file" name="image" class="form-control image" id="image" style="float:right">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/activity_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                     </div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
        
		 <button type="submit" class="btn btn-success" id="btnAdd">اضف النشاط</button>
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
	$.get('/admin/activites/fetch',function(data){
		$.each(data.data,function(key,val){
			key=key+1;
		
		  $('#tableActivity').append("<tr>"+
							   "<td>"+key+"</td>"
							   +"<td id='ename'>"+val.name+"</td>"
							   +"<td id='edescription'>"+val.description+"</td>"
							   +"<td >"+'<img src="{{asset('uploads/activity_images')}}/'+val.image+'" width="100" height="100"  data-photo='+val.image+' id="eimage">'+
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
			let action  = "{{ url('/') }}/admin/activites/show/"+id;
	$.get(action,{id:id},function(data)
			{
			$('#name').val(data.data.name);
			$('#description').val(data.data.description);
			 $('#imageShow').attr('src','{{asset('uploads/activity_images')}}/'+data.data.image+'');
			})
		});
$(document).on('click','#btnEdit',function(){
			id=$(this).data('id');

 name=$(this).parent().parent().find('#ename').text();
 description=$(this).parent().parent().find('#edescription').text();
image=$(this).parent().parent().find('#eimage').attr("src");
id=$(this).parent().parent().find('#btnEdit').attr('data-id');
	$('#idEdit').attr('data-id',id);
	$('#nameEdit').val(name);
	$('#descriptionEdit').val(description);
	$('#imageEdit').attr("src",image);
	$('#update').attr('data-id',$(this).data('id'));
	
});
$('#formEdit').on('submit', function(e) {
   e.preventDefault();
	    
	  id=$('#update').attr('data-id');
	  let url= "{{ url('/') }}/admin/activites/update/"+id;
	
      name=$('#nameEdit').val();
	  description=$('#descriptionEdit').val();
	 
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
     
        $('#imageEdit').val('');
		
	   $('#tableActivity').html('');
		 
	   load();
	   
    }
	});
  });
$('#formActivity').on('submit', function(e) {
        e.preventDefault();
	
        let url         = "{{ url('/') }}/admin/activites/store";
        name=$('#nameActivity').val();
	    description=$('#descriptionActivity').val();
	    image =$('#image').val() ;
	    var data=new FormData($('#formActivity')[0]);
	
	$.ajax({
    url : url,
    type: "POST",
    data : data,
    processData: false,
    contentType: false,
    success:function(data){
    
		$('#nameActivity').val('');
        $('#descriptionActivity').val('');
        
        $('#image').val('');
		
		  $('#tableActivity').append("<tr>"+
							   "<td >"+data.store.id+"</td>"
							   +"<td id='ename'>"+data.store.name+"</td>"
							   +"<td id='edescription'>"+data.store.description+"</td>"
							   +"<td >"+'<img src="{{asset('uploads/activity_images')}}/'+data.store.image+'" width="100" height="100" data-photo='+data.store.image+' id="eimage">'+
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


$('#searchActivity').submit(function(e){
	e.preventDefault();
search=$('#search').val();
console.log(search);
let action  = "{{ url('/') }}/admin/activites/searchActive";
$.post(action,{search:search},function(data){
	
	$('#tableActivity').html('');
	$.each(data.activities,function(key,val){
		key=key+1;
	  $('#tableActivity').append("<tr>"+
							   "<td >"+key+"</td>"
							   +"<td id='ename'>"+val.name+"</td>"
							   +"<td id='edescription'>"+val.description+"</td>"
							   +"<td >"+'<img src="{{asset('uploads/activity_images')}}/'+val.image+'" width="100" height="100" data-photo='+val.image+' id="eimage">'+
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
							   "</td>");
	});
	
	});
});

$(document).on('click','#btnDelete',function(){
	id=$(this).data('id');
	let action  = "{{ url('/') }}/admin/activites/destroy";
	v=confirm('هل انت تريد مسح هذا الحقل');
	if(v==true){
	$.post(action,{id:id},function(){
		$('#tableActivity').html('');
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