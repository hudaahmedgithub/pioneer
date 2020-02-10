@extends('frontend.layouts.main')
@section('content')
  <div class="container">
                    <div class="map-content text-center">
                        <h2>خريطة الموقع</h2>
                        <h3><a href="{{url('/')}}">الصفحة الرئيسية</a></h3>
                        <i class="fas fa-arrow-down mb-5"></i>
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="ul-box mb-5">
                                    <button class="h3"><a href="{{route('program.index')}}">البرامج</a></button>
                                    <ul>
										@foreach($programs as $key=>$p)
                                        <li><i class="fas fa-arrow-down mb-5 mt-5"></i></li>
                                        <li><button><a href="{{route('programDetails',$p->id)}}">برنامج{{$key+1}}</a></button></li>
                                        @endforeach
                                    </ul>
                                    <div class="row justify-content-center _underline d-md-none">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="ul-box mb-5">
                                    <button class="h3"><a href="{{route('services.index')}}"> الخدمات</a></button>
                                    <ul>
                                        <li><i class="fas fa-arrow-down mb-5 mt-5"></i></li>
                                        <li><button><a href="{{route('serviceDetails',3)}}">خدمة 1</a></button></li>
                                        <li><i class="fas fa-arrow-down mb-5 mt-5"></i></li>
                                        <li><button><a href="{{route('serviceDetails',4)}}">خدمة 2</a></button></li>
                                        <li><i class="fas fa-arrow-down mb-5 mt-5"></i></li>
                                        <li><button><a href="{{route('serviceDetails',5)}}">خدمة 3</a></button></li>
                                        <li><i class="fas fa-arrow-down mb-5 mt-5"></i></li>
                                        <li><button><a href="{{route('serviceDetails',6)}}">خدمة4</a></button></li>
                                    </ul>
                                    <div class="row justify-content-center _underline d-md-none">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="ul-box mb-5">
                                    <button class="h3"><a href="{{url('programsExp')}}">شرح البرامج</a></button>
									
                                    <div class="row justify-content-center _underline d-md-none">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
								 <div class="ul-box mb-5">
                                    <button class="h3"><a href="{{route('offers.index')}}">العروض</a></button>

                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="ul-box mb-5">
                                    <button class="h3"><a href="{{route('jobs.index')}}">الوظائف</a></button>

                                </div>
								
                            </div>
							

                        </div>
                    </div>
                </div>
                <!----------------------- End Page-Content -------------------------->
@endsection