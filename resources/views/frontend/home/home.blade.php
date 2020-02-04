@extends('frontend.layouts.main')
@section('content')

                <!-- Main Content -->

              
                <!-- Start About -->
                <section class="about text-center">
                    <div class="container">
                        <div class="about-text" id="about">
                            <h2 class="el-messeri">عن الشركة</h2>
                            <p>فضل شركات التسويق الإلكترونى لخدماتك ونشاطك التجارى على الإنترنت على كل قنوات التسويق المختلفة مع دراسة وخطة تسويقية شاملة </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-card">
                                    <i class="fas fa-desktop fa-3x text-danger"></i>
                                    <h5>نفّذ مشاريعك بسهولة</h5>
                                    <p class="arial-font">اطرح مشروعك واترك مهمة تنفيذه لأفضل خبراء الوطن العربي</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-card">
                                    <i class="fas fa-desktop fa-3x text-danger"></i>
                                    <h5>نفّذ مشاريعك بسهولة</h5>
                                    <p class="arial-font">اطرح مشروعك واترك مهمة تنفيذه لأفضل خبراء الوطن العربي</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-card">
                                    <i class="fas fa-desktop fa-3x text-danger"></i>
                                    <h5>نفّذ مشاريعك بسهولة</h5>
                                    <p class="arial-font">اطرح مشروعك واترك مهمة تنفيذه لأفضل خبراء الوطن العربي</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-card">
                                    <i class="fas fa-desktop fa-3x text-danger"></i>
                                    <h5>نفّذ مشاريعك بسهولة</h5>
                                    <p class="arial-font">اطرح مشروعك واترك مهمة تنفيذه لأفضل خبراء الوطن العربي</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-card">
                                    <i class="fas fa-desktop fa-3x text-danger"></i>
                                    <h5>نفّذ مشاريعك بسهولة</h5>
                                    <p class="arial-font">اطرح مشروعك واترك مهمة تنفيذه لأفضل خبراء الوطن العربي</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-card">
                                    <i class="fas fa-desktop fa-3x text-danger"></i>
                                    <h5>نفّذ مشاريعك بسهولة</h5>
                                    <p class="arial-font">اطرح مشروعك واترك مهمة تنفيذه لأفضل خبراء الوطن العربي</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About -->

                <!-- Start Statistics -->
                <section class="statistics text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="statistics-card">
                                    <i class="fas fa-calendar-alt fa-2x"></i>
                                    <h5>سنوات الخبرة</h5>
                                    <h4>1</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="statistics-card rose-color">
                                    <i class="fas fa-calendar-alt fa-2x"></i>
                                    <h5>سنوات الخبرة</h5>
                                    <h4>1</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="statistics-card yellow-color">
                                    <i class="fas fa-calendar-alt fa-2x"></i>
                                    <h5>سنوات الخبرة</h5>
                                    <h4>1</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="statistics-card aqua-color">
                                    <i class="fas fa-calendar-alt fa-2x"></i>
                                    <h5>سنوات الخبرة</h5>
                                    <h4>1</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Statistics -->

                <!-- Start Service -->
                <section class="service">
                    <div class="container">
                        <h2 class="text-center el-messeri">خدماتنا</h2>
						@foreach($services as $serv)
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <h5> {{ $serv->name }}</h5>
                                        <p>{{ $serv->description }}</p>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                            
                        </div>
						@endforeach
                    </div>
                </section>
                <!-- End Service -->

                <!-- Start question -->
                <section class="question text-center">
                    <div class="container">
                        <h2 class="el-messeri">هل تريد أن تبدأ مشروع جديد؟</h2>
                        <a href="#" class="start">ابدأ الآن</a>
                    </div>
                </section>
                <!-- End question -->

              

@endsection