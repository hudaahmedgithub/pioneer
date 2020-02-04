@extends('frontend.layouts.main')
@section('content')

                <!-- End Header -->
                <!----------------------------------- Start Page content ---------------------->
                <div class="container">
                    <div class="jobs-content">
                        <h2>الوظائف</h2>
			@foreach($jobs as $job)
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{url('uploads/job_images',$job->image)}}" alt="job">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <h3>الوظيفة :{{$job->name}} </h3>
								<p><span>الوصف : </span>{{$job->description}}</p>
                                <button><a href="#">التقدم للوظيفة</a></button>
                                <button><a href="#">التفصايل </a></button>
                            </div>
                        </div>

                        <!-- HR -->
                        <div class="row justify-content-center _underline">
                            <span></span>
                            <span></span>
                        </div>
                        <!-- ./HR -->
@endforeach
                    </div>
					
                </div>

{{$jobs->links()}}
                <!----------------------------------- End Page content ---------------------->
@endsection