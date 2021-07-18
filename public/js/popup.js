$(function () {
  $(function () {
    var log = $(".login");
    var pop = $(".popup");
    var dim = $(".dim");

    log.on("click", function () {
      pop.show();
      dim.show();
    });

    $(".join").on("click", function () {
      pop.show();
      dim.show();
    });

    $(".pop_close").on("click", function () {
      location.reload();
    });

    dim.on("click", function () {
      location.reload();
    });
  });

  $(function () {
    var log = $(".login_email");
    var base = $(".pop_base");
    var login = $(".pop_login_form");

    log.click(function () {
      base.hide();
      login.show();
    });
  });

  $(function () {
    var email = $(".join_email");
    var login = $(".pop_login_form");
    var join = $(".pop_join_form");
    var pw = $(".reset_pw");
    var resetpw = $(".pop_resetpw_form");

    email.click(function () {
      login.hide();
      resetpw.hide();
      join.show();
      $(".popup").addClass("popup_join");
    });

    pw.click(function () {
      login.hide();
      join.hide();
      resetpw.show();
      $(".popup").addClass("popup_resetpw");
    });
  });

  $(function () {
    var chk = $("#chk_all");
    var chklist = $(".join_bottom>div input");

    chk.click(function () {
      chklist.click();
    });
  });

  $(function(){
    // validate signup form on keyup and submit
    $(".join_form").validate({
      rules: {
        join_name: "required",
        join_pw: {
          required: true,
          minlength: 8
        },
        join_id: {
          required: true,
          email: true
        },
        join_phone: {
          required: true,
          number: true
        },
        agree: "required"
      },
      messages: {
        join_name: "이름을 입력해 주세요",
        join_pw: {
          required: "암호를 입력해 주세요",
          minlength: "암호는 8자 이상이어야 합니다."
        },
        join_id: "형식에 맞는 이메일을 입력해 주세요.",
        agree: "필수선택을 선택 해주세요",
        join_phone: "휴대폰 번호를 입력해 주세요"
      }
    });
  });


});

