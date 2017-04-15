@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<script type="text/javascript">
$(document).ready(function () {
    $('#checkbox1').change(function () {
        if (!this.checked)
//  ^
            $('#autoUpdate').fadeIn('slow');
        else
            $('#autoUpdate').fadeOut('slow');
    });
});
</script>

<script type="text/javascript">
    $(function () {
        $("#cmn-toggle-1").click(function () {
            if ($(this).is(":checked")) {
                $("#yes").show();
            } else {
                $("#yes").hide();
            }
        });
    });
</script>

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/maritalstatus">
    {{ csrf_field() }}

    <h3 class="text-center">Hi!</h3>
    Add another director <input type="checkbox" id="checkbox1" style="color: black"/>
    <div id="autoUpdate" class="autoUpdate">
        content
    </div>

    <div class="container">
        <div class="container_in">
            <div class="field">
                <input type="text" name="fullname" id="fullname"
                       placeholder="Enter your First, Middle,Last, Suffix"/>
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

            <div class="field" id="yes">
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
    </div>
</form>





@include('common.footer')