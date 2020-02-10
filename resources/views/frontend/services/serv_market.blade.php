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
                    <div class="marketing-content">
                        <h2>خدمات التسويق الإلكترونـي</h2>
                        <div class="marketing-details">
                            <h3>نبذة عن الشركـة</h3>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <p>شركة Pioneers تعد من أفضل شركات التسويق الرائدة فى السوق المصرى فى مجال تكنولوجيا المعلومات، فقد انشئت فى مطلع عام 2010م على يد نخبة من المتخصصين لتبدء نشاطها وتنافس فى الريادة على مستوى القطر المصرى، فحققت العديد من
                                        الإنجازات فى تلك الفترة القصيرة واستحوزت على ثقة العملاء واصبح لدينا عملاء نعتز بهم، وانتجنا العديد من الحلول البرمجية المناسبة لجميع الأنشطة التجارية وتقديم خدمات تصميم المواقع وتصميم تطبيقات الجوال وتقديم أفضل
                                        خدمات التسويق الإلكترونى لجميع الأعمال والتى راعينا في تطويرها عدد من المعايير التى تضمن تحقيق أقصى إنجاز وأستفادة وحماية لأعمال عملائنا، حتى إستحقينا لقب أفضل شركة تسويق الكترونى فى مصر .</p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/market1.jpg')}}" alt="marketing">
                                </div>
                            </div>
                            <h3>خدمات التسويق الإلكترونى التى تقدمها الشركة والتى يحصل علية العميل بعد طلب الخدمة</h3>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/market2.jpg')}}" alt="marketing">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <p> أصبح التسويق الالكتروني هو من أهم اهتمامات الشركات الناشئة والكبيرة، والمصانع والمطاعم والمحلات والقري السياحية الصغيرة والكبيرة وقد تميز التسويق الالكتروني والتجارة الالكترونية بفتح اسواق جديدة وعملاء مستهدفين حيث
                                        ان التسويق الالكتروني تخطي بالمنتج أو الخدمة للحدود الإقليمية للتواجد في الأسواق الالكترونية سواء المحلية أو العالمية ويتمتع بالسرعة وبإنتشار واسع فى شتى المجالات المختلفة، ومن أهم قنوات التسويق الإلكترونى على شبكة
                                        الإنترنت هو التسويق على شبكات التواصل الإجتماعى SMM والتسويق من خلال إشهار وأرشفة المواقع من خلال محركات البحث SEO ، ولكى تعرف الفرق بينهما يمكنك قراءة هذا الموضوع الفرق بين التسويق الإلكترونى عن طريق Social Media
                                        وعن طريق إشهار المواقع Seo .</p>
                                </div>
                            </div>
                            <h4>خدمة التسويق على مواقع التواصل الإجتماعى <span>SMM</span></h4>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <h5>تقدم شركة بايونيرز لك فى خدمة التسويق على شبكات التواصل الإجتماعى SMM:-</h5>
                                    <p>1- إنشاء صفحات بإسم شركتك ونشاطك التجاري على أشهر منصات السوشيال ميديا ( فيس بوك – تويتر - انستغرام – يوتيوب – وغيرها حسب رغبتك )

                                        <br/> 2- إنشاء محتوى جذاب بشكل دائم ومستمر على جميع الصفحات

                                        <br/> 3- إدارة كل الصفحات بشكل يومى حتى مع الأجازات

                                        <br/> 4- تصميم الصور والفيديوهات والمحتوى البصري ذات جودة عالية

                                        <br/> 5- الإستهداف الأمثل والصحيح للجمهور المهتم بمجالك ونشاطك التجارى

                                        <br/> 6- إظهار علامتك التجارية وإظهارها على نطاق واسع

                                        <br/> 7- الرد على التعليقات والرسائل وزيادة التفاعل على الصفحات

                                        <br/> 8- تحليل المنافسين على صفحاتهم والتفوق عليهم

                                        <br/> 9- التطوير المستمر وإثبات كفائتك بين المنافسين عبر كافة قنوات التواصل

                                        <br/> 10- عمل إحصائيات اسبوعية وشهرية عن عمل الصفحة وارسالها لك</p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/market1.jpg')}}" alt="marketing">
                                </div>
                            </div>
                            <h4>خدمات السيو وأرشفة المواقع <span>SEO</span></h4>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <h5>تقدم شركة بايونيرز لك فى خدمات السيو وأرشفة المواقع SEO:-</h5>
                                    </h5>
                                    <p>1- تحديد مدى توافق الموقع مع وعمل دراسة شاملة وخدمة تسويقية مناسبة.

                                        <br/> 2- تحسين نشاطك بشكل متكامل ندرسه ونفهم طبيعة خدماتك ومنتجاتك، ونعمل على دراسة المنافسين لك فى نفس مجالك لوضع خطة تسويق الكترونى متميزة للوصول لافضل نتائج لظهور موقعك فى محركات البحث جوجل.

                                        <br/>3- الكشف عن المشكلات والعواقب المحتملة حين العمل فى الموقع الالكترونى هل يرتفع فى محركات البحث ام ان الموقع يحتاج الى تغييره بموقع اخر.

                                        <br/> 4- تخفيض ترتيب موقعك الإلكترونى فى اليكسا.

                                        <br/> 5- ضبط الموقع واضافته لمشرفى المواقع webmaster google & bing

                                        <br/> 6- اضافة الموقع لمحركات البحث واهمهم Google و Bing و Yahoo

                                        <br/> 7- نشر محتوى بشكل مستمر على الموقع وإظهار المنتجات والخدمات التى تقدمها.

                                        <br/> 8- تصميم الصور الخاصة بالموقع بجودة عالية.

                                        <br/> 9- اضافة الموقع على Google Analytics لمتابعة الزيارات اليومية لموقعك.

                                        <br/> 10- عمل واضافة خريطة للموقع Sitemap لتتعرف مواقع البحث على خريطة الموقع.
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/market1.jpg')}}" alt="marketing">
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