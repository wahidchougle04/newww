$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "submit.php",
        dataType: "html",
        success: function (data) {
            $("#data").html(data);

        }
    });
});