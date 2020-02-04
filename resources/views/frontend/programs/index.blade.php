@extends('frontend.layouts.main')
@section('content')
                <!-- Main Content -->
 <!------------------------ Start Page Content ------------------------->
                  <div class="container">
                    <div class="programs-content">
                        <h2>برامجنا</h2>
                        <div class="row">
							@foreach($programs as $prog)
                            <div class="col-md-6 col-xs-12">
                                <div class="card mb-5">
                                    <img src="{{url('uploads/program_images',$prog->image)}}"/>
                                    <div class="card-body">
                                        <h3>{{$prog->name}}</h3>
                                        <span><a href="{{url('/contact')}}">اطلب الآن <i class="fas fa-shopping-cart"></i></a></span>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
                <!------------------------ End Page Content ------------------------->
@endsection