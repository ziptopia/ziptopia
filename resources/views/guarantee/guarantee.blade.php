@extends('layouts.master')

@section('title', '자재보증서비스')

@section('header_css_js')
  <link rel="stylesheet" href="/css/guarantee.css">
@endsection

@section('content')
    <div class="title_bg">
      <div class="title">
        <p>업계 최초 자재보증서비스</p>
        <h1>자재보증서비스</h1>
        <p>이제 자재의 품목과 수량이 제대로 사용되었는지 의심하지 않아도 됩니다!</p>
      </div>
    </div>
    <div class="content_bg">
      <div class="content01">
        <div>
          <h3>인테리어는</h3>
          <p>
            인테리어에서 자재가 차지하는 비중은 약 40% 정도입니다. <br>
            하지만 일부 업체에서 자재명세서에 적혀 있는 품목과 다른 품목을 사용하거나 자재의 수량을 속이는 경우가 있습니다.
          </p>
        </div>
        <div>
          <h3>집토피아는</h3>
          <p>
            4,000만원 공사 중 40% 정도인 1,600만원을 차지하는 자재 중에서 <br>
            고객님이 서비스 신청하는 품목에 대하여
          </p>
          <div class="content01_img_box">
            <img src="/images/guarantee/wood.png" alt="나무자재">
            <img src="/images/guarantee/certificate.png" alt="증명서">
            <img src="/images/guarantee/hand.png" alt="악수">
          </div>
          <p>자재의 품목과 수량이 정확하게 납품되었다는 보증서비스를 제공합니다. <br>
            소비자께서 신청하신 자재에 대해 집토피아가 직접 구매하여 소비자님에게 자재를 제공하는 서비스입니다.</p>
        </div>
        <div>
          <h3>자재보증서비스는</h3>
          <p>3% 또는 그 이상의 절감된 견적비용으로 감리인 <br>
            계약을 체결하시면 인테리어의 뛰어난 <br>
            품질을 경험하시게 되실 겁니다.
          </p>
          <a href="{{ url('/guarantee/guarantee_company') }}">보증 가능한 자재업체 리스트</a>
        </div>
      </div>
    </div>
    <div class="content02_bg">
      <div class="content02">
        <h2>자재 보증 시스템 과정</h2>
        <div>
          <div>
            <img src="/images/guarantee/step1.png" alt="step1">
            <h4>STEP 1</h4>
            <p>소비자 신청 및 결제</p>
          </div>
          <div>
            <img src="/images/guarantee/step2.png" alt="step2">
            <h4>STEP 2</h4>
            <p>집토피아에서 자재 구매 및 자재 보증</p>
          </div>
          <div>
            <img src="/images/guarantee/step3.png" alt="step3">
            <h4>STEP 3</h4>
            <p>자재업체에서 운송</p>
          </div>
          <div>
            <img src="/images/guarantee/step4.png" alt="step4">
            <h4>STEP 4</h4>
            <p>확인 사진 전송 및 인수증</p>
          </div>
          <div>
            <img src="/images/guarantee/step5.png" alt="step5">
            <h4>STEP 5</h4>
            <p>인테리어업체 자재 사용 사진 전송</p>
          </div>
          <div>
            <img src="/images/guarantee/step6.png" alt="step6">
            <h4>STEP 6</h4>
            <p>소비자에게 확인</p>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('import_js')
    <script src="/js/submenu5.js"></script>
@endsection
