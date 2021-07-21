<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>왕초보팁</title>
  <link rel="shortcut icon" href="/images/favicon.ico">
  <link rel="stylesheet" href="../css/tipmain.css">
  <link rel="stylesheet" href="/css/jquery.bxslider.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700;900&display=swap" rel="stylesheet">
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
            <li>
              <a href="#" class="login">
                <img src="/images/gnb_login.png" alt="로그인아이콘">
                <p>로그인</p>
              </a>
            </li>
            <li>
              <a href="#" class="join">
                <img src="/images/gnb_join.png" alt="회원가입아이콘">
                <p>회원가입</p>
              </a>
            </li>
            <li>
              <a href="#">고객센터</a>
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
              <a href="#" class="lnb_tip">왕초보<span>TIP</span></a>
            </li>
            <li class="subm">
              <a href="#">착한견적상담</a>
              <ul class="submenu">
                <li><a href="{{ url('counsel/counsel') }}">3% 할인상담</a></li>
                <li><a href="{{ url('counsel/counsel_free') }}">무료견적상담</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ url('/process/process') }}" class="lnb_process">진행과정</a>
            </li>
            <li class="subm">
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
    <div class="container">
      <div class="container_lnb_box">
        <nav class="container_lnb">
          <h1>다양한 TIP</h1>
          <ul>
            <li>
              <a href="{{ url('/tip/tip01') }}"><img src="/images/tip/menu01.png" alt="tip01"></a>
            </li>
            <li>
              <a href="{{ url('/tip/tip02') }}"><img src="/images/tip/menu02.png" alt="tip02"></a>
            </li>
            <li>
              <a href="{{ url('/tip/tip03') }}"><img src="/images/tip/menu03.png" alt="tip03"></a>
            </li>
            <li>
              <a href="{{ url('/tip/tip04') }}"><img src="/images/tip/menu04.png" alt="tip04"></a>
            </li>
            <li>
              <a href="{{ url('/tip/tip05') }}"><img src="/images/tip/menu05.png" alt="tip05"></a>
            </li>
            <li>
              <a href="{{ url('/tip/tip06') }}"><img src="/images/tip/menu06.png" alt="tip06"></a>
            </li>
          </ul>
        </nav>
      </div>
      

    </div><!-- container -->
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
            <p>㈜마켓스스 대표이사 | 주소 : 서울시 마포구 매봉산로<span>31</span> 에스플렉스센터 시너지움동 <span>7</span> 층 <span>58</span> </p>
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

  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="../js/submenu.js"></script>
</body>
</html>