@extends('layouts.master')
@section('title', '집토피아')

@section('header_css_js')
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/jquery.bxslider.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
@endsection

@section('content')

      <section class="half_banner">
        <a href="#" rel="3%할인상담이동">
          <div class="left_banner">
            <div>
              <img src="/images/img_calcurator.png" alt="계산이미지">
            </div>
            <div class="half_txt">
              <h3>타사에서 <span>견적서 받아 본</span> 고객님!</h3>
              <p>타사견적서 제출하세요 3% 추가 할인</p>
              <div>
                3%할인상담
              </div>
            </div>
          </div>
        </a>
        <a href="{{ url('/counsel/counsel_free') }}"  rel="무료견적상담이동">
          <div class="right_banner">
            <div>
              <img src="/images/img_todo.png" alt="체크이미진">
            </div>
            <div class="half_txt">
              <h3>견적서가 <span>처음인</span> 고객님!</h3>
              <p>타사대비 인테리어 4천만원 기준 120만원 할인</p>
              <div>
                무료견적상담
              </div>
            </div>
          </div>
        </a>
      </section><!-- half_banner -->
      <section class="content01">
        <div class="content01_tab">
          <div>
            <input type="radio" name="content01_tab" id="residential"  checked>
            <input type="radio" name="content01_tab" id="mercantile">
            <div class="label">
              <label for="residential">주거공간</label>
              <label for="mercantile">상업공간</label>
            </div>
          </div>
        </div>
        <div class="residential">
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지01">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지02">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지03">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지04">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지05">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지06">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지07">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content01/residential.png" alt="주거이미지08">
            </a>
          </div>
        </div>
        <div class="mercantile"></div>
      </section><!-- content01 -->
      <section class="content02">
        <h2>자재보증업체</h2>
        <div>
          <div>
            <a href="#">
              <img src="/images/content02/residential.png" alt="보증업체이미지01">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content02/residential.png" alt="보증업체이미지02">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content02/residential.png" alt="보증업체이미지03">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content02/residential.png" alt="보증업체이미지04">
            </a>
          </div>
        </div>
      </section><!-- content02 -->
      <section class="content03">
        <h2>인테리어소비자연구소</h2>
        <div>
          <div>
            <a href="#">
              <img src="/images/content03/youtube01.png" alt="인테리어계약서유튜브">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content03/youtube02.png" alt="왜공부해야할까유튜브">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content03/youtube03.png" alt="원하는인테리어유튜브">
            </a>
          </div>
        </div>
      </section><!-- content03 -->
      <section class="content04">
        <h2>인스타그램</h2>
        <div>
          <div>
            <a href="#">
              <div class="insta_imgbox">
                <img src="/images/content04/content04.png" alt="인스타그램사진">
              </div>
              <h4>감성에 젖을 수 있는 깔끔함</h4>
              <div class="insta_symbol">
                <div>가구</div>
                <div>인테리어</div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="insta_imgbox">
                <img src="/images/content04/content04.png" alt="인스타그램사진">
              </div>
              <h4>감성에 젖을 수 있는 깔끔함</h4>
              <div class="insta_symbol">
                <div>가구</div>
                <div>인테리어</div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="insta_imgbox">
                <img src="/images/content04/content04.png" alt="인스타그램사진">
              </div>
              <h4>감성에 젖을 수 있는 깔끔함</h4>
              <div class="insta_symbol">
                <div>가구</div>
                <div>인테리어</div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="insta_imgbox">
                <img src="/images/content04/content04.png" alt="인스타그램사진">
              </div>
              <h4>감성에 젖을 수 있는 깔끔함</h4>
              <div class="insta_symbol">
                <div>가구</div>
                <div>인테리어</div>
              </div>
            </a>
          </div>
        </div>
      </section><!-- content04 -->
      <section class="content05">
        <h2>집토피아는!</h2>
        <div>
          <div>
            <a href="#">
              <img src="/images/content05/youtube01.png" alt="">
              <p>작고 위하여 부패를 지혜는 희망의 끓는 인간은
                이다. 구하기 힘차게 아름답고 스며들어 봄바람이다.</p>
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content05/youtube02.png" alt="">
              <p>작고 위하여 부패를 지혜는 희망의 끓는 인간은
                이다. 구하기 힘차게 아름답고 스며들어 봄바람이다.</p>
            </a>
          </div>
          <div>
            <a href="#">
              <img src="/images/content05/youtube03.png" alt="">
              <p>작고 위하여 부패를 지혜는 희망의 끓는 인간은
                이다. 구하기 힘차게 아름답고 스며들어 봄바람이다.</p>
            </a>
          </div>
        </div>
      </section><!-- content05 -->
      <section class="content06">
        <h2>집토피아 이용후기</h2>
        <div class="postscript">
          <a href="#">
            <div class="postscript01">
              <div class="score">
                <p>4.0<small> / 5</small></p>
                <strong>이O홍 고객님 x 홈O크인테리어</strong>
              </div>
              <p class="hover_txt">
                작고 위하여 부패를 지혜는 희망의 끓는
                인간은 이다. 구하기 힘차게 아름답고 스
              </p>
              <div class="symbol">
                <div>가구</div>
                <div>인테리어</div>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="postscript01">
              <div class="score">
                <p>4.3<small> / 5</small></p>
                <strong>안O철 고객님 x O젠인테리어</strong>
              </div>
              <p class="hover_txt">
                작고 위하여 부패를 지혜는 희망의 끓는
                인간은 이다. 구하기 힘차게 아름답고 스
              </p>
              <div class="symbol">
                <div>대리석</div>
                <div>화장실</div>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="postscript01">
              <div class="score">
                <p>5.0<small> / 5</small></p>
                <strong>신O영 고객님 x 에O스기업(주)</strong>
              </div>
              <p class="hover_txt">
                작고 위하여 부패를 지혜는 희망의 끓는
                인간은 이다. 구하기 힘차게 아름답고 스
              </p>
              <div class="symbol">
                <div>가구</div>
                <div>마루</div>
              </div>
            </div>
          </a>
        </div>
      </section><!-- content06 -->
      <div class="bottom_banner">
        <div>
          <a href="#">
            <img src="/images/bottom_banner_img.png" alt="바텀배너">
          </a>
        </div>
        <div class="sns">
          <h3>집토피아 <span>SNS</span></h3>
          <a href="https://www.instagram.com/ziptopia_interior/" target="blank">
            <img src="/images/ico_instargram.png" alt="인스타그램아이콘">
          </a>
          <a href="https://www.youtube.com/channel/UCKPUUqn1bXTHxX-YrdvpVMw" target="blank">
            <img src="/images/ico_youtube.png" alt="유튜브 아이콘">
          </a>
        </div>
      </div>

@endsection

@section('import_js')
  <script src="/js/submenu.js"></script>
  <script src="/js/slidebanner.js"></script>
  <script src="/js/popup.js"></script>
@endsection
