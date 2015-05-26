setTimeout(
  function () {
      $('#js-navigation #js-gallery-page a').addClass("active");
  }, 100);

$('.js-gallery-slider').sliderPro({
    width: "100%",
    height: 460,
    buttons: false,
    thumbnailsPosition: 'right',
    thumbnailWidth: 170,
    thumbnailHeight: 100,
    fade: true
    
});
$(".container.hcontainer").addClass("gallery-page");
