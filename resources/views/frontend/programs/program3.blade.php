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
                    <div class="program3-content">
                        <h2>برنامج إدارة موزعين الإنترنت Smart ISP</h2>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <p>البرنامج يخدم كل الشركات التى تعمل فى مجال توزيع الانترنت كما انه مهيأ للتعامل مع كل مزودى خدمات الانترنت باختلاف طبيعة حساباتها سواء تى اى داتا او اتصالات او لينك او نور او فودافون . يقوم برنامج ادارة شركات الانترنت بعمل
                                    حصر لكل العمليات التى تتم من خلال الموزعين او الموظفين مع مراعاة تبعية كل موزع او موظف للفرع الخاص به يتميز برنامج حسابات شركات الانترنت ان كل من الفروع والموزعين منفصلين حسابيا عن الفرع الرئيسى حيث يمكن لكل موزع او
                                    فرع متابعة الحسابات الخاصة من خلال لوحة التحكم الخاصة به . باستخدام برنامج حسابات شركات الانترنت يمكنك متابعة مراحل تركيب والتنقل من مرحلة لاخرى بناء على التغيرات التى تطرأ على الخطوط من مزودى الخدمة.</p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <img src="{{asset('frontend/imgs/program__3.jpg')}}" alt="program3" />
                                <button><a href="#form">اطلب الآن!</a></button>
                            </div>
                        </div>
                        <div class="program3-details">
                            <h3>امكانيات برنامج ادارة موزعين الانترنت </h3>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/program__3.jpg')}}" alt="program3" />
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <p>لم يعد من الصعب تنفيذ مهام متعددة فى وقت واحد . استرخ قليلا واترك مهمة ادارة شركتك بكل مهامها المعقدة برنامج ادارة موزعين الانترنت الأفضل , اذا كنت تتعامل مع شركة اتصالات فيمكنك اضافة كل فواتير عملائك على السيستم يدويا
                                        مهما كان عددها فى خطوة واحدة وذلك عن طريق تصدير القيم المدفوعة الى السيستم من شيت اكسيل . ابدأ بتسجيل مدفوعات عملائك على السيستم فى خطوة واحدة وذلك عن طريق تصدير الفواتير الى السيستم من شيت اكسيل ستجد كل التقارير
                                        التى تسعى للحصول عليها فى مكان واحد فقط اضغط على كلمة تقارير واحصل على ما تريد . يمكنك ارسال رسائل قصيرة ( SMS ) الى العملاء مباشرة من خلال برنامج ادارة شركات الانترنت كما يمكنك ضبط اعدادات الرسائل القصيرة لترسل
                                        تلقائياً واختيار سبب ارسال الرسالة .</p>
                                </div>
                            </div>
                            <h3>مميزات برنامج ادارة موزعين الانترنت Smart ISP</h3>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <p>برنامج Smart ISP لادارة شركات الانترنت الطريقة المثالية التى تقدم لك يد العون فى ادارة شركتك من اى مكان وفى اى وقت كل ما تحتاجه هو ان تكون متصل بالانترنت .

                                        <br/> بمجرد الدخول الى النظام يمكنك معرفة ومتابعة الآتى :

                                        <br/> 1-يمكنك متابعة كافة الطلبات التى تتم عن طريق الموظفين والموزعين .

                                        <br/> 3-يمكنك الحصول على كل التقارير الخاصة بتقييم الموزعين و الفروع .

                                        <br/> 2-يمكنك معرفة ايرادات ومصروفات كل موظف لان كل موظف له خزنة مستقلة عن الخزنة الرئيسية

                                        <br/> 4-يمكنك متابعة كل ما يخص الدعم الفنى من أعطال ومشاكل وتعويضات .
                                        <br/> 6-يمكنك ارسال تنبيه او تكليف بمهام محددة الى الموظفين كما يمكنك تحديد التاريخ المطلوب فيه تنفيذ هذه المهمة .

                                        <br/> 5-يمكنك متابعة عملية استلام وتسليم الرواتر مع الشركات المزودة للخدمة .
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/program__3.jpg')}}" alt="program3" />
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

                    <!-- HR -->
                    <div class="row justify-content-center _underline _withMargin">
                        <span></span>
                        <span></span>
                    </div>
                    <!-- ./HR -->

                    <div class="form" id="form">
                        <h4>طلب هذه الخدمة</h4>
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

                </div>
 @endsection