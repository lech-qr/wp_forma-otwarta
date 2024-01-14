jQuery.noConflict();
(function ($) {
    $(function () {

    // Przełamanie tekstu w logo
        $('#txt > a.nazwa').html(function (i, html) {
            return html.replace(/(\w+\s\w+)/, '<span>$1</span><br/>')
        });
    
// Menu responsywne
    var tmpMenu=0;
    $('#icon-menu').click(function(){

        $(this).toggleClass("open");
        if(tmpMenu===0) {
            $('header nav').css("display", "block");
            tmpMenu=1;
        }else{
            $('header nav').css("display", "none");
            tmpMenu=0;
        }
    });
        
    // Na górę
        $(window).scroll(function () {
            toggleToTop();
        });
        function toggleToTop() {
            var scrollPosition = $(this).scrollTop();

            if (scrollPosition >= 700) {
                $('#na-gore').addClass('poka');
            } else {
                $('#na-gore').removeClass('poka');
            }
        }
        $('#na-gore').click(function () {
            $("html, body").animate({scrollTop: 0}, "slow");
            return false;
        });        

    });
})(jQuery);