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
          <h1 class=" text-center">جدول التجارب</h1>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success" style="float:right">التجارب
				</h6>
				 <form class="form-inline search-container ml-auto my-2 my-lg-0" id="searchExper" >
               
                   <input class="form-control mr-sm-2 search-in" type="search" placeholder="Search" aria-label="Search" id="search" >
                   <button class="btn btn-danger my-4 my-sm-0 search-btn" type="submit" style="margint-left:-200px">search</button>
             
       </form>   
			<button class="btn btn-success"  data-toggle="modal" data-target="#addModal" style="float:left">
			اضف تجربه
			</button>
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0"style="float:right">
                  <thead>
				
                    <tr>
					  <th>الرقم</th>
                      <th>اسم التجربه</th>
                      <th>وصف التجربه</th>
						<th>الصوره</th>
                      <th>العرض</th>
					  <th>التعديل</th>
					  <th>الحذف</th>
                    </tr>
                  </thead>
                 
                  <tbody  id="tableExper" >
				  
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
        <h4 class="modal-title pull-right" id="myModalLabel">عرض التجربه</h4>
      </div>
      <div class="modal-body" dir="rtl" >
	 <label style="float:right">اسم التجربه</label>
		<input type="text" name="name" id="name" class="form-control">
	
	<label style="float:right" >وصف التجربه</label>
		<textarea type="text" name="description"
		id="description" class="form-control" rows="8" cols="20"></textarea>
	<label style="float:right">صوره التجربه</label>
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
        <h4 class="modal-title pull-right" id="myModalLabel">تعديل التجربه</h4>
      </div>
      <div class="modal-body" dir="rtl" >
<form method="post" id="formEdit">
		@csrf
	<input type="hidden" name="id" id="idEdit" >
	 <label style="float:right">اسم التجربه</label>
		<input type="text" name="name" id="nameEdit" class="form-control">
	
	<label style="float:right" >وصف التجربه</label>
		<textarea type="text" name="description"
		id="descriptionEdit" class="form-control" rows="8" cols="20"></textarea>
	  <div class="form-group" style="float:right">
        <label style="float:right">صوره التجربه</label>
              <input type="file" name="image" class="form-control image"  style="float:right">
                     
             <img src="{{ asset('uploads/experience_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="" id="imageEdit" style="float:right">
           </div>
	
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:left">اغلاق</button>
       <button type="submit" class="btn btn-info " id="update"  style="float:right" >Edit</button>
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
        <h4 class="modal-title pull-right" id="myModalLabel">اضف التجربه</h4>
      </div>
      <div class="modal-body" dir="rtl">
		<form  method="POST" id="formExperiences" >
               {{csrf_field()}}
			  <div class="col-md-12">
			  <label style="float:right" >اسم التجربه</label>
	        <input type="text" name="name" id="nameExperiences" class="form-control" style="float:right">
		</div>
		  <div class="col-md-12">
			  <label style="float:right">شرح التجربه</label>
	       <textarea type="text" name="description"
		id="descriptionExperiences" class="form-control" rows="8" cols="20" style="float:right"></textarea>
		</div>	  
		 <div class="form-group">
			 <label style="float:right">صوره التجربه</label>
                            <input type="file" name="image" class="form-control image" id="image" style="float:right">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/experience_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

			
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
        
		 <button type="submit" class="btn btn-primary" id="btnAdd">اضف التجربه</button>
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
	$.get('/admin/experiences/fetch',function(data){
		$.each(data.data,function(key,val){
			key=key+1;
		  $('#tableExper').append("<tr>"+
							   "<td>"+key+"</td>"
							   +"<td id='ename'>"+val.name+"</td>"
							   +"<td id='edescription'>"+val.description+"</td>"
							   +"<td >"+'<img src="{{asset('uploads/experience_images')}}/'+val.image+'" width="100" height="100"  data-photo='+val.image+' id="eimage">'+
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
			let action  = "{{ url('/') }}/admin/experiences/show/"+id;
	$.get(action,{id:id},function(data)
			{
			$('#name').val(data.data.name);
			$('#description').val(data.data.description);
		    $('#imageShow').attr('src','{{asset('uploads/experience_images')}}/'+data.data.image+'');
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
	
	  let url= "{{ url('/') }}/admin/experiences/update/"+id;
      name=$('#nameEdit').val();
	  description=$('#descriptionEdit').val();
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
	    $('#tableExper').html('');
		 
	   load();
	   
    }
	});
  });
$('#formExperiences').on('submit', function(e) {
        e.preventDefault();
	
        let url   = "{{ url('/') }}/admin/experiences/store";
        name=$('#nameExperiences').val();
	    description=$('#descriptionExperiences').val();
	   
	    var data=new FormData($('#formExperiences')[0]);
	console.log(data);
	$.ajax({
    url : url,
    type: "POST",
    data : data,
    processData: false,
    contentType: false,
    success:function(data){
    console.log('true');
		console.log(data.store);
		$('#nameExperiences').val('');
        $('#descriptionExperiences').val('');
        
		  $('#tableExper').append("<tr>"+
							   "<td >"+data.store.id+"</td>"
							   +"<td id='ename'>"+data.store.name+"</td>"
							   +"<td id='edescription'>"+data.store.description+"</td>"
							    +"<td >"+'<img src="{{asset('uploads/experience_images')}}/'+data.store.image+'" width="100" height="100" data-photo='+data.store.image+' id="eimage">'+
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
$('#searchExper').submit(function(e){
	e.preventDefault();
search=$('#search').val();
console.log(search);
let action  = "{{ url('/') }}/admin/experiences/searchExper";
$.post(action,{search:search},function(data){
	
	$('#tableExper').html('');
	$.each(data.experience,function(key,val){
		key=key+1;
	  $('#tableExper').append("<tr>"+
							   "<td >"+key+"</td>"
							   +"<td id='ename'>"+val.name+"</td>"
							   +"<td id='edescription'>"+val.description+"</td>"
							   +"<td >"+'<img src="{{asset('uploads/experience_images')}}/'+val.image+'" width="100" height="100" data-photo='+val.image+' id="eimage">'+
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
	let action  = "{{ url('/') }}/admin/experiences/destroy";
	v=confirm('هل انت تريد مسح هذا الحقل');
	if(v==true){
	$.post(action,{id:id},function(){
		$('#tableExper').html('');
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