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

    email.click(function () {
      login.hide();
      join.show();
      $(".popup").addClass("popup_join");
    });
  });

  $(function () {
    var chklist = $(".chklist")
    var pop = $(".pop_chk");
    var dim = $(".dim02");

    chklist.on("click", function () {
      pop.show();
      dim.show();
    });

    $(".pop_chk_close").on("click", function () {
      pop.hide();
      dim.hide();
    });

    dim.on("click", function () {
      pop.hide();
      dim.hide();
    });
  });

  $(function () {
    var pop_insta = $(".pop_insta01")
    var pop = $(".pop_insta");
    var dim = $(".dim03");

    pop_insta.on("click", function () {
      pop.show();
      dim.show();
    });

    $(".pop_chk_close").on("click", function () {
      pop.hide();
      dim.hide();
    });

    dim.on("click", function () {
      pop.hide();
      dim.hide();
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
        join_name: "????????? ????????? ?????????",
        join_pw: {
          required: "????????? ????????? ?????????",
          minlength: "????????? 8??? ??????????????? ?????????."
        },
        join_id: "????????? ?????? ???????????? ????????? ?????????.",
        agree: "??????????????? ?????? ????????????",
        join_phone: "????????? ????????? ????????? ?????????"
      }
    });
  });


});

