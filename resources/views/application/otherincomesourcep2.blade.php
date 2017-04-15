@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/otherincomesourcep2">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith,<br/><br/>select your other income<br/> </h3>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_Auto.png"
                                    width="190" height="190" alt="Submit"
                                    value="Auto Allowance" name="Submit">
                            </span><small>Auto<br/>Allowance</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_BroaderIncome.png"
                                    width="190" height="190" alt="Submit"
                                    value="Broader Income" name="Submit">
                            </span><small>Boarder<br/>Income</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_CapitalGains.png"
                                    width="190" height="190" alt="Submit"
                                    value="Capital Gains" name="SubmitSubmit">
                            </span><small>Capital<br/>Gains</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_HousingOrParsonage.png"
                                    width="190" height="190" alt="Submit"
                                    value="House or Parsonage" name="Submit">
                            </span><small>Housing or<br/>Parsonage</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_InterestAndDividends.png"
                                    width="190" height="190" alt="Submit"
                                    value="INterest and Dividends" name="Submit">
                            </span><small>Interest and<br/>Dividends</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_MortgageCreditCertificate.png"
                                    width="190" height="190" alt="Submit"
                                    value="Mortgage Credit Certificate" name="Submit">
                            </span><small>Mortgage Credit<br/>Certificate</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_MortgageDifferentialPayments.png"
                                    width="190" height="190" alt="Submit"
                                    value="Mortgage Differential Payments" name="Submit">
                            </span><small>Mortgage Differential<br/>Payments</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_NoteReceivable.png"
                                    width="190" height="190" alt="Submit"
                                    value="Note Receivable" name="Submit">
                            </span><small>Note<br/>Receivable</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_PublicAssistance.png"
                                    width="190" height="190" alt="Submit"
                                    value="Public Assistance" name="Submit">
                            </span><small>Public<br/>Assistance</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_Trust.png"
                                    width="190" height="190" alt="Submit"
                                    value="Trust" name="Submit">
                            </span><small>Trust<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/General_Question.png"
                                    width="190" height="190" alt="Submit"
                                    value="Other" name="Submit">
                            </span><small>Other<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/General_ThumbUp.png"
                                    width="190" height="190" alt="Submit"
                                    value="Done" name="Submit">
                            </span><small>Done<br/><br/></small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')