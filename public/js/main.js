$(function(){
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
              alert('login success');

              location.reload();
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

});
