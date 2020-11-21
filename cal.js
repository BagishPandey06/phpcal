

$(document).ready(function () {
    var op;
    var res = 0;
    var temp = 0;
    var opt;
    $('.btnv').click(function () {
        val = Number($(this).val());
        res = res * 10 + val;
        //alert(res);
        $('#show').text(res);
    });
    $('.btnc').click(function () {
     
        op = $(this).val();
        value = Number($('#show').text());
        $('#show').val('');;
        //alert(value); 
        $.ajax({

            url: "cal.php",
            method: "post",
            type: "post",
            data: {
                temp: temp,
                value: value,
                opt: op
            },
            success: function (result) {
                temp = result;
               $('#show').text(temp);
                res = 0;
            }
        });
    });

});
