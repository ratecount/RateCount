@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')


<div class="progress_block step1">
    @include('application.progress')
</div>

<form class="form_block" method="post" action="/application/estimatecreditscore">
    {{ csrf_field() }}


    <div class="container">
        <h3 class="text-center">Hi, let's get started</h3>
        <h5 class="text-center">what is your estimate credit score</h5>
        <p></p>

        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                                <input type="image" src="/images/CreditScore_Excellent.png"
                                    width="190" height="190" alt="Submit"
                                    value="Excellent" name="Submit">
                            </span><small>excellent</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/CreditScore_Good.png"
                                    width="190" height="190" alt="Submit"
                                    value="Good" name="Submit">
                            </span><small>good</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/CreditScore_Average.png"
                                    width="190" height="190" alt="Submit"
                                    value="Average" name="Submit">
                            </span><small>average</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/CreditScore_BelowAverage.png"
                                       width="190" height="190" alt="Submit"
                                       value="Below Average" name="Submit">
                            </span><small>below average</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>

@include('common.footer')

<script>
$(document).ready(function () {
    $(".btn-select").each(function (e) {
    var value = $(this).find("ul li.selected").html();
    if (value != undefined) {
    $(this).find(".btn-select-input").val(value);
    $(this).find(".btn-select-value").html(value);
    }
    });
});
</script>

<script>
    $(document).on('click', '.btn-select', function (e) {
        e.preventDefault();
        var ul = $(this).find("ul");
        if ($(this).hasClass("active")) {
            if (ul.find("li").is(e.target)) {
                var target = $(e.target);
                target.addClass("selected").siblings().removeClass("selected");
                var value = target.html();
                $(this).find(".btn-select-input").val(value);
                $(this).find(".btn-select-value").html(value);
            }
        ul.hide();
        $(this).removeClass("active");
        }
        else {
            $('.btn-select').not(this).each(function () {
            $(this).removeClass("active").find("ul").hide();
            });
            ul.slideDown(300);
            $(this).addClass("active");
        }
    });
</script>

<script>
    $(document).on('click', function (e) {
    var target = $(e.target).closest(".btn-select");
    if (!target.length) {
    $(".btn-select").removeClass("active").find("ul").hide();
    }
    });
</script>
