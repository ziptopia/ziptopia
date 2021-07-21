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
  <link rel="stylesheet" href="/css/jquery.bxslider.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                  <p>{{ session()->get('user') }} <a href="#" id="LogoutAct">로그아웃</a></p>
                </li>
                @else
                <li>
                <a href="#" class="login">
                    <p>로그인</p>
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
              <a href="{{ url('/postscript/postscript') }}" class="lnb_postscript">고객생생후기</a>
            </li>
            <li>
              <a href="{{ url('/tip/tipmain') }}">왕초보<span>TIP</span></a>
            </li>
            <li class="subm coun01">
              <a href="{{ url('/counsel/counsel') }}">착한견적상담</a>
              <ul class="submenu coun02">
                <li><a href="{{ url('/counsel/counsel') }}">3% 할인상담</a></li>
                <li><a href="{{ url('/counsel/counsel_free') }}">무료견적상담</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ url('/process/process') }}">진행과정</a>
            </li>
            <li class="subm gur01">
              <a href="{{ url('/guarantee/guarantee') }}">자재보증서비스</a>
              <ul class="submenu gur">
                <li><a href="{{ url('/guarantee/guarantee') }}">자재보증서비스</a></li>
                <li><a href="{{ url('/guarantee/guarantee_company') }}">보증가능업체</a></li>
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

    @yield('side_bar')

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
          <a href="#">아이디 찾기</a><span>|</span><a href="#" class="reset_pw">비밀번호 재설정</a>
        </div>
        <div>
          <a href="#" class="join_email">집토피아 이메일로 회원가입</a>
        </div>
      </div>
      {{-- 비밀번호 재설정 이메일 발송\start --}}
      <div class="pop_resetpw_form">
        <h2>비밀번호 재설정</h2>
        <form method="POST" id="pop_resetpw_form" name="pop_resetpw_form" action="{{ route('password.email') }}" class="resetpw_form">
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
              <button id="ResetSendEmailAct" type="submit">재설정 이메일 발송</button>
            </li>
          </ul>
        </form>
      </div>
      {{-- 비밀번호 재설정 이메일 발송\end --}}
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

    <div class="pop_chk">
      <h2>입주전 점검 리스트</h2>
      <p>
        <span>입주하시기 전에 점검사항을 체크해보세요!</span>
        <br>녹물 확인을 위해 체크 전 <br> 모든 수도/샤워기를 틀어 놓으세요 <br>
          -최소 30분 권장-
      </p>
      <div>
        <h3>문</h3>
        <h4>현관 욕실 안방 작은방 다용도실</h4>
        <div>
          <input type="checkbox" id="chk01">
          <label for="chk01">문 열리는 방향 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk02">
          <label for="chk02">문틀, 레일에 모헤어 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk03">
          <label for="chk03">열고 닫으면서 틈이 있는지 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk04">
          <label for="chk04">문 손잡이 또는 센서 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk05">
          <label for="chk05">잠금 장치 확인</label>
        </div>
      </div>
      <div>
        <h3>욕실</h3>
        <h4>세면대</h4>
        <div>
          <input type="checkbox" id="chk06">
          <label for="chk06">세면대가 결정된 자재로 설치되었다</label>
        </div>
        <div>
          <input type="checkbox" id="chk07">
          <label for="chk07">물마개 사이로 물이 새지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk08">
          <label for="chk08">수도 꼭지가 부드럽게 돌아간다</label>
        </div>
        <div>
          <input type="checkbox" id="chk09">
          <label for="chk09">수도꼭지 주변에서 물이 새지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk10">
          <label for="chk10">세면대 주변 하수구에서 악취가 올라오지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk11">
          <label for="chk11">세면대를 사용하면서 아랫집으로 물이 새지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk12">
          <label for="chk12">세면대 아래 하수관로 연결부위에서 물이 새지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk13">
          <label for="chk13">수압이 적당하다</label>
        </div>
        <h4>변기</h4>
        <div>
          <input type="checkbox" id="chk14">
          <label for="chk14">변기가 결정된 자재로 설치되었다</label>
        </div>
        <div>
          <input type="checkbox" id="chk15">
          <label for="chk15">레버는 부드럽게 작동된다</label>
        </div>
        <div>
          <input type="checkbox" id="chk16">
          <label for="chk16">물이 잘 내려간다</label>
        </div>
        <div>
          <input type="checkbox" id="chk17">
          <label for="chk17">물을 내린 후에 다시 잘 채워진다</label>
        </div>
        <div>
          <input type="checkbox" id="chk18">
          <label for="chk18">변기 주변에 물이 새지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk19">
          <label for="chk19">변기 사용하면서 아랫 집에 물이 새지 않는다</label>
        </div>
        <h4>샤워기 욕조</h4>
        <div>
          <input type="checkbox" id="chk20">
          <label for="chk20">샤워기, 욕조가 결정된 자재로 설치되었다</label>
        </div>
        <div>
          <input type="checkbox" id="chk21">
          <label for="chk21">샤워기 헤드, 샤워기 레버가 정상적으로 작동된다</label>
        </div>
        <div>
          <input type="checkbox" id="chk22">
          <label for="chk22">샤워부스, 욕조 주변 하수구에서 악취가 올라오지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk23">
          <label for="chk23">욕조 물마개가 정확하게 고정된다</label>
        </div>
        <div>
          <input type="checkbox" id="chk24">
          <label for="chk24">샤워기, 욕조 등 수도꼭지가 부드럽게 작동된다</label>
        </div>
        <div>
          <input type="checkbox" id="chk25">
          <label for="chk25">욕조 주변에서 물이 새지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk26">
          <label for="chk26">샤워기, 욕조를 사용하면서 아랫 집에 물이 새지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk27">
          <label for="chk27">샤워기, 욕조의 수압이 적당하다</label>
        </div>
        <h4>타일</h4>
        <div>
          <input type="checkbox" id="chk28">
          <label for="chk28">줄눈 상태 모두 정상이다</label>
        </div>
        <div>
          <input type="checkbox" id="chk29">
          <label for="chk29">벽면, 바닥 타일이 결정된 자재로 시공되었다</label>
        </div>
        <div>
          <input type="checkbox" id="chk30">
          <label for="chk30">문틀, 도기의 실리콘 마감 정상이다</label>
        </div>
        <div>
          <input type="checkbox" id="chk31">
          <label for="chk31">타일에 금가거나 깨진 곳이 없다</label>
        </div>
        <h4>기타</h4>
        <div>
          <input type="checkbox" id="chk32">
          <label for="chk32">변기가 막히지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk33">
          <label for="chk33">냄새가 잘 빠진다</label>
        </div>
        <div>
          <input type="checkbox" id="chk34">
          <label for="chk34">담배 냄새가 나지 않는다</label>
        </div>
        <div>
          <input type="checkbox" id="chk35">
          <label for="chk35">기타 불편한 것이 없다</label>
        </div>
      </div>
      <div>
        <h3>현관 거실 주방</h3>
        <h4>새시</h4>
        <div>
          <input type="checkbox" id="chk36">
          <label for="chk36">정상적으로 열리고 닫힌다</label>
        </div>
        <div>
          <input type="checkbox" id="chk37">
          <label for="chk37">잠금 장치가 정상 작동</label>
        </div>
        <div>
          <input type="checkbox" id="chk38">
          <label for="chk38">유리와 새시 부분 실리콘 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk39">
          <label for="chk39">열리는 방향이 맞다</label>
        </div>
        <h4>타일</h4>
        <div>
          <input type="checkbox" id="chk40">
          <label for="chk40">줄눈 상태 모두 정상이다</label>
        </div>
        <div>
          <input type="checkbox" id="chk41">
          <label for="chk41">벽면, 바닥 타일이 결정된 자재로 시공되었다</label>
        </div>
        <div>
          <input type="checkbox" id="chk42">
          <label for="chk42">문틀, 도기의 실리콘 마감 정상이다</label>
        </div>
        <div>
          <input type="checkbox" id="chk43">
          <label for="chk43">타일에 금가거나 깨진 곳이 없다</label>
        </div>
        <h4>마루 장판 벽지</h4>
        <div>
          <input type="checkbox" id="chk44">
          <label for="chk44">마루 모두 밝아 보고 삐걱이는 부분이 없다</label>
        </div>
        <div>
          <input type="checkbox" id="chk45">
          <label for="chk45">마루 무늬 방향이 일치한다</label>
        </div>
        <div>
          <input type="checkbox" id="chk46">
          <label for="chk46">문틀,몰딩 부분 벽지 끝부분 마감 정상</label>
        </div>
        <div>
          <input type="checkbox" id="chk47">
          <label for="chk47">걸레받이와 장판 사이 실리콘 처리 되어있다</label>
        </div>
        <div>
          <input type="checkbox" id="chk48">
          <label for="chk48">벽지가 들뜬 곳이 없다</label>
        </div>
        <div>
          <input type="checkbox" id="chk49">
          <label for="chk49">걸레받이의 높낮이가 같다</label>
        </div>
        <h4>타일</h4>
        <div>
          <input type="checkbox" id="chk50">
          <label for="chk50">전구, 콘센트 위치와 개수가 맞다</label>
        </div>
        <div>
          <input type="checkbox" id="chk51">
          <label for="chk51">모든 조명을 작동해 본 후 정상적으로 작동한다</label>
        </div>
        <div>
          <input type="checkbox" id="chk52">
          <label for="chk52">조명 색깔이 정상이다</label>
        </div>
        <div>
          <input type="checkbox" id="chk53">
          <label for="chk53">센서가 정상적으로 작동한다</label>
        </div>
        <h4>주방</h4>
        <div>
          <input type="checkbox" id="chk54">
          <label for="chk54">싱크대 사이즈 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk55">
          <label for="chk55">닥트 정상 작동 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk56">
          <label for="chk56">콘센트 위치 및 개수 확인</label>
        </div>
        <div>
          <input type="checkbox" id="chk57">
          <label for="chk57">수전 수압/정상 작동 여부 확인(30분 이상 틀어 놓기)</label>
        </div>
        <div>
          <input type="checkbox" id="chk58">
          <label for="chk58">주방 후드 속에 있는 자동소화장치 확인</label>
        </div>
      </div>
      <a href="#" class="pop_chk_close"><img src="/images/pop/btn_pop_off.png" alt="닫기"></a>
    </div>
    <div class="dim02">
    </div><!-- pop_chk -->

    <div class="pop_insta">
      <div>
        <img src="/images/main/pop_insta/pop_img.png" alt="popimg">
      </div>
      <h3>엔틱한 느낌의 응접실</h3>
      <p>서울 송파구 문정동 문정레미안아파트</p>
      <div>
        <span>아파트</span>
        <span>44평</span>
        <span>3주</span>
      </div>
      <div class="scrab">
        <a href="#">
          <img src="/images/main/pop_insta/pop_heart.png" alt="heart">
          <span>23</span>
        </a>
        <a href="#">
          <img src="/images/main/pop_insta/pop_scrab.png" alt="pop_scrab">
          <span>23</span>
        </a>
      </div>
    </div>


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
