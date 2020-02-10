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
                    <div class="mobile-content">
                        <h2>تصميم تطبيقات الجوال</h2>
                        <div class="mobile-details">
                            <h3>لماذا قد تحتاج تطبيقات الجوال؟</h3>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <p>تصميم تطبيقات الجوال إنتشرت مؤخراً وبشكل كبير أنواع وأشكال مختلفة من تطبيقات الجوال التي تعتمد علي أنظمة مختلفة مثل أنظمة الـ Android وأنظمة الـ IOS للايفون وسبب ذلك الانتشار الكبير هو أن أغلب مستخدمي الإنترنت أصبحوا
                                        متصلين بالشبكة العنكبوتية عن طريق إستخدام الجوال أو الهواتف الذكية المحمولة وبالتالي أصبحت الشركات والمواقع التي تعتمد في تقديم خدماتها أو بيعها أو تقديم وبيع منتجاتها علي شبكة الإنترنت في النظر إلي الأمر كـ تطور
                                        تكنولوجي ولذلك اتجه معظم أصحاب الشركات والمؤسسات أو المواقع إلي أسهل طريقة لمعاودة التواصل مع مستخدمين الإنترنت بشكل أسرع وأفضل وهو عن طريق إنشاء وبرمجة تطبيقات خاصة بهم.</p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/mobile-application-design-1.jpg')}}" alt="mobile" />
                                </div>
                            </div>
                        </div>
                        <div class="mobile-details">
                            <h3>أسعار تصميم تطبيقات الجوال</h3>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/mobile3.jpg')}}" alt="mobile" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <p>
                                        إذا كان أول سؤال لديك ماهو سعر تصميم تطبيقات الجوال فذلك يعني بحثك عن أقل أسعار فى السوق وهذا لن يفيدك كثيراً فقد تحصل علي تطبيق غير متناسب مع وجهة نظرك أو به مشاكل تقنية كبيرة فإن أسعار تصميم التطبيقات لن يتم تحديدها قبل أن تضح فكرتك تماماً فأسعار التطبيقات
                                        مختلفة نظراً للخصائص التي تحتاجها في التطبيق الخاص بك فلا يمكن أن يكون تطبيق الواتساب مثل تطبيق التروكولر فهم يختلفوا في الخصائص وكذلك في الأسعار لذلك لأ أنصحك أن تبحث عن اقل شركة سعراً ولكن يجب أن تبحث عن من يمكنه
                                        تلبية طلباتك وتحقيق هدفك من تصميم تطبيق احترافى.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-details">
                            <h3>برمجة تطبيقات الجوال</h3>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <p>
                                        إذا كنت تريد الحصول علي خدمة برمجة تطبيقات الجوال بشكل إحترافي يحقق أهدافك من برمجة هذا التطبيق إذا فأنت يجب أن تتعامل مع شركة تصميم تطبيقات تتميز بقدرتها علي تحقيق أي فكرة برمجية وكذلك لديها فريق عمل لـ تصميم تطبيقات الجوال بزوق راقى ومحترف ليس كغيرها
                                        من شركات تصميم تطبيقات الجوال الأخرى، وبما أنك تقوم بقراءة مقال هذه الخدمة إذا أعتقد أن شركة pioneers solutions للحلول البرمجية وخدمات الويب المتكاملة هي أحد إختياراتك إذا يجب أن تعلم ماذا ستقدم لك شركة بايونيرز
                                        في خدمة برمجة تطبيقات الجوال وتصميم تطبيقات الجوال.
                                    </p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/mobile4.jpg')}}" alt="mobile" />
                                </div>
                            </div>
                        </div>
                        <div class="mobile-details">
                            <h3>اللغات المستخدمة في برمجة تطبيقات الجوال</h3>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <img src="{{asset('frontend/imgs/mobile2.jpg')}}" alt="mobile" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <p>
                                        <span>  لغة البرمجة " جافا " </span>: هي اللغة الاولى من لغات البرمجة التي يفضلها كافة مطورين تطبيقات الاندرويد حول العالم فهي تتميز بالمرونة ولكن يمكنك إستخدامها فقط في تطوير تطبيقات الأندرويد ولن تسعفك جيداً في
                                        تطبيقات الـ IOS ولكن نعتمد عليها في شركة pioneers solutions فور إعتماد كبير في حالة القيام بـ برمجة تطبيقات الاندرويد.

                                        <br/><span>Android Studio</span> : أفضل بيئة تطوير متكاملة لتطوير وتصميم تطبيقات اندرويد تسهل على المطورين كتابة الشفرة المصدرية لتطبيقات أندرويد، كما تسمح للمطور بمعاينة هيئة تطبيقه على مختلف قياسات الشاشات بشكل
                                        فوري أثناء التطوير، وتسهّل تطوير التطبيقات متعددة اللغات.

                                        <br/> <span>Swift </span> : هي اللغة الرسمية قامت بغزو نظام ابل فهي تراعي استخدام اخر واجهة برمجة التطبقات API الخاصة بأبل. لكن بالرغم من كونها لغة انشئت لتعمل جنبا الى جنب مع لغة Objective-C الى ان شركة ابل تعد
                                        هذه اللغة لتكون مستقبلا اللغة الاساسية لمبرمجي iOS كما انها تعفي المطورين من الثغرات الأمنية, حاليا تعتبر السويفت لغة مستقبل بنسبة للعملاق ابل.

                                        <br/> <span>Xcode</span> : تعتبر بيئة متكاملة لتطوير تطبيقات ios ويتضمن كل الادوات لإنشاء تطبيقات مذهلة لجميع منصات Apple.

                                        <br/> <span>XML</span> : تستخدم في تصميم تطبيقات الأندرويد عن طريق الديزاينر المسئول عن ذلك. وغيرها من لغات البرمجة المستخدمة على حسب كل نظام.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-details">
                            <h3 class="special">أمور يجب ان تتضح قبل اختيارك لنا </h3>
                            <div class="row">
                                <p>
                                    <span>   أنظمة التشغيل : </span> قبل قيامك بالتواصل معنا لـ برمجة وتصميم تطبيقات الجوال يجب أن تختار الفئة التي تقوم بإستهدافها وكذلك إختيار نظام التشغيل الخاص بهم أو الخاص بأغلبية الفئة المستخدمة فهناك أكثر من نظام
                                    تشغيل للهواتف الذكية مثل الـ Android و الـ IOS و الـ Windows Phone ونوفر لك خدمات برمجة التطبيقات في كل الأنظمة.

                                    <br/><br/><span>تنظيم التطبيق : </span> في حالة كنت ترغب في أن تضاف معلومات كثيرة إلي صفحات التطبيق الخاص بك فيجب أن تتم إضافة تلك المعلومات بشكل إستراتيجي حتي لا يمل المستخدم أو يشعر بالضياع داخل التطبيق فيقوم بإغلاقه
                                    ولا يعود مرة أخرى لذلك يقوم مطورين الهواتف الذكية لدينا بالعمل بطرق سهلة وبسيطة تجعل ترابط صفحات التطبيق ببعضها ترابط يجعل المستخدم يتنقل مابين الصفحات بكل سهولة وبسر وبالتالي لن يشعر بالضياع أو يكون التطبيق بطئ في
                                    التحميل مما يجعله يمل من الإنتظار وكذلك لا يسهتلك بطارية جهاز المستخدم فلا تقلق عزيزي العميل فنحن خبراء في تلك الأمور البسيطة الخاصة بـ برمجة تطبيقات الجوال .

                                    <br/><br/> <span>متابعة التطبيق بإستمرار :</span> يجب أن تعلم عميلنا العزيز بأن هناك تحديثات تتم بشكل دوري لكافة لغات البرمجة وكذلك بـ سياسات جوجل الخاصة بـ تطبيقات الجوال لذلك يجب أن تتم تحديثات علي التطبيق الخاص بك
                                    بشكل دوري يتناسب مع خوارزميات جوجل لـ تطبيقات الجوال وكذلك لتحسين التطبيق الخاص بك للمستخدمين .

                                    <br/><br/> وفي النهاية يجب أن نطمئنك عميلنا العزيز بأن شركة pioneers solutions للحلول البرمجية وخدمات الويب وتصميم المواقع تهتم بكافة الجوانب التي تم ذكرها بالأعلي وغيرها من الجوانب التي لن تذكر إلا للعميل بشخصه حتى
                                    تكون الصورة مفهومة واضحة امامة.

                                </p>
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

                    <div class="form">
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