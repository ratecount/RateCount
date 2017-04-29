@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<div class="progress_block step3">
    @include('application.progress4')
</div>


<form class="form_block" method="post" action="/application/otherexpense">
    {{ csrf_field() }}

    <h3 class="text-center">John Smith,<br/><br/>select your other expense<br/> </h3>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Expenses_CreditCard.png"
                                width="190" height="190" alt="Submit"
                                value="Revolving" name="Submit">
                            </span><small>revolving<br/>(e.g. credit cards)<br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Expenses_Installment.png"
                                width="190" height="190" alt="Submit"
                                value="Installment" name="Submit">
                            </span><small>Installment<br/>(e.g. car, etc.)</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_Alimony.png"
                                width="190" height="190" alt="Submit"
                                value="Alimony" name="Submit">
                            </span><small>Alimony<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_ChildSupport.png"
                                width="190" height="190" alt="Submit"
                                value="Child Support" name="Submit">
                            </span><small>Child<br/>Support<br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_SeparateMaintenance.png"
                                width="190" height="190" alt="Submit"
                                value="Separate Maintenance" name="Submit">
                            </span><small>Separate<br/>Maintenance</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Employment_Type_Company.png"
                                width="190" height="190" alt="Submit"
                                value="Job Related Expenses" name="Submit">
                            </span><small>Job Related<br/>Expenses</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/General_Question.png"
                                width="190" height="190" alt="Submit"
                                value="Other" name="Submit">
                            </span><small>Other<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/General_ThumbUp.png"
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