@extends('layouts.master')

@section('title', '서비스 선택옵션')

@section('header_css_js')
  <link rel="stylesheet" href="/css/service.css">
@endsection


@section('content')
      <div class="title01">
        <div>
          <h1>소비자 서비스 선택옵션</h1>
          <p>불 필요한 서비스 왜 무조건 받아야 할까요? <br>
            그래서 필요없는 서비스 거품은 싹 빼고 <br>
            소비자님이 직접 필요한 것만 계약해서 서비스 받도록 바꿨습니다. <br>
            이제 직접하시고 필요한 서비스만 신청하세요.
            </p>
        </div>
      </div>

      <div class="counsel_wrap">
        <div class="step">
          <div class="step_txt">
            <h3><span>STEP 3</span></h3>
            <p>소비자가 필요한 서비스만 선택하는 선택옵션 입니다.</p>
          </div>
          <h5>인테리어업체에서 최소한의 운영수수료만 받는 대신 서비스를 별도로 운영합니다.</h5>
          <form action="" name="" class="service">
            <ul>
              <li>
                <input type="checkbox" name="" id="service01">
                <label for="service01">
                  <h4>1. 업체 비교 견적 3개</h4>
                  <p>인테리어 업체의 비교 견적을 3개 받아 드립니다. -무료</p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service02">
                <label for="service02">
                  <h4>2. 3년 보증서 제공</h4>
                  <p>3년 보증서 제공(별도 계약) – 견적금액에 포함</p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service03">
                <label for="service03">
                  <h4>3. 현장 점검 서비스</h4>
                  <p>현장 점검 서비스 – 주1회, 주2회, 주3회(설계도, 계약 자재 사용) – 별도 계약</p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service04">
                <label for="service04">
                  <h4>4. 감리인 추천</h4>
                  <p>감리인 추천 후 감리인과 직접 계약 – 견적 금액과 별도(3% 할인 금액 이내 가능)</p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service05">
                <label for="service05">
                  <h4>5. 보증 보험 가입</h4>
                  <p>보증 보험 가입(계약이행, 하자이행) – 견적금액에 포함</p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service06">
                <label for="service06">
                  <h4>6. AS 3회 필수 방문 서비스</h4>
                  <p>AS 3회 필수 방문 서비스(1주후, 2주후, 4주후 3회-기간/횟수 조정 가능) – 견적 포함</p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service07">
                <label for="service07">
                  <h4>7. 계약서 작성 여부</h4>
                  <p>계약서 작성 여부(공정거래위원회 필수 계약서 또는 약식 계약서) </p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service08">
                <label for="service08">
                  <h4>8. 중재 서비스 신청</h4>
                  <p>법원 판결 효력 있는 4주 이내 중재 서비스 신청 – 별도 계약서 제공</p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service09">
                <label for="service09">
                  <h4>9. 계약서 필수 서류 제공</h4>
                  <p>계약서 필수 서류 제공 사업자등록증, 통장사본, 주민증사본, 계약서, 설계도, 공정표, 표준시방서, 3d이미지
                  </p>
                </label>
              </li>
              <li>
                <input type="checkbox" name="" id="service10">
                <label for="service10">
                  <h4>10. 에스크로 이용 여부</h4>
                  <p>에스크로 이용 여부 – 국민은행 에스크로 이용</p>
                </label>
              </li>
              <li  class="service11">
                <input type="checkbox" name="" id="service11">
                <label for="service11">
                  <h4>11. 자재 보증 서비스</h4>
                  <p><img src="/images/counsel/question_mark.png" alt="물음표">  자재품목과 수량이 정상 납품 되었음을 보증하는 서비스</p>
                  <a href="#">자재 보증 서비스가 궁금하세요?</a>
                </label>
              </li>
            </ul>
            <div class="button">
              <button type="submit">상담 신청하기</button>
            </div>
          </form>
        </div><!-- step1,2 -->
        <div class="various">
          <h2>집토피아에는 다양한 상담이 있습니다.</h2>
          <p>
            상담신청을 해주시면, 상담매니저가 48시간 이내 연락드립니다. <br>
            다양한 상담 시스템을 통해 상담 받으실 수 있도록 안내 해드리고 있습니다.
          </p>
          <div>
            <a href="#">
              <img src="/images/counsel/kakao.png" alt="카카오이미지">
              <h6>채널톡상담</h6>
              <p>카카오톡 채널톡 상담</p>
            </a>
            <a href="#">
              <img src="/images/counsel/sms.png" alt="카카오이미지">
              <h6>문자 상담</h6>
              <p>휴대폰 문자 상담</p>
            </a>
            <a href="tel:070-8098-9111">
              <img src="/images/counsel/call.png" alt="카카오이미지">
              <h6>메니저 전화상담</h6>
              <p>070-8098-9111</p>
            </a>
          </div>
        </div>
      </div><!-- counsel_wrap -->
@endsection

@section('import_js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="/js/submenu3.js"></script>
  <script src="/js/popup.js"></script>
  <script src="/js/select.js"></script>
@endsection
