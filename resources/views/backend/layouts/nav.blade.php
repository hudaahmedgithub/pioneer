<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#35f;color:#fff;font-size:20px">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="float:right">اليسر <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="float:right;color:#fff;font-size:20px">داشبورد الامن</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

   
  
<li class="nav-item">
        <a class="nav-link" href="{{url('admin/websites/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">اعدادات الموقع</span>
        </a>
      </li>
		    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/programs/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">البرامج</span>
        </a>
      
      </li>
		    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/jobs/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">الوظائف</span>
        </a>
      
      </li>
		    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/experiences/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">التجارب</span>
        </a>
      
      </li>
<li class="nav-item">
        <a class="nav-link" href="{{url('admin/complanes/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">الشكاوى والمقترحات</span>
        </a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="{{url('admin/offers/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px"> الخصومات العروض</span>
        </a>
      
      </li>
		    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/services/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">الخدمات</span>
        </a>
      
      </li>
	<li class="nav-item">
        <a class="nav-link" href="{{url('admin/contacts/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">  الرسائل الجديده</span>
        </a>
      
      </li>
		<li class="nav-item">
        <a class="nav-link" href="{{url('admin/contactsRead/index')}}" >
          <i class="fas fa-fw fa-cog"style="float:right" ></i>
          <span style="float:right;color:#fff;font-size:20px">الرسائل المقروءه</span>
        </a>
      
      </li>
	  </ul>
	
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
			  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     <span class="caret" style="color:#b03;font-size:20px">مرحبا {{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
			</ul>
		  </nav>
      <div class="topbar-divider d-none d-sm-block"></div>

             
		