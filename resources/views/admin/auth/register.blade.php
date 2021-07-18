@extends('admin.layouts.master')

@section('title', '관리자-등록')

@section('header_css_js')
    
@endsection

@section('import_js')
    <script src="/js/admin/register.js"></script>
@endsection

@section('content')

<div class="popup_join">
    <div class="pop_join_form">
        <h2>관리자 등록</h2>
        <form id="join_form" class="join_form">
            
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::get('fail'))
                <div class="alert alert-success">
                    {{ Session::get('fail') }}
                </div>
            @endif

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
            {{-- <li>
                <label for="group">부서</label>
                <select id="group" name="group">
                    <option name="인사팀">인사팀</option>
                    <option name="영업팀">영업팀</option>
                    <option name="기획팀">기획팀</option>
                    <option name="개발팀">개발팀</option>
                </select>
            </li>
            <li>
                <label for="level">부서</label>
                <select id="level" name="level">
                    <option name="1">팀장</option>
                    <option name="2">과장</option>
                    <option name="3">대리</option>
                    <option name="4">사원</option>
                </select>
            </li>
            <li>
                <label for="isUse">사용여부</label>
                <select id="isUse" name="isUse">
                    <option name="Y">사용</option>
                    <option name="N">미사용</option>
                </select>
            </li>             --}}
          </ul>
          <button id="RegAct" type="button">등록</button>
        </form>
      </div>
</div>

@endsection