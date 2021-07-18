$(document).ready(function(){
    $(".logo").on('click',function(){
      location.reload();
    });
  
    // login form
    $('#loginAct').on('click', function() {  

        var formData = new FormData($('#loginForm')[0]);

        if ($('#email').val() == '') {
            alert('이메일을 입력하세요.');
            return false;
        }

        if ($('#password').val() == '') {
            alert('비밀번호를 입력하세요.');
            return false;
        }
  
        $.ajax({
            type: "POST",
            url: "/admin/loginAction",
            data: formData,
            dataType: false,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                
                alert(res.message);
  
                if (res.result != 'success') return false;
  
                location.href='/admin';
            },
            error: function (jqxhr, status, error) {
                console.log(jqxhr);
            }
        });
  
    });

});