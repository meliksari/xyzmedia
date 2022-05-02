$(document).ready(function() {
    $("#anlik-arama").keyup(function() {
        var query = $(this).val();
        if (query != "") {
            $.ajax({
                url: 'anlik-arama.php',
                method: 'POST',
                data: {
                    query: query
                },
                success: function(data) {
                    $('#search_result').html(data);
                    $('#search_result').css('display', 'block');
                    $("#anlik-arama").focusout(function() {
                        $('#search_result').css('display', 'flex');
                    });
                    $("#anlik-arama").focusin(function() {
                        $('#search_result').css('display', 'block');
                    });
                }
            });
        } else {
            $('#search_result').css('display', 'none');
        }
    });
});