@extends('frontend.layouts.main')
@section('content')
    <!-- Page Content -->
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

     
                <!-------------------------- Start Page Content ------------------->
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
                <!-------------------------- End Page Content --------------------->

@endsection