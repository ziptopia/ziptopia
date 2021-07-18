<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.0.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="/css/admin/admin.main.css">
    @yield('header_css_js')
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700;900&display=swap" rel="stylesheet">
  
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
</head>
<body>
    
    <div class="wrap">
        <header id="header">
          <div class="gnb_ex">
            <div class="logo">
              <a href="{{ url('/') }}">
                <img src="/images/gnb_logo.png" alt="메인로고">
              </a>
            </div>
            <nav class="gnb">
              <ul>
                    @if( Auth::check() )
                    <li>
                      <form id="LogoutForm">
                        @csrf
                      </form>
                      <p><a href="#" id="LogoutAct">로그아웃</a></p>
                    </li>
                    @else
                    <li>
                    <a href="/admin/login" class="login">
                        <p>로그인 {{ session()->get('adminuser') }}</p>
                    </a>
                    </li>
                    @endif
              </ul>
            </nav>
          </div><!-- gnb_ex -->
 
          <div class="sub_bg">
          </div>
        </header>


    
        <div id="container">
                @yield('content')
        </div>
    

      </div><!-- wrap -->
    
      @yield('import_js')
        

</body>
</html>