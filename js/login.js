$(document).ready(function() {
    $("#login-form").submit(function(e) {
       e.preventDefault();
       $formdata = $(this).serialize();
       console.log($formdata);
       $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $formdata,
            success: function(data) {
                window.location.href = "index.php";
            },
            error: function(data) {
                $(this).find("#error").html(data);
            }
       });
    });
})