$(document).ready(function(){
  $(".logo").on('click',function(){
    location.reload();
  });

  // login form
  $('#loginAct').on('click', function() {

      var formData = new FormData($('#pop_login_form')[0]);

      $.ajax({
          type: "POST",
          url: "/loginAction",
          data: formData,
          dataType: false,
          contentType: false,
          processData: false,
          success: function (res) {
              console.log(res);
              
              alert(res.message);

              if (res.result != 'success') return false;

              location.href='/';
          },
          error: function (jqxhr, status, error) {
              console.log(jqxhr);
          }
      });

  });

  // register form
  $('#RegAct').on('click', function () {

      var formData = new FormData($('#join_form')[0]);

      var chk_terms = ($("input:checkbox[id='chk_terms']").is(":checked") == true) ? 'Y' : 'N';
      var chk_user = ($("input:checkbox[id='chk_user']").is(":checked") == true) ? 'Y' : 'N';
      var chk_recieve = ($("input:checkbox[id='chk_recieve']").is(":checked") == true) ? 'Y' : 'N';

      var agree = {
        chk_terms: chk_terms,
        chk_user: chk_user,
        chk_recieve: chk_recieve
      };

      formData.append('agree', JSON.stringify(agree))

      $.ajax({
          type: "POST",
          url: "/registerAction",
          data: formData,
          dataType: false,
          contentType: false,
          processData: false,
          success: function (res) {
              console.log(res);
              alert('회원가입 성공');

              location.reload();
          },
          error: function (jqxhr, status, error) {
              console.log(jqxhr);
          }
      });

  });


  $('#LogoutAct').on('click', function () {  

        var formData = new FormData($('#LogoutForm')[0]);

        $.ajax({
            type: "POST",
            url: "/logout",
            data: formData,
            dataType: false,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                location.reload();
            },
            error: function (jqxhr, status, error) {  
                console.log(jqxhr);
            }
        });    

    });

    // 패스워드 리셋  이메일 발송
    $('#ResetSendEmailAct').on('click', function () {  

        var formData = new FormData($('#pop_resetpw_form')[0]);

        $.ajax({
            type: "POST",
            url: "password/email",
            data: formData,
            dataType: false,
            contentType: false,
            processData: false,
            success: function (res) {
                // console.log(res);
                alert('이메일이 발송되었습니다.');
                location.reload();

            },
            error: function (jqxhr, status, error) {
                console.log(jqxhr);
                return false;
            }
        });
    });

    // // 패스워드 변경
    // $('#pwmodiAct').on('click', function () {
    //     var formData = new FormData($('#pop_pwmodi_form')[0]);

    //     $.ajax({
    //         type: "POST",
    //         url: "/password/update",
    //         data: formData,
    //         dataType: false,
    //         contentType: false,
    //         processData: false,
    //         success: function (res) {  
    //             console.log(res);
    //         },
    //         error: function (jqxhr, status, error) {  
    //             console.log(jqxhr);
    //         }
    //     });
    // });

});
