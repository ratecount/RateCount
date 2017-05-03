@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<div class="progress_block step3">
    @include('application.progress3')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/employmentselfemployincome">
    {{ csrf_field() }}

    <div class="container">
        <h3 class="text-center">John Smith</h3>
        <h4>please provide your salary</h4>
        <p></p>

        <div class="container_in_form">
            <div class="field">
                <input type="text" class="monthly_income_or_loss" id="monthly_income_or_loss"
                       placeholder="Enter your monthly income (or loss)"/>
                <label for="monthly_income_or_loss">Monthly Income (or Loss)</label>
            </div>
            <div class="clear"></div>

            <section class="switch-settings">
                <div class="row">
                    <div class="question">
                        <h3>Do you own 25% or more  of the company?</h3>
                    </div>
                    <div class="switch">
                        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-1"></label>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center">let's add</h4>
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Add_Employment.png"
                                width="190" height="190" alt="Submit"
                                value="Add Employment" name="Submit">
                            </span><small>employment</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/OtherIncome_YesNo_Yes.png"
                                width="190" height="190" alt="Submit"
                                value="Other Income" name="Submit">
                            </span><small>other income</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')