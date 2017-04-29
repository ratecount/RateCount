@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<div class="progress_block step4">
    @include('application.progress3')
</div>

<form class="form_block" method="post" action="/application/otherincomesource">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith,<br/><br/>select your other income<br/> </h3>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/General_ThumbDown.png"
                            width="190" height="190" alt="Submit"
                            value="Does Not Apply" name="Submit">
                            </span><small>does not apply<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_Alimony.png"
                            width="190" height="190" alt="Submit"
                            value="Alimony" name="Submit">
                            </span><small>alimony<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_ChildSupport.png"
                            width="190" height="190" alt="icon"
                            value="Child Support" name="Submit">
                            </span><small>child<br/>support</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_Disability.png"
                            width="190" height="190" alt="icon"
                            value="Disability" name="Submit">
                            </span><small>disability<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_FosterCare.png"
                            width="190" height="190" alt="icon"
                            value="Foster Care" name="Submit">
                            </span><small>foster<br/>care</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Employment_Status_Retired.png"
                            width="190" height="190" alt="Submit"
                            value="Retirement" name="Submit">
                            </span><small>retired<br/>(pension,ira,etc.)</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_RoyaltyPayments.png"
                            width="190" height="190" alt="Submit"
                            value="Royalty Payments" name="Submit">
                            </span><small>royalty<br/>payments</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_SeparateMaintenance.png"
                            width="190" height="190" alt="Submit"
                            value="Separate Maintenance" name="Submit">
                            </span><small>separate<br/>maintenance</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_SSN.png"
                            width="190" height="190" alt="Submit"
                            value="Social Security" name="Submit">
                            </span><small>social<br/>security</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_Unemployment.png"
                            width="190" height="190" alt="Submit"
                            value="Unemployment" name="Submit">
                            </span><small>unemployment<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Employment_Military_Yes.png"
                            width="190" height="190" alt="Submit"
                            value="VA Compensation" name="Submit">
                            </span><small>VA<br/>compensation</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/General_Next.png"
                            width="190" height="190" alt="icon"
                            value="See More Other Income" name="Submit">
                            </span><small>See<br/>More</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')