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
          <h1 class=" text-center">جدول الرسائل</h1>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary" style="float:right">الرسائل</h6>
				   <h2 style="display:none"  id="showMessage">لا يوجد رسائل جديده</h2>
			
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0"style="float:right">
                  <thead>
				
                    <tr>
					  <th>الرقم</th>
                      <th>اسم الراسل</th>
						 <th>ايميل الراسل</th>
					   <th>تليفون الراسل</th> 
                      <th>وصف الرساله</th>
						<th>مشاهده الرساله</th>
						<th>العرض</th>
					  <th>الحذف</th>
                    </tr>
                  </thead>
                 
                  <tbody  id="tableContact" >
				  
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
        <h4 class="modal-title pull-right" id="myModalLabel">عرض الرساله</h4>
      </div>
      <div class="modal-body" dir="rtl" >
	 <label style="float:right">اسم الراسل</label>
		<input type="text" name="name" id="name" class="form-control">
	<label style="float:right">ايميل الراسل</label>
		<input type="text" name="email" id="email" class="form-control">
	<label style="float:right">تليفون الراسل</label>
		<input type="text" name="phone" id="phone" class="form-control">
	
	<label style="float:right" >وصف الرساله</label>
		<textarea type="text" name="message"
		id="message" class="form-control" rows="8" cols="20"></textarea>
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"style="float:right" id="btnRead" >اغلاق</button>
       
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
	$.get('/admin/contacts/fetch',function(data){
	if(data.data.length==0)
		{
			$('#showMessage').show();
		}
		else
			{
		$.each(data.data,function(key,val){
			key=key+1;
			
		  $('#tableContact').append("<tr>"+
							   "<td>"+key+"</td>"
							   +"<td id='ename'>"+val.name+"</td>"
							   +"<td id='eemail'>"+val.email+"</td>"
								+"<td id='ephone'>"+val.phone+"</td>"
							   +"<td id='emessage'>"+val.message+"</td>"
							   +"<td>"+"<span class='badgeWatch'></span>"+"</td>"
							   
							   +"<td>"
							   +"<button class='btn btn-warning' id='btnShow' data-id="+val.id+" data-toggle='modal' data-target='#showModal'>عرض</button>"+
							   "</td>"
							  
							   +"<td>"
							   +"<button class='btn btn-danger' id='btnDelete' data-id="+val.id+">حذف</button>"+
							   "</td>"+
							   "</tr>");
		
			   $('.badgeWatch').css("background-color", "#0bf");
				$('.badgeWatch').css("color", "#fff");
					$('.badgeWatch').html("<span>"+'رساله غير مقرؤءه'+"</span>");
			
		});
			}
	});
	}
load();		
		///////////////////
$(document).on('click','#btnShow',function(){
			id=$(this).data('id');
			let action  = "{{ url('/') }}/admin/contacts/show/"+id;
	$.get(action,{id:id},function(data)
			{
			$('#name').val(data.data.name);
			$('#email').val(data.data.email);
		    $('#phone').val(data.data.phone);
			$('#message').val(data.data.message);
		$.post("{{ url('/') }}/admin/contacts/update/"+id,{id:id},function()
	   {
		
	   });
			
			})
		});
	
$(document).on('click','#btnRead',function(){
	$('#btnRead').attr('data-id',$(this).data('id'));
			let action  = "{{ url('/') }}/admin/contacts/update/"+id;
	watch=$('.badge').css("background-color");
	$.post(action,{id:id},function()
	{
		$('#tableContact').html('');
	      load();
	})

});
			
$(document).on('click','#btnDelete',function(){
	id=$(this).data('id');
	let action  = "{{ url('/') }}/admin/contacts/destroy";
	v=confirm('هل انت تريد مسح هذا الحقل');
	if(v==true){
	$.post(action,{id:id},function(){
		$('#tableContact').html('');
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