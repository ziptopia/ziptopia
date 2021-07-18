$(function(){

    $('#discount_counsel_form').on('click', function () {  

        var formData = new FormData($('#discount_counsel_form')[0]);
        alert('상담신청하기...');
        $.ajax({
            type: "POST",
            url: "/counsel/counsel_req",
            data: formData,
            dataType: false,
            contentType: false,
            processData: false,
            success: function (res) {
                
            },
            error: function (jqxhr, status, error) {  

            }
        });
 
    });

});