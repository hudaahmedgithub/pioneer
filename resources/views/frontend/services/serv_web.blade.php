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
                    <div class="web-content text-center">
                        <h2>خدمة تصميم المواقع</h2>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <p>تصميم موقع إلكترونى هى الخطوة التى عليك التوجه إليها في الوقت الحالي لما في ذلك من أهمية كبيرة لإثبات تواجدك في السوق والتغلب على المنافسين . كمان يساعدك أيضا في التسويق لشركتك ومنتجاتك فأقل تكلفة وبسهولة، كل ما عليك فعله
                                    هو إتخاذ خطوة تصميم موقع إلكترونى لشركتك والبدأ بإضافة التفاصيل الخاصة بشركتك ومنتجاتك والعروض التى تقوم بتقديمها . بإمكان شركة Pioneers Solutions مساعدتك في تصميم الموقع الإلكترونى الذي تحتاج إليه وبما يتناسب أيضا
                                    في مواجهة شركتك ونوع الخدمات أو المنتجات التى تقوم بتقديمه فيما يلي سيتم عرض المميزات الفنية لتصميم موقع إلكترونى للشركات والمؤسسات.</p>
                                <button class="con-btn"><a href="#">اتصل بنا</a></button>
                                <button class="apply"><a href="#form">طلب الخـدمة</a></button>
                            </div>
                            <div class="col-md-6 col-xs-12">
                          <img src="{{asset('frontend/imgs/web1.png')}}" alt="web1" />
                            </div>
                        </div>
                        <div class="work-categories text-center">
                            <h3>تصميم موقع الكتروني لكافة المجالات</h3>
                            <p>قامت شركة Pioneers Solutions أيضا بتصميم موقع إلكترونى لكثير من المجالات ومن ضمنها تصميم مواقع الشركات وتصميم مواقع إلكترونية خاصة بشركات التسويق العقارى وأخر خاص بشركات الإستثمار العقارى وتصميم متجر إلكترونى لعرض المنتجات
                                و البيع أونلاين.</p>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="{{asset('frontend/imgs/company.png')}}" alt="company" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="{{asset('frontend/imgs/market.png')}}" alt="company" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="{{asset('frontend/imgs/invest.png')}}" alt="company" /></a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"><img src="{{asset('frontend/imgs/commerce.png')}}" alt="company" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="work-details">
                            <h3>التـفاصيـل الفنية</h3>
                            <p>- تقدم كل المواقع Dynamic Design تأتي بلوحة تحكم كاملة للتحكم في الموقع دون الحاجة للرجوع للشركة.
                                <br /> - تحديد الصفحات وطريقة عرضها وتصميمها حسب نوع شركتك والغرض من الموقع.
                                <br /> - تحديد شكل الموقع وتصميمه وسعره والوقت المتوقع للإنتهاء من تصميمه قبل البدأ به.
                                <br /> - إمكانية تصميم الموقع بأكثر من لغة.
                                <br /> - وجود معارض صور وفيديوهات.
                                <br /> - تصميم شريط خاص بالأخبار لعرض آخر أخبار الشركة.
                                <br /> - إمكانية وجود مركز تحميل لرفع الصور والفيديوهات.
                                <br /> - نوفر الحماية التامة والكاملة للمواقع علي سيرفراتنا.
                                <br /> - نقدم جميع خدمات تصميم مواقع الشركات الذي يحقق لك المزيد من الأنتشار والمزيد من العملاء والمبيعات .
                                <br /> - تصميم مواقع تتوافق مع محركات البحث وقواعد الأرشفة.
                                <br /> - الموقع " Responsive " مناسب للعرض على كافة الإجهزه ( الكمبيوتر - الموبيل - التابلت )
                                <br /> - إنشاء لوحة تحكم خاصة لإدارة جميع محتويات الموقع، الصفحات والأقسام والقوائم .
                                <br /> - دعم الدردشة والشات (live support ) مع العملاء من خلال الموقع.
                                <br /> - إمكانية وجود الدفع عن طريق الإنترنت من خلال الموقع الإلكترونى.
                                <br /> - النشرات البريدية والرسائل الدورية لاعضاء الموقع وامكانية التحكم بها بسهولة ويسر.
                                <br /> - عدد لانهائى من الإيميلات الرسمية الخاصة بالموقع للأشخاص المهتمين والمستهدفين.
                                <br /> - ربط موقعك بمواقع التواصل الاجتماعي مثل فيس بوك، تويتر، يوتيوب، جوجل بلس، لينكيدإن.</p>
                        </div>
                        <div class="portfolio">
                            <h3>سابقـة الأعمـال</h3>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/port1.png')}}" alt="port1" />
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/port1.png')}}" alt="port1" />
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/port1.png')}}" alt="port1" />
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/port1.png')}}" alt="port1" />
                                </div>
                            </div>
                        </div>
                        <div class="advantages">
                            <h3>مميزات التعامل مع شركةاليسر سوفت فى مجال تصميم المواقع</h3>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>استضافة مع دومين مجانًا</h4>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>تصميم فريد لكل موقع</h4>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>خبرة سابقة لأعمال مختلفة</h4>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>دعم فني شامل 24 ساعة </h4>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>الالتزام بمواعيد التسليم</h4>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>الاتقان وسرعة التسليم</h4>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>أسعار مناسبة</h4>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <h4>حماية قوية للبيانات</h4>
                                </div>
                            </div>
                        </div>
                        <h5>للتواصل مع المبيعات : @foreach($phones as $p)
						{{$p->phone}} -
							@endforeach
						</h5>
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