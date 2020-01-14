;(function ($) { 
    $(document).ready(function () {
       $("#login").on('click', function () {
            $("#form01 h2").html("Login");
            $(".hidden").hide();
            $("#action").val("login");
        });

        $("#registration").on('click', function () {
            $("#form01 h2").html("Register");
            $(".hidden").show();
            $("#action").val("register");
        });

        


    }) 
})(jQuery);





