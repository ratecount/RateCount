@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<div class="progress_block step4">
    @include('application.progress3')
</div>

<form class="form_block" method="post" action="/application/otherincomesourcep2">
    {{ csrf_field() }}

    <div class="container">
        <h3 class="text-center">John Smith</h3>
        <h4>select your other income</h4>
        <p></p>
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_Auto.png"
                            width="190" height="190" alt="Submit"
                            value="Auto Allowance" name="Submit">
                            </span><small>auto<br/>allowance</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_BroaderIncome.png"
                            width="190" height="190" alt="Submit"
                            value="Broader Income" name="Submit">
                            </span><small>boarder<br/>income</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_CapitalGains.png"
                            width="190" height="190" alt="Submit"
                            value="Capital Gains" name="SubmitSubmit">
                            </span><small>capital<br/>gains</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_HousingOrParsonage.png"
                            width="190" height="190" alt="Submit"
                            value="House or Parsonage" name="Submit">
                            </span><small>housing or<br/>parsonage</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_InterestAndDividends.png"
                            width="190" height="190" alt="Submit"
                            value="Interest and Dividends" name="Submit">
                            </span><small>interest and<br/>dividends</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_MortgageCreditCertificate.png"
                            width="190" height="190" alt="Submit"
                            value="Mortgage Credit Certificate" name="Submit">
                            </span><small>mortgage credit<br/>certificate</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_MortgageDifferentialPayments.png"
                            width="190" height="190" alt="Submit"
                            value="Mortgage Differential Payments" name="Submit">
                            </span><small>mortgage differential<br/>payments</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_NoteReceivable.png"
                            width="190" height="190" alt="Submit"
                            value="Note Receivable" name="Submit">
                            </span><small>note<br/>receivable</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_PublicAssistance.png"
                            width="190" height="190" alt="Submit"
                            value="Public Assistance" name="Submit">
                            </span><small>public<br/>assistance</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_Trust.png"
                            width="190" height="190" alt="Submit"
                            value="Trust" name="Submit">
                            </span><small>trust<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/General_Question.png"
                            width="190" height="190" alt="Submit"
                            value="Other Income Source" name="Submit">
                            </span><small>other<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/General_ThumbUp.png"
                            width="190" height="190" alt="Submit"
                            value="Done" name="Submit">
                            </span><small>done<br/><br/></small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')