@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')


<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/propertytype">
    {{ csrf_field() }}

    <h3 class="text-center">Hi, let's get started</h3>
    <h5 class="text-center">what is your estimate credit score</h5>

    <p></p>

    <div class="container">
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