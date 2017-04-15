$(document).ready(function() {
    $(window).load(function(e) {
        $('#slider-vertical1 .ui-slider-handle').append('<span id="SliderValue"><em>$</em><span id="psi">417,000</span></span>');
    });

    $("#slider-vertical1").slider({
        range: "min",
        min: 0,
        max: 2000000,
        value: 417000,
        step:5000,
        slide: function(event, ui) {
            $("#amount1").val(ui.value);
            var amt1 = addCommas($('#amount1').val());
            $('#slider-vertical1 #psi').html(amt1);
        }
    });
      $("#amount1").val($("#slider-vertical1").slider("value"));


    $(window).load(function(e) {
        $('#slider-vertical2 .ui-slider-handle').append('<span id="SliderValue"><em>$</em><span id="psi">500,000</span></span>');
    });

    $("#slider-vertical2").slider({
        range: "min",
        min: 60000,
        max: 2000000,
        value: 500000,
        slide: function(event, ui) {
            $("#amount2").val(ui.value);
            var amt2 = $('#amount2').val();
            $('#slider-vertical2 #psi').html(amt2);
        }
    });
    $("#amount2").val($("#slider-vertical2").slider("value"));



    $(window).load(function(e) {
        $('#slider-vertical3 .ui-slider-handle').append('<span id="SliderValue"><em>$</em><span id="psi">130,000</span></span>');
    });

    $("#slider-vertical3").slider({
        //orientation: "horizontal",
        range: "min",
        min: 0,
        max: 200000,
        value: 130000,
        slide: function(event, ui) {
            $("#amount3").val(ui.value);
            var amt3 = $('#amount3').val();
            $('#slider-vertical3 #psi').html(amt3);
        }
    });
    $("#amount3").val($("#slider-vertical3").slider("value"));

});
/* CSS Document */