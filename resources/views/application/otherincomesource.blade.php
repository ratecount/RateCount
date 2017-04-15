@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/otherincomesource">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith,<br/><br/>select your other income<br/> </h3>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                                <input type="image" src="/images/General_ThumbUp.png"
                                    width="190" height="190" alt="Submit"
                                    value="Does Not Apply" name="Submit">
                            </span><small>does not apply<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_Alimony.png"
                                    width="190" height="190" alt="Submit"
                                    value="Alimony" name="Submit">
                            </span><small>alimony<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_ChildSupport.png"
                                    width="190" height="190" alt="icon"
                                    value="Child Support" name="Submit">
                            </span><small>Child<br/>Support</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_Disability.png"
                                    width="190" height="190" alt="icon"
                                    value="Disability" name="Submit">
                            </span><small>Disability<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_FosterCare.png"
                                    width="190" height="190" alt="icon"
                                    value="Foster Care" name="Submit">
                            </span><small>Foster<br/>Care</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Employment_Status_Retired.png"
                                    width="190" height="190" alt="Submit"
                                    value="Retirement" name="Submit">
                            </span><small>Retired<br/>(pension,ira,etc.)</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_RoyaltyPayments.png"
                                    width="190" height="190" alt="Submit"
                                    value="Royalty Payments" name="Submit">
                            </span><small>Royalty<br/>Payments</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_SeparateMaintenance.png"
                                    width="190" height="190" alt="Submit"
                                    value="Separate Maintenance" name="Submit">
                            </span><small>Separate<br/>Maintenance</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_SSN.png"
                                    width="190" height="190" alt="Submit"
                                    value="Social Security" name="Submit">
                            </span><small>Social<br/>Security</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Income_OtherSource_Unemployment.png"
                                    width="190" height="190" alt="Submit"
                                    value="Unemployment" name="Submit">
                            </span><small>Unemployment<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Employment_Military_Yes.png"
                                    width="190" height="190" alt="Submit"
                                    value="VA Compensation" name="Submit">
                            </span><small>VA<br/>Compensation</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/General_Next.png"
                                    width="190" height="190" alt="icon"
                                    value="See More" name="Submit">
                            </span><small>See<br/>More</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')