@extends('frontend.layouts.main')
@section('content')

     
                <!-- End Header -->
                <!----------------------- Start Page-Content --------------------------------->
  <div class="container">
                    <div class="offers-content">
                        <h2>العــروض</h2>
                        <h3>عروض البرامج</h3>
				@foreach($offers as $offer)
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{url('uploads/offer_images',$offer->image)}}" alt="offer">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <h4>خصم {{$offer->sale}} % على {{$offer->name}}  </h4>
                                <span><i class="fas fa-calendar-alt"></i>{{$offer->created_at}}</span>
                                <p>{{$offer->description}}</p>
                                <div class="btns">
                                    <button><a href="#">التفاصيل ... </a></button>
                                    <button><a href="#البرامج/programs.html"> اطلب الآن!</a></button>
                                </div>
                            </div>
                        </div>

                        <!-- HR -->
                        <div class="row justify-content-center _underline">
                            <span></span>
                            <span></span>
                        </div>
                        <!-- ./HR -->
						
						@endforeach
@endsection