@extends('frontend.layouts.main')
@section('content')
      <div class="container">
                    <div class="programs-content">
                        <h2>برامجنا</h2>
                        <div class="row">
							@foreach($programs as $p)
                            <div class="col-md-6 col-xs-12">
                                <div class="card mb-5">
                                    <img src="{{url('uploads/program_images',$p->image)}}" />
                                    <div class="card-body">
                                        <h3>{{$p->name}} </h3>
                                        <span><a href="{{route('programDetails',$p->id)}}">اطلب الآن <i class="fas fa-shopping-cart"></i></a></span>
                                    </div>
                                </div>
                            </div>
							@endforeach
						</div>
		  </div>
</div>

@endsection