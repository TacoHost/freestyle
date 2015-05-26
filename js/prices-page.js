setTimeout(
    function () {
        $('#js-navigation #js-prices-page a').addClass("active");
    }, 100);


$(".zone-item input:checkbox").click(function () {
    var zoneItem = $(this).closest(".zone-item");
    zoneItem.toggleClass("activated");
    zoneItem.children(".js-form-controls").slideToggle("fast");

    if (zoneItem.hasClass("activated")) {
        var zoneItemId = $(this).closest(".zone-item").attr("id");

        $("#" + zoneItemId + " .age-selector").change(function () {
            var ageItem = $("option:selected", this).attr("value");
            $("#" + zoneItemId + " .age-selector-value").each(function(){
                $(this).html(ageItem);
            });
        });
        $("#" + zoneItemId + " .time-selector").change(function () {
            var timeItem = $("option:selected", this).attr("value");
            $("#" + zoneItemId + " .time-selector-value").each(function(){
                $(this).html(timeItem);
            });
        });
        $("#" + zoneItemId + " .number-selector").change(function () {
            var peopleCount = $(this).attr("value");
            $("#" + zoneItemId + " .people-selector-value").each(function(){
                $(this).html(peopleCount);
            });
        });
//        createNewRow
//        $(".click").click(function () {
//            var additionalInputs = $  ("#" + zoneItemId + " .js-form-controls").html();
//            $("#" + zoneItemId).append("<div class='js-form-controls'>"+ additionalInputs +"</div>");
//        });


        $("#" + zoneItemId + " .form-control").change(function () {
            $("span.age-selector-value, span.time-selector-value, span.price-for-zone").css("display", "none");
            var finalAge = $("#" + zoneItemId + " .age-selector-value").html();
            var finalTime = $("#" + zoneItemId + " .time-selector-value").html();
            var finalPeopleCount = $("#" + zoneItemId + " .people-selector-value").html();
            var zonePrice= $("#" + zoneItemId + " .price-for-zone");

           //alert(window.prices[zoneItemId][finalTime].price);
            zonePrice.html(window.prices[zoneItemId][finalTime][finalAge]);
//            var finalZonePrice= $(".multiplied-price-for-zone");
//            finalZonePrice.html($("#" + zoneItemId + " .price-for-zone").html(window.prices[zoneItemId][finalTime][finalAge]))*finalPeopleCount;
            var sum=0;
            var multipliedPrice = $("#" + zoneItemId + " .price-for-zone").html() * finalPeopleCount;
            $("#" + zoneItemId + " .multiplied-price-for-zone").html(multipliedPrice);

            $(".multiplied-price-for-zone").each(function(){
                sum += Number($(this).html());
            });
            $(".js-final-price").html(sum);
        });
    }

    else {
        var zoneItemId = $(this).closest(".zone-item").attr("id");
        var finalPeopleCount = $(".people-selector-value").html();
        $("#" + zoneItemId + " .price-for-zone").html(0);
        $("#" + zoneItemId + " .people-selector-value").html(1);
        $("#" + zoneItemId + " .number-selector").val(1);
        $("#" + zoneItemId + " select").val('default');
        var sum=0;
        $(".price-for-zone").each(function(){
            sum += Number($(this).html()*finalPeopleCount);
        });
        $(".js-final-price").html(sum);
        }
});

