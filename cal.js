

$(document).ready(function () {
    var op;
    var res = 0;
    var temp = 0;
    var count = 0;
    $('.btnv').click(function () {
        val = Number($(this).val());
        res = res * 10 + val;
        //alert(res);
        $('#show').text(res);
    });
    $('.btnc').click(function () {
        if (res == '') {
            alert("input nuber first");
            return;
        }
        if (count == 0) {

            op = $(this).val();
            temp = Number($('#show').text());
            $('#show').text('');
            count++;
            res = 0;
        } else {
            value = Number($('#show').text());
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
                    value = 0;
                }
            });
        }
        op = $(this).val();
    });

});
