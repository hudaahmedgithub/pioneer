@extends('frontend.layouts.main')
@section('content')

 
    <div class="container">
                    <div class="exp-content">
                        <h2>شرح البرامج</h2>
						@foreach($programs as $prog)
                        <h3>{{$prog->name}}</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{url('uploads/program_images',$prog->image)}}" alt="program1">
                            </div>
                            <div class="col-md-6">
                                <p> {{$prog->description}}</p>
                                <button><a href="#">التفاصيل .. </a></button>
                                <button><a href="#">اطلب الآن</a></button>
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
                       
@endsection