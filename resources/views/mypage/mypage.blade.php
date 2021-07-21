
@extends('layouts.master')

@section('title', '마이페이지')

@section('header_css_js')
  <link rel="stylesheet" href="/css/mypage.css">
@endsection
    
@section('content')
    
      <div class="banner">
        <img src="/images/mypage/banner.png" alt="banner">
      </div>
      <div class="mypage_content">
        <div class="scrab">
          <h2>스크랩북</h2>
          <div>
            <section>
              <a href="#">
                <div>
                  <img src="/images/mypage/scrab01.png" alt="스크랩사진">
                </div>
                <p>포근한거실</p>
                <div class="scrab_icon">
                  <div>
                    <a href="#"><img src="/images/mypage/icon_heart.png" alt="좋아요아이콘"></a>
                    <span>23</span>
                  </div>
                  <div>
                    <a href="#"><img src="/images/mypage/icon_scrab.png" alt="스크랩아이콘"></a>
                    <span>30</span>
                  </div>
                </div>
              </a>
            </section>
            <section>
              <a href="#">
                <div>
                  <img src="/images/mypage/scrab02.png" alt="스크랩사진">
                </div>
                <p>포근한거실</p>
                <div class="scrab_icon">
                  <div>
                    <a href="#"><img src="/images/mypage/icon_heart.png" alt="좋아요아이콘"></a>
                    <span>23</span>
                  </div>
                  <div>
                    <a href="#"><img src="/images/mypage/icon_scrab.png" alt="스크랩아이콘"></a>
                    <span>30</span>
                  </div>
                </div>
              </a>
            </section>
            <section>
              <a href="#">
                <div>
                  <img src="/images/mypage/scrab03.png" alt="스크랩사진">
                </div>
                <p>포근한거실</p>
                <div class="scrab_icon">
                  <div>
                    <a href="#"><img src="/images/mypage/icon_heart.png" alt="좋아요아이콘"></a>
                    <span>23</span>
                  </div>
                  <div>
                    <a href="#"><img src="/images/mypage/icon_scrab.png" alt="스크랩아이콘"></a>
                    <span>30</span>
                  </div>
                </div>
              </a>
            </section>
            <section>
              <a href="#">
                <div>
                  <img src="/images/mypage/scrab04.png" alt="스크랩사진">
                </div>
                <p>포근한거실</p>
                <div class="scrab_icon">
                  <div>
                    <a href="#"><img src="/images/mypage/icon_heart.png" alt="좋아요아이콘"></a>
                    <span>23</span>
                  </div>
                  <div>
                    <a href="#"><img src="/images/mypage/icon_scrab.png" alt="스크랩아이콘"></a>
                    <span>30</span>
                  </div>
                </div>
              </a>
            </section>
            <section>
              <a href="#">
                <div>
                  <img src="/images/mypage/scrab05.png" alt="스크랩사진">
                </div>
                <p>포근한거실</p>
                <div class="scrab_icon">
                  <div>
                    <a href="#"><img src="/images/mypage/icon_heart.png" alt="좋아요아이콘"></a>
                    <span>23</span>
                  </div>
                  <div>
                    <a href="#"><img src="/images/mypage/icon_scrab.png" alt="스크랩아이콘"></a>
                    <span>30</span>
                  </div>
                </div>
              </a>
            </section>
            <section>
              <a href="#">
                <div>
                  <img src="/images/mypage/scrab01.png" alt="스크랩사진">
                </div>
                <p>포근한거실</p>
                <div class="scrab_icon">
                  <div>
                    <a href="#"><img src="/images/mypage/icon_heart.png" alt="좋아요아이콘"></a>
                    <span>23</span>
                  </div>
                  <div>
                    <a href="#"><img src="/images/mypage/icon_scrab.png" alt="스크랩아이콘"></a>
                    <span>30</span>
                  </div>
                </div>
              </a>
            </section>
          </div>
        </div>
        <div class="list">
          <h2>견적 신청 내역</h2>
          <div>
            <h4>접수현황</h4>
            <h4>견적명</h4>
            <h4>작성자</h4>
            <h4>작성일</h4>
          </div>
          <section>
            <div>
              <div>진행중</div>
              <div><a href="#">[전체 견적]문의 드립니다.</a></div>
              <div>안녕하세요</div>
              <div>2021.06.30</div>
            </div>
            <div>
            </div>
          </section>
          <section>
            <div>
              <div>답변완료</div>
              <div><a href="#">[전체 견적]문의 드립니다.</a></div>
              <div>안녕하세요</div>
              <div>2021.06.20</div>
            </div>
            <div>
              <div><a href="#"><span>답변</span> 견적이 신청 되었습니다.</a></div>
              <div>집토피아</div>
            </div>
          </section>
        </div>
        <div>
          <a href="#">글쓰기</a>
          <a href="#">목록</a>
        </div>
      </div><!-- content -->

@endsection

@section('import_js')
    
@endsection