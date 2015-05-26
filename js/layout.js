if ($(window).height() < 680) {
    $('#js-navigation').css('top', 0);
} else {
    $('#js-navigation').css('top', $(this).scrollTop() + "px");
}

$(window).scroll(function () {
    if ($(window).height() < 680) {
        $('#js-navigation').css('top', 0);
    } else {
        $('#js-navigation').css('top', $(this).scrollTop() + "px");
    }
});

$(".js-show-offcanvas").click(function() {
    $("#js-off-navigation").slideToggle(200);
});

$("#js-off-navigation a").click(function () {
    $("#js-off-navigation").slideUp(200);
});

setTimeout(function () {
    var map = new YMaps.Map(YMaps.jQuery("#js-map")[0]), center;

    center = new YMaps.GeoPoint(27.605911, 53.918599);
    map.openBalloon(center, "Спортивно-оздоровительный комплекс Фристайл:<br/><br/>"
        + (YMaps.location.country || "")
        + (YMaps.location.region ? ", " + YMaps.location.region : "")
        + (YMaps.location.city ? ", " + YMaps.location.city : "")
    );
    map.addControl(new YMaps.Zoom());
    map.setCenter(center, 16);
}, 250);

var url = window.location.pathname;

if (url == "/") {
    $(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner');
        $spinner.fadeOut();
        $preloader.delay(2500).fadeOut('slow');
    });
} else {
    $(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner');
        $spinner.fadeOut();
        $preloader.delay().fadeOut('slow');
    });
}

$(window).on('load', function () {
    var parallaxHeight = $("body").css("height");
<<<<<<< HEAD
    var parallaxUrl = $(".js-parallax-url").html();

    $(".parallax-background").attr("data-image-src", parallaxUrl);
    $(".parallax-slider").attr("src", parallaxUrl);
    
=======
>>>>>>> e5652dbb324e4b744a0616921441450b7265e28c
    $(".parallax-background").css("height", parallaxHeight);
});

$(document).ready(function() {
		$(".fancybox").fancybox();
});