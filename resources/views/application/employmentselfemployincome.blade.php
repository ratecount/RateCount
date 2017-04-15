@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/employmentinfo">
    <h3 class="text-center">John Smith,<br/><br/>please provide the last two years employment<br/> </h3>
    <p></p>
    <div class="container">
        <div class="container_in">
            <div class="field">
                <input type="text" class="monthly_income_or_loss" id="monthly_income_or_loss" required placeholder="Enter your monthly income (or loss)"/>
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
    <h3 class="text-center">next</h3>
    <p></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                                <input type="image" src="/images/Add_Employment.png"
                                       width="190" height="190" alt="Submit">
                            </span><small>add<br/>employment</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/OtherIncome_YesNo_Yes.png"
                                       width="190" height="190" alt="Submit">
                            </span><small>add other<br/>income source</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')