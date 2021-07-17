@extends('layouts.master')

@section('title', '3% 할인상담')

@section('header_css_js')
  <link rel="stylesheet" href="/css/counsel.css">
@endsection

@section('content')
      <div class="counsel_wrap">
        <div class="title01">
            <div>
            <h1><span>3%</span> 할인상담</h1>
            <p>어디에서 견적을 받았든 3% 할인된(최대 500만원) 견적 가격 제공
            <br>소비자 중개수수료 완전 무료!</p>
            </div>
        </div>
        <div class="title02">
            <h2>타사의 견적이 정상견적인지 확인해보셔야 합니다.</h2>
            <div>
            <img src="/images/counsel/logo_youtube.png" alt="집토피아유튜브로고">
            <h4>집토피아의 유튜브 채널 ‘인테리어소비자연구소’</h4>
            </div>
            <iframe width="720" height="480" src="https://www.youtube.com/embed/c_K1gjSJ8OY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>
            <strong>인테리어쇼를 가치 있게 해주는 원가 분석</strong>
            </p>
            <p>인테리어 원가분석편에서 보실수 있듯이 인테리어 견적가격은 자재 품질이 동일하다는 <br>
            전제 아래 견적가격은 큰 차이가 날 수 없는 구조이고 15%~30% 이상 저렴하다면 <br>
            정상적이지 않을 수 있다는 의심을 해볼 수 있습니다.</p>
        </div>
        <div class="title03">
            <div>
            <h3>
                정상 견적서 가격 <span>40,000,000</span>원대 <br>
                첨부해주신 견적서 가격 30,000,000원 	<img src="/images/counsel/img_right.png" alt="오른쪽표시">		견적 제시 불가 <br>
                첨부해주신 견적서 가격 <span>39,000,000</span>원 	<img src="/images/counsel/img_right.png" alt="오른쪽표시">			견적 제시 가능
            </h3>
            <h3 class="title03_color">
                3% 할인된 견적서 역시 <span>동일 가격대의 자재를 사용</span>한다는 <br>
                전제로 나온 견적가격을 제공합니다.
            </h3>
            </div>
        </div>

        <div class="step">
          <h2>3% 할인 상담신청</h2>
          <div class="step_txt">
            <h3><span>STEP 1</span></h3>
            <p>고객님의 기본정보를 입력해주세요.</p>
          </div>
          <form action="" name="" class="discount_counsel">
            <div class="step1">
              <p><small>＊</small> 필수 입력 및 필수 선택사항</p>
              <ul>
                <li class="select01">
                  <h4><small>＊</small> 주거 / 상업타입</h4>
                  <div>
                    <select name="" id="">
                      <option value="">주거선택</option>
                      <option value="아파트">아파트</option>
                      <option value="빌라">빌라</option>
                      <option value="주택">주택</option>
                    </select>
                    <select name="" id="">
                      <option value="">상업선택</option>
                      <option value="식당/카페">식당/카페</option>
                      <option value="매장/샵">매장/샵</option>
                      <option value="교육/학원">교육/학원</option>
                      <option value="의료/병원">의료/병원</option>
                      <option value="사무공간">사무공간</option>
                      <option value="사무공간">사무공간</option>
                      <option value="체육시설">체육시설</option>
                      <option value="기타상업">기타상업</option>
                      <option value="프랜차이즈">프랜차이즈</option>
                    </select>
                  </div>
                </li>
                <li>
                  <h4><small>＊</small> 전용면적</h4>
                  <div>
                    <select name="" id="">
                      <option>m<sub>2</sub></option>
                      <option value="59m2">59 m<sub>2</sub></option>
                      <option value="62m2">62 m<sub>2</sub></option>
                      <option value="66m2">66 m<sub>2</sub></option>
                      <option value="69m2">69 m<sub>2</sub></option>
                      <option value="72m2">72 m<sub>2</sub></option>
                      <option value="75m2">75 m<sub>2</sub></option>
                      <option value="79m2">79 m<sub>2</sub></option>
                      <option value="82m2">82 m<sub>2</sub></option>
                      <option value="85m2">85 m<sub>2</sub></option>
                      <option value="89m2">89 m<sub>2</sub></option>
                      <option value="92m2">92 m<sub>2</sub></option>
                      <option value="95m2">95 m<sub>2</sub></option>
                      <option value="102m2">102 m<sub>2</sub></option>
                      <option value="105m2">105 m<sub>2</sub></option>
                      <option value="108m2">108 m<sub>2</sub></option>
                      <option value="112m2">112 m<sub>2</sub></option>
                      <option value="115m2">115 m<sub>2</sub></option>
                      <option value="118m2">118 m<sub>2</sub></option>
                      <option value="122m2">122 m<sub>2</sub></option>
                      <option value="125m2">125 m<sub>2</sub></option>
                      <option value="128m2">128 m<sub>2</sub></option>
                      <option value="132m2">132 m<sub>2</sub></option>
                      <option value="135m2">135 m<sub>2</sub></option>
                      <option value="138m2">138 m<sub>2</sub></option>
                      <option value="141m2">141 m<sub>2</sub></option>
                      <option value="145m2">145 m<sub>2</sub></option>
                      <option value="148m2">148 m<sub>2</sub></option>
                      <option value="151m2">151 m<sub>2</sub></option>
                      <option value="155m2">155 m<sub>2</sub></option>
                      <option value="158m2">158 m<sub>2</sub></option>
                      <option value="161m2">161 m<sub>2</sub></option>
                      <option value="165m2">165 m<sub>2</sub></option>
                      <option value="168m2">168 m<sub>2</sub></option>
                      <option value="171m2">171 m<sub>2</sub></option>
                      <option value="175m2">175 m<sub>2</sub></option>
                      <option value="178m2">178 m<sub>2</sub></option>
                      <option value="181m2">181 m<sub>2</sub></option>
                    </select>
                    <select name="" id="">
                      <option>평</sub></option>
                      <option value="18평">18평</option>
                      <option value="19평">19평</option>
                      <option value="20평">20평</option>
                      <option value="21평">21평</option>
                      <option value="22평">22평</option>
                      <option value="23평">23평</option>
                      <option value="24평">24평</option>
                      <option value="25평">25평</option>
                      <option value="26평">26평</option>
                      <option value="27평">27평</option>
                      <option value="28평">28평</option>
                      <option value="29평">29평</option>
                      <option value="30평">30평</option>
                      <option value="31평">31평</option>
                      <option value="32평">32평</option>
                      <option value="33평">33평</option>
                      <option value="34평">34평</option>
                      <option value="35평">35평</option>
                      <option value="36평">36평</option>
                      <option value="37평">37평</option>
                      <option value="38평">38평</option>
                      <option value="39평">39평</option>
                      <option value="40평">40평</option>
                      <option value="41평">41평</option>
                      <option value="42평">42평</option>
                      <option value="43평">43평</option>
                      <option value="44평">44평</option>
                      <option value="45평">45평</option>
                      <option value="46평">46평</option>
                      <option value="47평">47평</option>
                      <option value="48평">48평</option>
                      <option value="49평">49평</option>
                      <option value="50평">50평</option>
                      <option value="51평">51평</option>
                      <option value="52평">52평</option>
                      <option value="53평">53평</option>
                      <option value="54평">54평</option>
                      <option value="55평">55평</option>
                      <option value="56평">56평</option>
                      <option value="57평">57평</option>
                      <option value="58평">58평</option>
                    </select>
                  </div>
                </li>
                <li>
                  <h4><small>＊</small> 시공지역</h4>
                  <div>
                    <select name="sido1" id="sido1"></select>
                    <select name="gugun1" id="gugun1"></select>
                    <input type="text" placeholder="상세주소 ex) 매봉산로 31 7층">
                  </div>
                </li>
                <li>
                  <div>
                    <h4>시공범위</h4>
                    <div>
                      <input type="radio" name="sigong" id="part">
                      <input type="radio" name="sigong" id="all">
                      <div>
                        <label for="part">부분시공</label>
                        <label for="all">전체시공</label>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h4><small>＊</small> 예산</h4>
                    <div>
                      <select name="" id="">
                        <option value="">0 ~ 1000만원</option>
                        <option value="">1000 ~ 2000만원</option>
                        <option value="">2000 ~ 3000만원</option>
                        <option value="">3000 ~ 4000만원</option>
                        <option value="">4000 ~ 5000만원</option>
                        <option value="">5000 ~ 6000만원</option>
                        <option value="">6000 ~ 7000만원</option>
                        <option value="">7000 ~ 8000만원</option>
                        <option value="">8000 ~ 9000만원</option>
                        <option value="">9000 ~ 1억원</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>고객명</h4>
                    <input type="text" name="" placeholder="고객명을 입력하세요">
                  </div>
                </li>
                <li>
                  <div>
                    <h4><small>＊</small> 연락처</h4>
                    <select name="" id="">
                      <option value="010">010</option>
                      <option value="011">011</option>
                      <option value="016">016</option>
                      <option value="017">017</option>
                      <option value="018">018</option>
                      <option value="019">019</option>
                    </select>
                    <input type="tel" name="">
                    <input type="tel" name="">
                  </div>
                </li>
                <li>
                  <div>
                    <h4>시공일정</h4>
                    <input type="date" name="">
                  </div>
                </li>
              </ul>
            </div>
            <div class="step_txt">
              <h3><span>STEP 2</span></h3>
              <p>고객님이 받으셨던 견적서와 참고할 수 있는 사진 등을  첨부해주세요</p>
            </div>
            <div class="step2">
              <p><small>＊</small> 필수 입력 및 필수 선택사항 <span>개별파일 10MB, 총 30MB까지</span></p>
              <h4>첨부파일 등록</h4>
              <ul>
                <li>
                  <h5><small>＊</small> 파일찾기</h5>
                  <input type="file" id="ex_file">
                  <label for="ex_file">파일선택</label>
                </li>
              </ul>
            </div>
            <div class="button">
              <a href="{{ url('/counsel/service') }}">상담 신청하기</a>
            </div>
          </form>
        </div><!-- step1,2 -->

        @include('layouts/footer')

      </div><!-- counsel_wrap -->
@endsection

@section('import_js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="/js/submenu3.js"></script>
  <script src="/js/popup.js"></script>
  <script src="/js/select.js"></script>
@endsection
