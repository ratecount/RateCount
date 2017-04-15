@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/employmentinfo">
    <h3 class="text-center">John Smith,<br/><br/>select your other expense<br/> </h3>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                                <img src="/images/Expenses_CreditCard.png"
                                     width="190" height="190" alt="icon">
                            </span><small>revolving<br/>(e.g. credit cards)<br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <img src="/images/Expenses_Installment.png"
                                    width="190" height="190" alt="icon">
                            </span> <small>Installment<br/>(e.g. car, etc.)</small></a>
                    </li>

                    <li>
                        <a><span>
                                <img src="/images/Income_OtherSource_Alimony.png"
                                    width="190" height="190" alt="icon">
                            </span><small>Alimony<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <img src="/images/Income_OtherSource_ChildSupport.png"
                                    width="190" height="190" alt="icon">
                            </span><small>Child<br/>Support<br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <img src="/images/Income_OtherSource_SeparateMaintenance.png"
                                    width="190" height="190" alt="icon">
                            </span><small>Separate<br/>Maintenance</small></a>
                    </li>

                    <li>
                        <a><span>
                                <img src="/images/Employment_Type_Company.png"
                                    width="190" height="190" alt="icon">
                            </span><small>Job Related<br/>Expenses</small></a>
                    </li>

                    <li>
                        <a><span>
                                <img src="/images/General_Question.png"
                                    width="190" height="190" alt="icon">
                            </span><small>Other<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <img src="/images/General_ThumbUp.png"
                                    width="190" height="190" alt="icon">
                            </span><small>Done<br/><br/></small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')