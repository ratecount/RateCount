@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<div class="progress_block step1">
    @include('application.progress2')
</div>

<form class="form_block" method="post" action="/application/borrower">
    {{ csrf_field() }}

    <div class="container">
        <div class="container_in_form">
            <div class="field">
                <input type="text" name="fullname" id="fullname"
                   placeholder="Enter your First, Middle,Last, Suffix"
                    autofocus/>
                <label for="fullname">What's your name?</label>
                <div class="clear"></div>
            </div>

            <section class="switch-settings">
                <div class="row">
                    <div class="question">
                        <h3>Did you use another name to get credit?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-1"></label>
                    </div>
                </div>
            </section>

            <div class="field" id="yes" style="display:none;">
                <!--List any names by which you are known or any names under which credit was previosuly received.</h5></label>-->

                    <input type="text" class="alternate" id="alternate"
                           placeholder="Enter First, Middle, Last, Suffix"/>
                    <label for="alternate">Alternate Names used to get credit?</label>


                    <div class="clear"></div>

            </div>
        </div>
    </div>
    <h3 class="text-center"><br/>are you<br/> </h3>

    <p></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Sex_Male.png"
                                width="190" height="190" alt="Submit"
                                value="Male" name="Submit"></span>
                            <small>male</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Sex_Female.png"
                                width="190" height="190" alt="Submit"
                                value="Female" name="Submit"></span>
                            <small>female</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>

@include('common.footer')

<script type="text/javascript">
    $(document).ready(function () {
        $("#cmn-toggle-1").click(function () {
            if ($(this).is(":checked")) {
                $("#yes").show();
            } else {
                $("#yes").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('nav').clone().appendTo('.side_bar');
        $('.nav-icon,.overlay').click(function(e) {
            $('body,.nav-icon').toggleClass('open');
        });
    });
</script>