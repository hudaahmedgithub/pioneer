 <div id="searchProducts">
                    <div class="exp-content" id="searchPrograms">
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