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
    <h3 class="text-center">Hi!</h3>
    Add another director <input type="checkbox" id="checkbox1" style="color: black"/>
    <div id="autoUpdate" class="autoUpdate">
        content
    </div>

    <div class="container">
        <div class="container_in">
            <div class="field">
                <input type="text" class="current_address" id="current_address"
                    placeholder="Enter Your Current Address"/>
                <label for="current_address">current address</label>
            </div>
            <div class="clear"></div>

            <!--Need to update: IF  Offering = Purchase visible ELSE hidden ENDIF-->
            <section class="switch-settings">
                <div class="row">
                    <div class="question">
                        <h3>Is refinance address the same as current address?</h3>
                    </div>
                    <div class="switch">
                        <input type="checkbox" id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round">
                        <label for="cmn-toggle-1"></label>
                    </div>
                </div>
            </section>

            <!--Need to update:  IF Refinance = No THEN visible ELSE hidden ENDIF-->
            <div class="field">
                <input type="text" class="refinance_address" id="refinance_address"
                       placeholder="enter your refinance address"/>
                <label for="current_address">refinance address</label>
            </div>
            <div class="clear"></div>

            <section class="switch-settings">
                <div class="row">
                    <div class="question">
                        <h3>Is mailing address the same?</h3>
                    </div>
                    <div class="switch">
                        <input type="checkbox" id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round">
                        <label for="cmn-toggle-2"></label>
                    </div>
                </div>
            </section>

            <div class="field">
                <input type="text" class="current_address" id="mailing_address"
                       placeholder="enter your mailing address"/>
                <label for="current_address">mailing address</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <h3 class="text-center"><br/>next<br/> </h3>

    <p></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/householdexpense.png"
                                        width="190" height="190" alt="Submit"></span>
                            <small>add household<br/>expenses</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')