@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<div class="progress_block step4">
    @include('application.progress4')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/maritalstatus">
    <h3 class="text-center">Hi!</h3>

    <div class="container">
        <div class="container_in_form">
            <section class="switch-settings">
                <div class="row">
                    <div class="question">
                        <h3>Are there any outstanding judgements against you?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-1"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="question">
                        <h3>Are you currently delinquent or in default on a federal debt?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-2"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="question">
                        <h3>Are you a party to a lawsuit in which you potentially have any personal financial liability?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-3"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="question">
                        <h3>Have you conveyed title to any property in lieu of foreclosure in the past 7 years?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-4"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="question">
                        <h3>Have you had property foreclosed upon in the last 7 years?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-5"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="question">
                        <h3>Within the past 7 years, have you completed a pre-foreclosure sale or short sale, whereby the property was sold to a third party and the Lender ageed to accept less than the outstanding mortgage balance due?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-6" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-6"></label>
                    </div>
                </div>
            </section>
            <div class="clear"></div>
        </div>
    </div>

    <!--<h3 class="text-center"><br/>next<br/> </h3>

    <p></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/1.png"
                                width="190" height="190" alt="Submit"></span>
                            <small>add household<br/>expenses</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>-->
</form>

@include('common.footer')