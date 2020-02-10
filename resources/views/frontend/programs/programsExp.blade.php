@extends('frontend.layouts.main')
@section('content')
       <div class="container">
		   <div  id="searchPrograms">
		   <div id="searchProducts">
                    <div class="exp-content" >
                        <h2>شرح البرامج</h2>
						@foreach($programs as $p)
                        <h3>{{$p->name}}</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('frontend/imgs/austin-distel-jpHw8ndwJ_Q-unsplash.jpg')}}" alt="program1">
                            </div>
                            <div class="col-md-6">
                                <p>{{$p->description}}</p>
                                <button><a href="#">التفاصيل .. </a></button>
                                <button><a href="{{url('/contact')}}">اطلب الآن</a></button>
                            </div>
                        </div>

                        <!-- HR -->
                        <div class="row justify-content-center _underline _withMargin">
                            <span></span>
                            <span></span>
                        </div>
                        <!-- ./HR -->
@endforeach
					</div>
</div>
		   </div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
<script type="text/javascript">

	$(document).ready(function(){
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 });			   
$('#searchAll').submit(function(e){
	e.preventDefault();
search=$('#search').val();

$.post('/getSearch',{search:search},function(response){
	$('#searchProducts').html(response);
	});
});
$('#searchProgram').submit(function(e){
	e.preventDefault();
searchp=$('#searchP').val();
console.log(searchp);
$.post('/getSearchP',{searchp:searchp},function(response){
		console.log(response);
	$('#searchPrograms').html(response);
	});
});
	});
</script>
@endsection