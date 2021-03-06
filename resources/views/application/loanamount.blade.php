@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')


<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/ratesheet">
    {{ csrf_field() }}

    <h3 class="text-center">loan amount</h3>

    <p></p><br/>

    <div class="container">
        <section class="container_block_in text-center">

            <span class="clear"></span>

            <div class="container_block_in text-center">
               <div id="slider-vertical1" style="width:605px;">
                    <span class="min">$0</span>
                    <span class="max">$2,000,000</span>
                    <div class="clear"></div>
                </div>

                <input type="text" id="amount1" value="0" hidden="hidden">
            </div>
            <div class="clear"></div>
        </section>

        </div>

        <h3 class="text-center"><br/>is this a<br/> </h3>

        <p></p>

        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li>
                            <a><span><input type="image" src="/images/loanamount_img.png"
                                            width="190" height="190" alt="Submit"
                                            value="Purchase" name="Submit"></span>
                                <small>purchase</small></a>
                        </li>

                        <li>
                            <a><span><input type="image" src="/images/Property-Value_img.png"
                                            width="190" height="190" alt="Submit"
                                            value="Refinance" name="Submit"></span>
                                <small>refinance</small></a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>

@include('common.footer')

<script type="text/javascript">

    $(document).ready(function() {
        $('input').customInput();

        $('nav').clone().appendTo('.side_bar');
        $('.nav-icon,.overlay').click(function(e) {
            $('body,.nav-icon').toggleClass('open');
        });
    });
</script>


<!-- Placed at the end of the document so the pages load faster -->