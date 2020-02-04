@extends('frontend.layouts.main')
@section('content')

                <!-- End Header -->
                <!-----------------------------------Start Page Content ----------------------->
                <div class="container">
                    <div class="programs-content">
                        <h2>برامجنا</h2>
                        <div class="row">
                          
							@foreach($services as $service)
                            <div class="col-md-6 col-xs-12">
                                <div class="card mb-5">
                                    <img src="{{url('frontend/imgs',$service->image)}}" />
                                    <div class="card-body">
                                        <h3>{{$service->name}}</h3>
                                        <span><a href="{{route('progDetails',$service->id)}}">اطلب الآن <i class="fas fa-shopping-cart"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                           
                        </div>
                    </div>
                </div>
                <!-----------------------------------End Page Content ------------------------->
				
				@endsection