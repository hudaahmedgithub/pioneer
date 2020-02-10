@extends('frontend.layouts.main')
@section('content')
  @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_error')!!}</strong>
            </div>
            
            @endif
          @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
	            <button type="button" class="close" data-dismiss="alert">×</button>	
                   <strong>{!! session('flash_message_success')!!}</strong>
            </div>
            
            @endif

   <div class="container">
                    <div class="hosting-content">
                        <h2>إستضافة المواقع وحجز الدومينات</h2>
                        <div class="hosting-details">
                            <p>تقدم شركة pioneers solutions إحدى الشركات الرائدة فى مجال استضافة المواقع فى مصر اقوى خطط الاستضافة وحجز الدومينات وفق أرقى معايير الجودة في الخوادم واستضافة المواقع على شبكة الانترنت العالمية بعد دراسة عملية دقيقة لسوق استضافة
                                المواقع ومتطلبات العملاء واحتياجاتهم لذا فقد وفرت العديد من الخطط لاستضافة المواقع منها استضافة لينكس واستضافة ويندوز والتي تخدم كل أنواع المواقع دون استثناء , كما توفر شركة pioneers solutions لتصميم المواقع وتطبيقات الهواتف
                                الذكية فى مصر طاقم دعم فني عالي الخبرة في ادارة السيرفرات لتقدم أعلى مستوى في الحماية على الخوادم والسرعة في تصفح المواقع المستضافة وهذا بفضل السيرفرات القوية التي يتم تجهيزها وربطها على شبكة الانترنت عبر أقوى داتا سنتر
                                بالاضافة لتوفير النسخ الاحتياطية للمواقع المستضافة بشكل يومي وأسبوعي وشهري مما يعني ضمان عدم فقدان الموقع لأي سبب كان .

                            </p>
                            <button class="host-btn"><a href="#">اطلب الان</a></button>
                        </div>
                        <div class="packages">
                            <h3>باقات خدمات استضافة المواقع وحجز الدومين</h3>
                            <div class="package text-center">
                                <h4>استضافة المواقع علي <span>LINUX</span></h4>
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="card" style="margin-bottom: 20px">
                                            <div class="card-body" >
                                                <h5>LINUX</h5>
                                                <h6>ECONOMY</h6>
                                                <ul>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                                <button class="card-btn"><a href="#">اشتر الآن!</a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="card card-special">
                                            <div class="card-body">
                                                <h5>LINUX</h5>
                                                <h6 class="special">ULTIMATE</h6>
                                                <ul>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                                <button class="card-btn"><a href="#">اشتر الآن!</a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="card" style="margin-bottom: 20px">
                                            <div class="card-body">
                                                <h5>LINUX</h5>
                                                <h6>DELUXE</h6>
                                                <ul>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                                <button class="card-btn"><a href="#">اشتر الآن!</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package text-center">
                                <h4>استضافة المواقع علي <span>WINDOWS</span></h4>
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="card"style="margin-bottom: 20px">
                                            <div class="card-body">
                                                <h5>WINDOWS</h5>
                                                <h6>ECONOMY</h6>
                                                <ul>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                                <button class="card-btn"><a href="#">اشتر الآن!</a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="card card-special ">
                                            <div class="card-body">
                                                <h5>WINDOWS</h5>
                                                <h6 class="special">ULTIMATE</h6>
                                                <ul>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                                <button class="card-btn"><a href="#">اشتر الآن!</a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="card" style="margin-bottom: 20px">
                                            <div class="card-body">
                                                <h5>WINDOWS</h5>
                                                <h6>DELUXE</h6>
                                                <ul>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                                <button class="card-btn"><a href="#">اشتر الآن!</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testemonials">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="share">
                                        <h4>شـارك</h4>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-whatsapp-square"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="rating">
                                        <h3> التقييم</h3>
                                        <div class="widget">
                                            <input type="radio" name='star' id="star1" /> <label for="star1"></label>
                                            <input type="radio" name='star' id="star2" /> <label for="star2"></label>
                                            <input type="radio" name='star' id="star3" /> <label for="star3"></label>
                                            <input type="radio" name='star' id="star4" /> <label for="star4"></label>
                                            <input type="radio" name='star' id="star5" /> <label for="star5"></label>

                                        </div>
                                        <div class="bars">
                                            <div class="five">5 <i class="fas fa-star"></i></div>
                                            <div class="four">4 <i class="fas fa-star"></i></div>
                                            <div class="three">3 <i class="fas fa-star"></i></div>
                                            <div class="two">2 <i class="fas fa-star"></i></div>
                                            <div class="one">1 <i class="fas fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HR -->
                    <div class="row justify-content-center _underline _withMargin">
                        <span></span>
                        <span></span>
                    </div>
                    <!-- ./HR -->

                     <div class="container">
                    <div class="contact-content">
                        <h2>تواصل معنا</h2>
                        <div class="form">
                            <form action="{{url('contact')}}" method="post">
								{{csrf_field()}}
                        <input type="text" name="name" placeholder="الاسم" required />
                        <input type="email" name="email" placeholder="البريد الالكتروني" required />
                        <select id="country" name="country_id" class="form-control"  required>
				@foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                  @endforeach
                        </select>
                                <input type="tel" name="phone" placeholder="رقم الهاتف" />
                                <input placeholder="الموقع الالكتروني"  name="email_site" type="email">
                                <textarea placeholder="اكتب رسالتك" name="message"></textarea>
                                <input type="submit" value="إرسال" required />
                            </form>
                        </div>
                        <h4>للتواصل مع المبيعات</h4>
						@foreach($phones as $phone)
                        <h5> {{$phone->phone}} </h5>
						 @endforeach
                    </div>
                </div>
                </div>
@endsection