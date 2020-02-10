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
                    <div class="program1-content">
                        <h2>برنامج حسابات وكاشير Easy Store lite</h2>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <p>
                                    برنامج حسابات وكاشير Easy Store lite لإدارة الأنشطة التجارية الصغيرة و المحلات هل تبحث عن برنامج لإدارة نشاط تجارى صغير سواء محل أو معرض او نشاط تجارى صغيرة أو غيرها و لا تجد البرنامج المناسب بالأسعار المناسبة . - فإليك برنامج حسابات وكاشير ونقاط بيع
                                    متميز يساعدك فى متابعة و تسجيل تفاصيل نشاطك التجارى بمنتهى السهولة . - يساعدك برنامج إدارة المحلات التجارية Easy Store lite فى تسجيل كافة التفاصيل المتعلقه بالـ ( الحسابات – المخازن – الأصناف – المبيعات – المشتريات
                                    - التقارير ) . برنامج سهل الإستخدام لادارة المحلات التجارية والمخازن وغير معقد ويدير نشاطك التجارى بالكامل ويمكنك الحصول على النسخة المجانية قبل شراء البرنامج.
                                </p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <img src="{{asset('frontend/imgs/program__2.jpg')}}" alt="program2" />
                                <button><a href="#form">اطلب الآن!</a></button>
                            </div>
                        </div>
                        <div class="program1-details">
                            <h3>برنامج حسابات وكاشير لكافة الانشطة التجارية</h3>
                            <div class="row">
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5 class="special">محلات تجارية صغيرة</h5>
                                </div>
                            </div>
                            <h3>مميزات برنامج حسابات Easy Store Lite </h3>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/program__2.jpg')}}" alt="program1" />
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <p>♦ تسجيل عدد لا نهائى من الأصناف
                                        <br/> ♦ تسجيل المخازن و تحديد المسئول عن كل مخزن
                                        <br/> ♦ تسجيل التحويل بين المخازن
                                        <br/> ♦ تصدير و إستيراد الأصناف من شيت الإكسيل
                                        <br/>♦ جرد المخازن بالباركود
                                        <br/>♦ تسوية كميات الأصناف
                                        <br/>♦ إدارة كل من أقسام الحسابات و المبيعات و المشتريات بالتفصيل
                                        <br/>♦ ربط الفروع على قاعدة بيانات واحدة
                                    </p>
                                </div>
                            </div>
                            <h3>قوائم برنامج حسابات Easy Store Lite</h3>
                            <div class="row text-center special">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>الأصناف</h4>
                                    <p>سجيل و متابعة كافة الأصناف التى تتعامل بها فى نشاطك التجارى . بإمكانك تسجيل عدد لا نهائى من الأصناف على قاعدة بيانات برنامج حسابات Easy Store و من خلال قائمة الأصناف و التى تضم ( المخازن – الأصناف – الشركات - الأنواع
                                        – الوحدات - الألوان - المقاسات - تصدير البيانات إللى Excel - إستيراد البيانات من ملف Excel - طباعة الباركود )</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>المخازن</h4>
                                    <p>لإدارة المخازن والمستودعات ومتابعة كافة التفاصيل المتعلقة بالأصناف المتواجدة يمكنك الإعتماد بشكل كلى على قائمة الموجودة فى برنامج حسابات ومخازن Easy Store . قائمة المخازن تضم التالى ( تسوية كمية الأصناف – الهالك – تحويل
                                        من مخزن لأخر – جرد المخازن بالباركود ) </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>المشتريات</h4>
                                    <p> إدارة قسم المشتريات فى برنامج المحاسبة Easy Store سوف تساعدك فى متابعة وإدارة كافة المعاملات التى تتم فى المشتريات . وتضم الآتى: (الموردين – قائمة المشتريات – تعديل فاتورة المشتريات – مرتجع المشتريات – مرتجع مشتريات
                                        بدون فاتورة – حسابات الموردين – إشعار خصم إو إضافة لمورد - إستيراد بالدولار ) </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>المبيعات</h4>
                                    <p>قسم المبيعات تتم فيه كثير من المعاملات و التى تؤثر فى كافة الأقسام الأخرى والتى بدورها سوف تساعدك بشكل ممتازفى ادارة نشاطك. وتضم القائمة ( العملاء - المندوبين - فاتورة المبيعات - تعديل فاتورة مبيعات - مرتجع المبيعات
                                        - فاتورة الأسعار - أصناف تحت التسليم - حسابات العملاء - دفع أقسام العملاء - إشعار خصم أو إضافة لعميل - زيارة لعميل ) </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>الحسابات</h4>
                                    <p>بإمكانك إدارة و تسجيل كافة التفاصيل المتعلقة بقسم الحسابات بالتفصيل و بمنتهى الدقة من خلال برنامج محاسبة Easy Store و تشمل القائمة على ( الإيرادات - المصروفات – الخزائن – البنوك – الشيكات – جارى الشركاء – القروض – السلف
                                        – المسحوبات الشخصية – مصروفات عامة – المصروفات التأسيسة – الأصول الثابتة – إهلاكات الأصول ) .</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>ادارة شئون الموظفين</h4>
                                    <p>من خلال قائمة شئون الموظفين التابعة لبرنامج حسابات ومخازن Easy Store بإمكانك متابعة الموظفين و تسجيل كل من ( أسماء الموظفين – مواعيد الحضور والإنصراف – التأخير – الأجازات – الأذونات – المرتبات – المكافئات – الجزئات
                                        ) </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>التقارير</h4>
                                    <p>لمتابعة كافة المعاملات التى تتم داخل نشاطك التجارى تم إنشاء قائمة التقارير التى من خلال لها يمكنك عمل تقاريرمختلفة بين الحسابات و المبيعات و المشتريات و المخازن و الأصناف و كما يمكنك عمل تقارير الربحية و غيرها من التقارير
                                        التى من خلالها يمكنك من خلالها متابعة نشاطك التجارى بالكامل و مساعدتك على الإدارة بسهولة تامة. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>الاعدادات</h4>
                                    <p>من خلال قائمة الاعدادات يمكنك تحديد كافة الاعدادات الخاصة ببرنامج محاسبة Easy Store بما يناسب نشاطك التجارى واضافة بيانات الشركة والاعدادات العامة و المستخدمين والصلاحيات واعداد قاعدة البيانات </p>
                                </div>
                            </div>
                            <h5>للتواصل مع المبيعات</h5>
                            <h6>@foreach($phones as $phone)
							{{$phone->phone}}
							-
								@endforeach
							</h6>
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