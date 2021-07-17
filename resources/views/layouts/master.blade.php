<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="/images/favicon.ico">
  <link rel="stylesheet" href="/css/main.css">
  @yield('header_css_js')
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700;900&display=swap" rel="stylesheet">
  
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <!-- Main -->
  <script src="/js/main.js"></script>

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
                <a href="#" class="login">
                    <p>로그인 {{ session()->get('user') }}</p>
                </a>
                </li>
                <li>
                <a href="#" class="join">
                    <img src="/images/gnb_join.png" alt="회원가입아이콘">
                    <p>회원가입</p>
                </a>
                </li>
                @endif
            <li>
              <p><a href="#">고객센터</a></p>
            </li>
          </ul>
        </nav>
      </div><!-- gnb_ex -->
      <div class="lnb_ex">
        <nav class="lnb">
          <ul>
            <li>
              <a href="#">고객생생후기</a>
            </li>
            <li>
              <a href="#">왕초보<span>TIP</span></a>
            </li>
            <li class="subm coun01">
              <a href="#">착한견적상담</a>
              <ul class="submenu coun02">
                <li><a href="{{ url('/counsel/counsel') }}">3% 할인상담</a></li>
                <li><a href="{{ url('/counsel/counsel_free') }}">무료견적상담</a></li>
              </ul>
            </li>
            <li>
              <a href="#">진행과정</a>
            </li>
            <li class="subm gur01">
              <a href="#">자재보증서비스</a>
              <ul class="submenu gur">
                <li><a href="{{ url('/guarantee/guarantee') }}">자재보증서비스</a></li>
                <li><a href="#">보증가능업체</a></li>
              </ul>
            </li>
            <li>
              <a href="#">최종점검리스트</a>
            </li>
          </ul>
        </nav>
      </div><!-- lnb_ex -->
      <div class="sub_bg">
      </div>
    </header>
    <aside class="quick">
      <p><span>QUICK LINK</span></p>
      <div>
        <a href="#">
          <img src="/images/aside_why.png" alt="물음표이미지">
          <p>왜 집토피아 인가요?</p>
        </a>
      </div>
      <div>
        <a href="{{ url('/counsel/counsel') }}">
          <strong><span>3%</span> 할인</strong>
          <p>견적알아보기</p>
        </a>
      </div>
      <div>
        <a href="{{ url('/counsel/counsel_free') }}">
          <img src="/images/aside_calculator.png" alt="계산기이미지">
          <p>착한견적</p>
        </a>
      </div>
      <div>
        <a href="tel:070-8098-9111">
          <p>전화상담</p>
          <strong>
            <span>
              070<br>
              8098<br>
              9111
            </span>
          </strong>
        </a>
      </div>
    </aside><!-- aside -->
    <div class="popup">
      <div class="pop_base">
        <h2>집토피아 시작하기</h2>
        <p>간편하게 소셜 계정으로 견적조회 및</p>
        <p>
          다양한 집닥 서비스를 이용해보세요!
        </p>
        <ul>
          <li>
            <a href="{{ route('socialite.login', 'kakao') }}" id="kakaoLogin"><img src="/images/pop/login_kakao.png" alt="카카오로그인"></a>
          </li>
          <li>
            <a href="{{ route('socialite.login', 'naver') }}" id="naverLogin"><img src="/images/pop/login_naver.png" alt="네이버로그인"></a>
          </li>
          <li>
            <a href="{{ route('socialite.login', 'google') }}" id="googleLogin"><img src="/images/pop/login_google.png" alt="구글로그인"></a>
          </li>
          <li>
            <a href="#" class="login_email">이메일로 시작하기</a>
          </li>
        </ul>
      </div>
      <div class="pop_login_form">
        <h2>이메일로 시작하기</h2>
        <form id="pop_login_form" name="pop_login_form" class="login_form">
            @csrf
          <ul>
            <li>
              <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" autocomplete="off" required>
              <label for="email">이메일</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </li>
            <li>
              <input type="password" class="@error('password') is-invalid @enderror" id="password" name="password" autocomplete="off" required>
              <label for="password">비밀번호</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </li>
            <li>
              <button id="loginAct" type="button">로그인</button>
            </li>
          </ul>
        </form>
        <div>
          <a href="#">아이디 찾기</a><span>|</span><a href="#">비밀번호 찾기</a>
        </div>
        <div>
          <a href="#" class="join_email">집토피아 이메일로 회원가입</a>
        </div>
      </div>
      <div class="pop_join_form">
        <h2>회원가입</h2>
        <form id="join_form" class="join_form">
            @csrf
          <ul class="join_top">
            <li>
              <label for="join_id">아이디(이메일)</label>
              <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="이메일" autocomplete="off" required>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </li>
            <li>
              <label for="password">비밀번호</label>
              <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" placeholder="비밀번호" autocomplete="off" required minlength="8">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </li>
            <li>
              <label for="password-confirm">비밀번호 확인</label>
              <input type="password" id="password-confirm" name="password-confirm" class="@error('password-confirm') is-invalid @enderror" placeholder="비밀번호" autocomplete="off" required minlength="8">
            </li>
            <li>
              <label for="name">이름</label>
              <input type="text" id="name" name="name" placeholder="실명을 입력하세요." autocomplete="off" required>
            </li>
            <li>
              <label for="phone">휴대폰번호</label>
              <input type="tel" id="phone" name="phone" placeholder="'-'구분없이 입력'" autocomplete="off" required>
            </li>
          </ul>
          <ul class="join_bottom">
            <li>
              <input type="checkbox" id="chk_all"  name="agree">
              <label for="chk_all">모두 동의합니다.</label>
            </li>
            <div>
              <li>
                <input type="checkbox" id="chk_terms" value="약관동의" name="agree" required>
                <label for="chk_terms"><span>(필수)</span> 이용약관 동의</label>
                <a href="#">보기</a>
              </li>
              <li>
                <input type="checkbox" id="chk_user" name="agree" required>
                <label for="chk_user"><span>(필수)</span> 개인정보 취급방침 동의</label>
                <a href="#">보기</a>
              </li>
              <li>
                <input type="checkbox" id="chk_recieve" name="agree">
                <label for="chk_recieve"><span>(선택)</span> 마케팅 정보 수신 동의</label>
                <a href="#">보기</a>
              </li>
            </div>
          </ul>
          <button id="RegAct" type="button">회원가입</button>
        </form>
      </div>
      <a href="#" class="pop_close"><img src="/images/pop/btn_pop_off.png" alt="닫기"></a>
    </div>
    <div class="dim">
    </div><!-- popup -->

    <div id="container">
        @yield('content')
    </div>

    <footer id="footer">
      <div class="footer_nav">
        <nav>
          <ul>
            <li>
              <a href="#">
                회사소개
              </a>
            </li>
            <li>
              <a href="#">
                개인정보처리방침
              </a>
            </li>
            <li>
              <a href="#">
                이용약관
              </a>
            </li>
            <li>
              <a href="#">
                입점문의
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="footer_area_ex">
        <div class="footer_area">
          <div class="footer_logo">
            <a href="#">
              <img src="/images/footer_logo.png" alt="푸터로고">
            </a>
          </div>
          <div class="footer_txt">
            <p>㈜마켓스페이스 대표이사 | 주소 : 서울시 마포구 매봉산로<span>31</span> 에스플렉스센터 시너지움동 <span>7</span> 층 <span>58</span> </p>
            <p>사업자번호 <span>319-87-01582</span> | 통신판매번호 <span>2020</span>-마포구 <span>copyright © ziptopia</span></p>
            <p>월~금 <span>09:00~18:00</span> | 주말 & 공휴일 제외 | 팩스 : <span>0504-160-4801</span> | 이메일 : <span>cs@ziptopia.co.kr</span></p>
            <div>
              <p>㈜마켓스페이스(집토피아)는 통신판매중개자로서 인테리어공사의 주 거래 당사자가 아니며, 중개업체가 제공한 견적 및 공사 시공 서비스에 </p>
              <p>대해 일체 책임을 지지 않습니다.</p>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- footer -->
  </div><!-- wrap -->

  @yield('import_js')

</body>
</html>
