@extends('layouts.master')
@section('title', '집토피아')

@section('header_css_js')
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/jquery.bxslider.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
@endsection

@section('content')
       <center>

        {{-- 비밀번호 재설정\start --}}
        <div class="pop_pwmodi_form">
         <h2>비밀번호 재설정</h2>
         <form method="POST" action="{{ route('password.update') }}" id="pop_pwmodi_form" name="pop_pwmodi_form" class="pwmodi_form">
             @csrf
             <input type="hidden" name="token" value="{{ $token }}">
           <ul>
             <li>
               <input type="email" id="email" name="email" value="{{ $email }}" class="@error('email') is-invalid @enderror" autocomplete="off" required>
                 @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
             </li>
             <li>
                 <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" placeholder="비밀번호" autocomplete="off" required minlength="8">
                 @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
             </li>
             <li>
                 <input type="password" id="password-confirm" name="password_confirmation" class="@error('password-confirm') is-invalid @enderror" placeholder="비밀번호" autocomplete="off" required minlength="8">
             </li>
             <li>
               <button id="pwmodiAct" type="submit">패스워드 변경</button>
             </li>
           </ul>
         </form>
       </div>
       {{-- 비밀번호 재설정\end --}}

       </center>

@endsection

@section('import_js')
  <script src="/js/submenu.js"></script>
  <script src="/js/slidebanner.js"></script>
  <script src="/js/popup.js"></script>
@endsection
