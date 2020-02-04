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
          <h1 class=" text-center">جدول التليفونات</h1>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-success" style="float:right">التليفونات</h6>
				   
			<button class="btn btn-success"  data-toggle="modal" data-target="#addModal" style="float:left">
			اضف تليفون
			</button>
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0"style="float:right">
                  <thead>
				
                    <tr>
					  <th>الرقم</th>
                      <th>الاسم</th>
                      <th> رقم التليفون</th>
                      <th>العرض</th>
					  <th>التعديل</th>
					  <th>الحذف</th>
                    </tr>
                  </thead>
                 
                  <tbody  id="tablePhone" >
				  
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
        <h4 class="modal-title pull-right" id="myModalLabel">عرض التليفون</h4>
      </div>
      <div class="modal-body" dir="rtl" >
	 <label style="float:right">الاسم</label>
		<input type="text" name="name" id="name" class="form-control">
		 <div class="col-md-12">
		  <label style="float:right"> رقم التليفون</label>
	       <input type="tel" name="phone" id="phone" class="form-control" style="float:right" required>  
		</div>
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
		  <h4 class="modal-title pull-right" id="myModalLabel">تعديل التليفون</h4>
      </div>
      <div class="modal-body" dir="rtl" >
<form method="post" id="formEdit" >
		@csrf
	<input type="hidden" name="id" id="idEdit" >
	 <label style="float:right">الاسم</label>
		<input type="text" name="name" id="nameEdit" class="form-control">
	
	 <div class="col-md-12">
		  <label style="float:right">رقم التليفون</label>
			 
	       <input type="tel" name="phone" id="phoneEdit" class="form-control" step="float:right" required>  
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
        <h4 class="modal-title pull-right" id="myModalLabel">اضف التليفون</h4>
      </div>
      <div class="modal-body" dir="rtl">
		<form  method="POST" id="formPhone" >
               {{csrf_field()}}
			  <div class="col-md-12">
			  <label style="float:right" >الاسم</label>
	        <input type="text" name="name" id="namePhone" class="form-control" style="float:right">
		</div>
			 <div class="col-md-12">
		 
			  <label style="float:right"> رقم التليفون</label>
	       <input type="tel" name="phone" id="phonePhone" class="form-control" style="float:right" required>  
		</div>  
		

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
        
		 <button type="submit" class="btn btn-success" id="btnAdd">اضف التليفون</button>
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
	$.get('/admin/phones/fetch',function(data){
		$.each(data.data,function(key,val){
			key=key+1;
		  $('#tablePhone').append("<tr>"+
							   "<td>"+key+"</td>"
							   +"<td id='ename'>"+val.name+"</td>"
							   +"<td id='ephone'>"+val.phone+"</td>"
							
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


$(document).on('click','#btnShow',function(){
			id=$(this).data('id');
			let action  = "{{ url('/') }}/admin/phones/show/"+id;
	$.get(action,{id:id},function(data)
			{
			$('#name').val(data.data.name);
			$('#phone').val(data.data.phone);
			})
		});
$(document).on('click','#btnEdit',function(){
	
 id=$(this).data('id');
 name=$(this).parent().parent().find('#ename').text();
 phone=$(this).parent().parent().find('#ephone').text();

id=$(this).parent().parent().find('#btnEdit').attr('data-id');
	$('#idEdit').attr('data-id',id);
	$('#nameEdit').val(name);
	$('#phoneEdit').val(phone);
	$('#update').attr('data-id',$(this).data('id'));
	
});
$('#formEdit').on('submit', function(e) {
   e.preventDefault();
	    
	  id=$('#update').attr('data-id');
	  let url= "{{ url('/') }}/admin/phones/update/"+id;
      name=$('#nameEdit').val();
	  phone=$('#phoneEdit').val();
	 var data=new FormData($('#formEdit')[0]);
	
	$.ajax({
    url : url,
    type: "POST",
    data :data,
    processData: false,
    contentType: false,
    success:function(data){
    
		$('#nameEdit').val('');
        $('#phoneEdit').val('');
		$('#tablePhone').html('');
		 
	   load();
	}
	});
  });
$('#formPhone').on('submit', function(e) {
        e.preventDefault();
	
        let url         = "{{ url('/') }}/admin/phones/store";
        name=$('#namePhone').val();
	    phone=$('#phonePhone').val();
	    var data=new FormData($('#formPhone')[0]);
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
		$('#namePhone').val('');
       $('#tablePhone').append("<tr>"+
							   "<td >"+data.store.id+"</td>"
							   +"<td id='ename'>"+data.store.name+"</td>"
						       +"<td id='ephone'>"+data.store.phone+"</td>"
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
	let action  = "{{ url('/') }}/admin/phones/destroy";
	v=confirm('هل انت تريد مسح هذا الحقل');
	if(v==true){
	$.post(action,{id:id},function(){
		$('#tablePhone').html('');
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