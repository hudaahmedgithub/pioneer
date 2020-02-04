   <body>
        <div class="page-content">
            <!------------------------------ Start Navbar ----------------------------------->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<?php 
							use App\Website;
							$slider=Website::firstOrFail();
							?>
                <a class=" logo" href="{{url('/')}}">{{$slider->name}} </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    
                        <li>
                            <a class=" nav-link" href="{{url('about')}}" >عن الشركة</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('services.index')}}">الخدمات</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('program.index')}}">البرامج</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('progDetails')}}" >شرح البرامج</a>
                        </li>
                        <li>
                            <a class="nav-link" href="ourClients.html" >عملائنا</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('offers.index')}}" >العروض</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('jobs.index')}}" >الوظائف</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('contact')}}" >تواصل معنا</a>
                        </li>
                        <li>
                            <a class="nav-link" href="pageMap.html" >خريطة الموقع</a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:-40px">
                        <ul class="navbar-nav ml-auto" >
                            <li class="nav-item">
                                <form action="" class="search-form">
                                    <input type="text" class="form-control search" placeholder="بحث">
                                    <i class="fas fa-search"></i>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
			       <div class="">
                <!-- Main Content -->

			  <!-- Start Header -->
                <section class="header text-center">
                    <div class="overlay" style="background-image:url('{{asset('uploads/website_images/'.$slider->image)}}');
					background-color: rgba(0, 0, 0, 0.8);">
                        <div class="container">
					       
							<h3>{{$slider->title_slider}}</h3>
							<h6>{{$slider->description}}</h6>
                            <form action="">
                                <input type="text" class="form-control" placeholder="ابحث الآن عن اي مشروع تريده ..">
                                <button type="submit" class="btn btn-danger btn-rounded">ابحث الآن</button>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- End Header -->

                            