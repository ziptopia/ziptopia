@extends('admin.layouts.master')

@section('title', '관리자-로그인')

@section('header_css_js')
    
@endsection

@section('import_js')
    <script src="/js/admin/login.js"></script>
@endsection
    
@section('content')
<div class="popup">
    <div class="pop_login_form">
        <h2>관리자 로그인</h2>
        <form id="loginForm" name="loginForm" class="login_form">
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
    </div>
</div>
@endsection