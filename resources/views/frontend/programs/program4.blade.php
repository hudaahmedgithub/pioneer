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
                    <div class="program4-content">
                        <h2>برنامج ادارة العيادات الطبية Easy Clinic</h2>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <p>برنامج ادارة العيادات الطبية Easy Clinic يعتبر من أفضل وأسهل طرق إدارة العيادات والمراكز الطبية بجميع تخصصاتها لذلك برنامج إدارة العيادات Easy Clinic يعتبر الحل الأمثل لمساعدتك في تنظيم الادارة الطبية والإدارية المالية
                                    داخل العيادة أو المركز الطبي الخاص بك. حيث يقدم برنامج ادارة العيادات المساعدة للطبيب لإدارة عيادته الخاصة بنفسه، بأسلوب بسيط وسهل بعيدا عن التعقيدات والتفاصيل الكثيرة، وتوفيرا للوقت المستخدم للتسجيل لأنه يتميز بسهولة
                                    الإستخدام والتنصيب حيث يتم اغلب التعامل مع برنامج العيادة باستخدام الماوس ولا يحتاج البرنامج الى أجهزة حاسوب ذات مواصفات عالية.
                                </p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <img src="{{asset('frontend/imgs/clinic.jpg')}}" alt="clinic" />
                                <button><a href="#form">اطلب الآن!</a></button>
                            </div>
                        </div>
                        <div class="program4-details">
                            <h3>مميزات برنامج ادارة العيادات والمراكز الطبية Easy Clinic</h3>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/clinic.jpg')}}" alt="clinic">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <p>1- تسجيل جميع البيانات للمريض وإمكانية البحث عن المريض بالإسم أو الرقم أو العنوان و ملف مرضى للزائر وإستعراضه عند كل زيارة.
                                        <br/> 2- يمكن للطبيب الإطلاع على عدد الحالات الخاصة به في أي وقت وإجمالي الإيرادات لجميع أنواع الكشوفات الخاصة به في حالة اذا كان يتعامل بالنسبة.
                                        <br/> 3- إمكانيه عمل كشف سريع للمريض وعمل روشته علاجية تشمل اسم المريض و الطبيب المعالج ونوع الكشف وسعره بشعار العيادة وطباعتها .
                                        <br/> 4- إمكانية اضافة التعاقدات وتحديد نسبة العيادة والخصم .
                                        <br/> 5- إستعراض مواعيد الإعادة لمرضى أصحاب الإستشارة.
                                    </p>
                                </div>
                            </div>
                            <h3> كيفية ادارة العيادات والمراكز الطبية Easy Clinic</h3>
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-xs-6 ">
                                    <h4> ادارة شئون المرضى </h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <h4> ادارة شئون المرضى </h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <h4>ادارة شئون المرضى</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <h4>ادارة شئون المرضى</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <h4>ادارة شئون المرضى</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <h4>ادارة شئون المرضى</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <h4>ادارة شئون المرضى</h4>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <h4>ادارة شئون المرضى</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs12 special">
                                    <h5>ادارة شئون المرضى</h5>
                                    <p>♦ واجهة مستخدم سهلة الاستخدام تمكن موظفي الأستقبال من :

                                        <br/> ♦إدارة سجلات المرضي (إضافة، تعديل،بحث، حذف). ♦ تسجيل كل البيانات الخاصة بالمريض .

                                        <br/> ♦ ملف شامل ومتكامل عن المريض يعرض السجل الكامل حالة المريض السابقة

                                        <br/> ♦مراجعة الحسابات الخاصة بالمريض ومعرفة مديونيات المريض وتسجيل المدفوعات .

                                        <br/> ♦ تسجيل كل فواتير المبيعات الخاصة بالمريض وسهولة إستدعائها مرة اخري.

                                        <br/> ♦امكانية عمل كشف سريع للمريض وطباعة الروشتة .
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 special">
                                    <img src="{{asset('frontend/imgs/clinic1.png')}}" alt="clinic1">
                                </div>
                                
                                <div class="col-md-6 col-xs12">
                                    <h5>ادارة شئون المرضى</h5>
                                    <p>♦ واجهة مستخدم سهلة الاستخدام تمكن موظفي الأستقبال من :

                                        <br/> ♦إدارة سجلات المرضي (إضافة، تعديل،بحث، حذف). ♦ تسجيل كل البيانات الخاصة بالمريض .

                                        <br/> ♦ ملف شامل ومتكامل عن المريض يعرض السجل الكامل حالة المريض السابقة

                                        <br/> ♦مراجعة الحسابات الخاصة بالمريض ومعرفة مديونيات المريض وتسجيل المدفوعات .

                                        <br/> ♦ تسجيل كل فواتير المبيعات الخاصة بالمريض وسهولة إستدعائها مرة اخري.

                                        <br/> ♦امكانية عمل كشف سريع للمريض وطباعة الروشتة .
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 special">
                                    <img src="{{asset('frontend/imgs/clinic2.png')}}" alt="clinic1">
                                </div>
                                <div class="col-md-6 col-xs-12 special">
                                    <h5>ادارة شئون المرضى</h5>
                                    <p>♦ واجهة مستخدم سهلة الاستخدام تمكن موظفي الأستقبال من :

                                        <br/> ♦إدارة سجلات المرضي (إضافة، تعديل،بحث، حذف). ♦ تسجيل كل البيانات الخاصة بالمريض .

                                        <br/> ♦ ملف شامل ومتكامل عن المريض يعرض السجل الكامل حالة المريض السابقة

                                        <br/> ♦مراجعة الحسابات الخاصة بالمريض ومعرفة مديونيات المريض وتسجيل المدفوعات .

                                        <br/> ♦ تسجيل كل فواتير المبيعات الخاصة بالمريض وسهولة إستدعائها مرة اخري.

                                        <br/> ♦امكانية عمل كشف سريع للمريض وطباعة الروشتة .
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 special">
                                    <img src="{{asset('frontend/imgs/clinic3.png')}}" alt="clinic1">
                                </div>
                                
                                <div class="col-md-6 col-xs-12 special">
                                    <h5>ادارة شئون المرضى</h5>
                                    <p>♦ واجهة مستخدم سهلة الاستخدام تمكن موظفي الأستقبال من :

                                        <br/> ♦إدارة سجلات المرضي (إضافة، تعديل،بحث، حذف). ♦ تسجيل كل البيانات الخاصة بالمريض .

                                        <br/> ♦ ملف شامل ومتكامل عن المريض يعرض السجل الكامل حالة المريض السابقة

                                        <br/> ♦مراجعة الحسابات الخاصة بالمريض ومعرفة مديونيات المريض وتسجيل المدفوعات .

                                        <br/> ♦ تسجيل كل فواتير المبيعات الخاصة بالمريض وسهولة إستدعائها مرة اخري.

                                        <br/> ♦امكانية عمل كشف سريع للمريض وطباعة الروشتة .
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 special">
                                    <img src="{{asset('frontend/imgs/clinic4.png')}}" alt="clinic1">
                                </div>
                                <div class="col-md-6 col-xs-12 special">
                                    <h5>ادارة شئون المرضى</h5>
                                    <p>♦ واجهة مستخدم سهلة الاستخدام تمكن موظفي الأستقبال من :

                                        <br/> ♦إدارة سجلات المرضي (إضافة، تعديل،بحث، حذف). ♦ تسجيل كل البيانات الخاصة بالمريض .

                                        <br/> ♦ ملف شامل ومتكامل عن المريض يعرض السجل الكامل حالة المريض السابقة

                                        <br/> ♦مراجعة الحسابات الخاصة بالمريض ومعرفة مديونيات المريض وتسجيل المدفوعات .

                                        <br/> ♦ تسجيل كل فواتير المبيعات الخاصة بالمريض وسهولة إستدعائها مرة اخري.

                                        <br/> ♦امكانية عمل كشف سريع للمريض وطباعة الروشتة .
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-12 special">
                                    <img src="{{asset('frontend/imgs/clinic5.png')}}" alt="clinic1">
                                </div>
                            </div>
                            <h6>للتواصل مع المبيعات</h6>
                           <h6>@foreach($phones as $phone)
							{{$phone->phone}}
							-
							   @endforeach
							</h6>
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