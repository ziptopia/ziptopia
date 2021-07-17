@extends('layouts.master')

@section('title', '무료견적상담')

@section('header_css_js')
  <link rel="stylesheet" href="/css/counsel_free.css">
@endsection

@section('content')
      <div class="counsel_wrap">
        <div class="step">
          <h2>종합리모델링 상담신청</h2>
          <div class="title_01">
            <p>
              도배, 욕살, 주방, 창호 등 철거부터 마감까지 전체인테리어를 진행하고 싶으시다면 상담신청해주세요
            </p>
          </div>
          <div class="step_txt">
            <h3><span>STEP 1</span></h3>
            <p>고객님의 기본정보를 입력해주세요.</p>
          </div>
          <form action="" name="" class="free_counsel">
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
            <div class="step_txt step_txt02">
              <h3><span>STEP 2</span></h3>
              <p>아래에서 해당되는 항목에 체크 해주시면, 전화또는 이메일로 상세 견적을 보내 드립니다.</p>
            </div>
            <div class="step2">
              <p>고객님에게 해당하는 항목을 체크해주세요.<span> 중복선택가능</span></p>
              <ul>
                <li>
                  <div>
                    <h4>도배</h4>
                    <span>국산브랜드 기준이며 수입벽지, 천연벽지 선택시 비용은 추가됨니다.</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk01">
                    <input type="checkbox" name="" id="chk02">
                    <input type="checkbox" name="" id="chk03">
                    <div>
                      <label for="chk01">전체 실크 벽지</label>
                      <label for="chk02">전체 광폭 합지</label>
                      <label for="chk03" id="long">거실, 주방실크+방광폭합지</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>바닥재</h4>
                    <span>기존바닥재 철거시 비용은 추가됩니다. (장판제외)</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk04">
                    <input type="checkbox" name="" id="chk05">
                    <input type="checkbox" name="" id="chk06">
                    <input type="checkbox" name="" id="chk07">
                    <input type="checkbox" name="" id="chk08">
                    <input type="checkbox" name="" id="chk09">
                    <div>
                      <label for="chk04">전체 강마루</label>
                      <label for="chk05">전체 강화마루</label>
                      <label for="chk06">전체 온돌마루</label>
                      <label for="chk07">전체 장판</label>
                      <label for="chk08">전체 타일</label>
                      <label for="chk09" id="long">거실, 주방타일+방마루</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>제작가구</h4>
                    <span>한샘브랜드의 기본등급 기준이며 브랜드, 사이즈, 등급, 옵션 등에 따라 견적이 변동 될 수 있습니다.</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk10">
                    <input type="checkbox" name="" id="chk11">
                    <input type="checkbox" name="" id="chk12">
                    <input type="checkbox" name="" id="chk13">
                    <input type="checkbox" name="" id="chk14">
                    <input type="checkbox" name="" id="chk15">
                    <div>
                      <label for="chk10">부엌가구</label>
                      <label for="chk11">아일랜드식탁</label>
                      <label for="chk12">신발장</label>
                      <label for="chk13">붙박이장</label>
                      <label for="chk14">세탁기장</label>
                      <label for="chk15">발코니장</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>도장</h4>
                    <span>적용부분·문, 문선, 몰딩, 프레임, 기타 목자재 부분이며 국산 브랜드 기준입니다. (도장 혹은 인테리어 필름 택1)</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk16">
                    <input type="checkbox" name="" id="chk17">
                    <input type="checkbox" name="" id="chk18">
                    <div>
                      <label for="chk16">락카페인트(내부)</label>
                      <label for="chk17">친환경페인트(내부)</label>
                      <label for="chk18">발코니탄성코트</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>필름</h4>
                    <span>적용부분·문, 문선, 몰딩, 프레임, 기타 목자재 부분이며 국산 브랜드 기준입니다. (도장 혹은 인테리어 필름 택1)</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk19">
                    <input type="checkbox" name="" id="chk20">
                    <input type="checkbox" name="" id="chk21">
                    <input type="checkbox" name="" id="chk22">
                    <input type="checkbox" name="" id="chk23">
                    <input type="checkbox" name="" id="chk24">
                    <div>
                      <label for="chk19">전체강마루</label>
                      <label for="chk20">전체 강화마루</label>
                      <label for="chk21">전체 온돌마루</label>
                      <label for="chk22">전체 장판</label>
                      <label for="chk23">전체 타일</label>
                      <label for="chk24" id="long">거실, 주방타일+방마루</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>전기조명</h4>
                    <span>조명기구는 제품에 따라 견적이 변동될 수 있습니다.</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk25">
                    <input type="checkbox" name="" id="chk26">
                    <input type="checkbox" name="" id="chk27">
                    <input type="checkbox" name="" id="chk28">
                    <input type="checkbox" name="" id="chk29">
                    <input type="checkbox" name="" id="chk30">
                    <div>
                      <label for="chk25">배선공사</label>
                      <label for="chk26" id="long">조명, 콘센트, 이동 및 추가</label>
                      <label for="chk27" id="long">콘센트, 스위치 커버 교체</label>
                      <label for="chk28" id="long">벽걸이 TV배선 매립</label>
                      <label for="chk29" id="long">전체 조명기구 교체</label>
                      <label for="chk30">비디오 폰</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>타일</h4>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk31">
                    <input type="checkbox" name="" id="chk32">
                    <input type="checkbox" name="" id="chk33">
                    <input type="checkbox" name="" id="chk34">
                    <div>
                      <label for="chk31" id="long">주방타일(수입타일)</label>
                      <label for="chk32" id="long">현관타일(수입타일)</label>
                      <label for="chk33" id="long">발코니타일(국산타일)</label>
                      <label for="chk34" id="long">다용도실타일(국산타일)</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>욕실공사</h4>
                    <span>국산타일 기준이며, 수입타일 및 구조변경시 견적이 변동될 수 있습니다.</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk35">
                    <input type="checkbox" name="" id="chk36">
                    <div>
                      <label for="chk35">거실욕실</label>
                      <label for="chk36">안방욕실</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>샷시</h4>
                    <span>LG Z:IN 기준이며, 수입타일 및 구조 변경시 견적이 변동 될 수 있습니다.</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk37">
                    <input type="checkbox" name="" id="chk38">
                    <input type="checkbox" name="" id="chk39">
                    <input type="checkbox" name="" id="chk40">
                    <div>
                      <label for="chk37">전체교체</label>
                      <label for="chk38">내부교체</label>
                      <label for="chk39">외부교체</label>
                      <label for="chk40">부분교체</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>확장</h4>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk41">
                    <input type="checkbox" name="" id="chk42">
                    <input type="checkbox" name="" id="chk43">
                    <input type="checkbox" name="" id="chk44">
                    <div>
                      <label for="chk41" id="long">거실발코니확장</label>
                      <label for="chk42" id="long">주방발코니확장</label>
                      <label for="chk43" id="long">작은방1 발코니확장</label>
                      <label for="chk44" id="long">작은방2 발코니확장</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>목공</h4>
                    <span>도어리폼과 도어교체는 문틀, 문선, 람마, 레바 철물 포함입니다.</span>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk45">
                    <input type="checkbox" name="" id="chk46">
                    <input type="checkbox" name="" id="chk47">
                    <input type="checkbox" name="" id="chk48">
                    <input type="checkbox" name="" id="chk49">
                    <div>
                      <label for="chk45">몰딩</label>
                      <label for="chk46">중문</label>
                      <label for="chk47">도어리폼</label>
                      <label for="chk48">도어교체</label>
                      <label for="chk49">슬라이드도어</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>아트월</h4>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk50">
                    <input type="checkbox" name="" id="chk51">
                    <input type="checkbox" name="" id="chk52">
                    <div>
                      <label for="chk50" id="long">우드, 국산타일 아트월</label>
                      <label for="chk51" id="long">수입타일 아트월</label>
                      <label for="chk52" id="long">대리석타일 아트월</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>등박스</h4>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk53">
                    <input type="checkbox" name="" id="chk54">
                    <input type="checkbox" name="" id="chk55">
                    <div>
                      <label for="chk53">기본민자형</label>
                      <label for="chk54">돌출형간접</label>
                      <label for="chk55">우물형간접</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>홈스타일링</h4>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk56">
                    <div>
                      <label for="chk56">홈스타일링</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>기타</h4>
                  </div>
                  <div>
                    <input type="checkbox" name="" id="chk57">
                    <input type="checkbox" name="" id="chk58">
                    <div>
                      <label for="chk57" id="long">디지털도어락/일체형</label>
                      <label for="chk58">입주청소</label>
                    </div>
                  </div>
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
