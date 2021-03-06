@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/employmentw2income">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith,<br/><br/>please provide the last two years employment<br/> </h3>
    <p></p>
    <div class="container">
        <div class="container_in">
            <div class="field">
                <input type="text" class="monthly_gross_base" id="monthly_gross_base"
                    placeholder="Enter your monthly gross base"/>
                <label for="monthly_gross_base">monthly gross base</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="overtime" id="overtime"
                    placeholder="Do you have any overtime?"/>
                <label for="overtime">monthly overtime</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="bonus" id="bonus"
                       placeholder="Do you have any yearly bonus?"/>
                <label for="bonus">yearly bonus</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="commission" id="commission"
                       placeholder="Do you have monthly commission?"/>
                <label for="commission">monthly commission</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="military_entitlement" id="military_entitlement"
                       placeholder="Do you have military entitlement?"/>
                <label for="military_entitlement">monthly military entitlement</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="other" id="other"
                    placeholder="Do you have any other income?"/>
                <label for="other">monthly other income</label>
            </div>
            <div class="clear"></div>

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
                                    width="190" height="190" alt="Submit"
                                    value="Add Employment" name="Submit">
                            </span><small>add<br/>employment</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/OtherIncome_YesNo_Yes.png"
                                    width="190" height="190" alt="Submit"
                                    value="Other Income" name="Submit">
                            </span><small>add other<br/>income source</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')