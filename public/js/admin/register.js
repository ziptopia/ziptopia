$(document).ready(function() {

    $('#RegAct').on('click', function () {  

        var formData = new FormData($('#join_form')[0]);
  
        $.ajax({
            type: "POST",
            url: "/admin/registerAction",
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