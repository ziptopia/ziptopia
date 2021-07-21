<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>왕초보팁 > 인테리어 원가계산 </title>
  <link rel="shortcut icon" href="/images/favicon.ico">
  <link rel="stylesheet" href="../css/tip03.css">
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
      <div class="title">
        <h1>인테리어 평당 원가 계산 방법</h1>
        <p>
          인테리어 견적은 사실 크게 벗어날 수 없거든요. <br>
          왜냐하면 기본적인 가격이 정해져 있어요. <br>
          영상을 보시면 정해진 가격을 알 수 있고 그 가격에서 낮아지면 어떻게 될까요? 
        </p>
      </div>
      <div class="content">
        <p>
          인테리어를 할때 많은 분들이 고민하는 부분이 〈 어떻게하면 제대로 견적을 받아서 좋은 인테리어를 할 수 있을까? 〉 인것 같아요. <br>
          이런 고민들을 하시는 많은 분들을 위해 집토피아에서 <span>〈 인테리어 견적 비용 〉</span>이 어떻게 산출되는지 알아보려고 합니다. <br>
          사실 평당 견적이라는 것은 인테리어가 끝나고 정확히 알 수 있는 있는데요.<br>
          하지만 역시 비교를 하려면 기준이 있어야 겠죠? 각 공정은 가격이 거의 정해져 있어요.
        </p>
        <div>
          <img src="/images/tip/tip03/tip03_01.png" alt="팁이미지01">
        </div>
        <p>
          우선 가격은 인건비와 자재비가 전부거든요. 여기에 업체 마진 또는 업체 자체 감리 감독 인건비와 업체 회사 운영비, 그리고 홍보광고비
          왔다 갔다하는 유류비, 필요경비 등이 견적서에 들어가요. <br>
          이렇게 뻔한 견적 내용에서 구체적으로 어떻게 얼마가 들어가는지, 간단하게 각각의 공정으로 나누고 그 공정에 들어가는 평균 원가비용에
          대해 30평 아파트를 예를 들어 설명해 드릴게요.
        </p>
        <h3>[ 30평 아파트 ] 평균적 견적 원가 알아보기</h3>
        <p>
          견적 가격의 기준을 정해야 하니까 30평 아파트로 가정하고 견적 원가를 알아볼게요.
        </p>
        <div>
          <img src="/images/tip/tip03/tip03_02.png" alt="팁이미지02">
          <img src="/images/tip/tip03/tip03_03.png" alt="팁이미지03">
          <img src="/images/tip/tip03/tip03_04.png" alt="팁이미지04">
          <img src="/images/tip/tip03/tip03_05.png" alt="팁이미지05">
        </div>
        <p>
          철거 난이도에 따라 190만원에서 220만원 평균 210만원라고 보면 되구요. 그 다음 마루철거가 55만원, 설비 100만원,  <br>
          조명, 콘센트 40만원인데 조명의 종류, 콘센트 개수에 따라 가격이 변동이 됩니다.  목공은 170만원정도 하고, 화장실은 보통 두칸으로<br>
          일반 소비자 가격으로 700만원으로 잡으시면되요. 일반소비자가격으로 책정되는건 자재 소매상에서 별도의 가격으로 판매를 하기
          때문입니다. <br>
          필름(샷시,랩핑 포함) 300만원, 도배는 도배하는 종이에 따라 다르겠지만 일반적으로 200정도로 잡으시면 됩니다.  <br>
          주방 3m, 붙박이 가구 3m, 신발장 1.5m 이 사이즈는 일반적인 사이즈로 300만, 기타 경비 100만원으로 책정합니다.
        </p>
        <h4>평균 견적 한눈에 정리</h4>
        <div>
          <img src="/images/tip/tip03/tip03_06.png" alt="팁이미지06">
        </div>
        <p>
          이렇게 하면 2,950만원 대략 3,000만원이 원가라고 보면 되구요. 이렇게 하면 평당 100만원이 원가네요. <br>
          최고가 품질 대비 50%~60% 수준, 품질은 중급으로 깔끔하다의 수준으로 보시면됩니다.
        </p>
        <div>
          <img src="/images/tip/tip03/tip03_07.png" alt="팁이미지06">
        </div>
        <p>
          이렇게 30평 아파트 원가는 평균 3천만원 정도인데 어떤 업체가 2500만원이라고 하면 어떻게 될까요? <br>
          전체 인테리어라고 하면 철거는 전부 할 테니까 어딘가에서 마진을 남기려고 하겠죠?<br>
          기존 설비를 그대로 활용한다던가 붙박이 가구를 허름하게 만든다든가 입주청소를 견적에서 뺀 다든가, 화장실에 들어가는 자재를 
          불량품으로 쓴다든가 목수를 20년 경력자가 필요한데 5년 경력자 데려다가 인건비 170만원 비용을 100만원만 준다든가 이렇게 
          어딘가에서 이윤을 남기려고 할겁니다. <br>
          물론 모두가 그렇다는건 아니지만 대부분 이렇게 공사 후 어딘가에서 문제가 생길거고, AS가 필요할거예요. <br>
          그렇다면 이렇게 공사해주는 업자가 AS를 해줄까요? 업자는 AS도 안해주고 연락도 안받을 거예요. 이건 예외가 없어요. <br>
          이런 업체가 하자이행보증보험을 들었을리도 없구요. <br>
          그 과정에서 소비자는 화가나겠지만 어떻게 하겠어요. AS를 포기하고 그냥 살겠죠.<br>
          이런 상황들을 미연에 방지하기 위해서 이 포스팅의 내용을 어느정도 숙지하고 계시면 손해를 입을 일들은 줄어들거라고 생각합니다.
          그리고 이런 정보를 숙지한 소비자들과 거래하는 업체들도 속이려는 생각을 않을거예요.<br><br><br>

          해당 포스팅이 인테리어 공사를 준비하시는 소비자분들께 조금이나마 도움이 되었으면 좋겠습니다.  
        </p>
        
      </div>

    </div><!-- wrap -->
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