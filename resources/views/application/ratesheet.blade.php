@extends('indexlayout.header')
@include('common.navbar')

<div class="progress_block step1">
    @include('application.progress')
</div>

<div class="container">
    <h3 class="text-center">Thank you!</h3>
    <h5 class="text-center">Here are the lowest mortgage rates we found in your area</h5>
    <br/>

    <div class="mortgage">
        <ul class="checkbox">
            <li><input type="checkbox" id="check-1" value="me" checked><label for="check-1">10 year fixed refinance</label></li>
            <li><input type="checkbox" id="check-2" value="me" checked><label for="check-2">15 year fixed refinance</label></li>
            <li><input type="checkbox" id="check-3" value="me" checked><label for="check-3">20 year fixed refinance</label></li>
            <li><input type="checkbox" id="check-4" value="me" checked><label for="check-4">30 year fixed refinance</label></li>
            <li><input type="checkbox" id="check-5" value="me"><label for="check-5">5/1 ARM refinance</label></li>
            <li><input type="checkbox" id="check-6" value="me"><label for="check-6">7/1 ARM refinance</label></li>
            <li><input type="checkbox" id="check-7" value="me"><label for="check-7">10/1 ARM refinance</label></li>
        </ul>

        <div class="clear"></div>
    </div>
</div>
<br/>
<div class="container">
    <table>
        <tr class="main_head">
            <th>Lender</th>
            <th>Rate</th>
            <th>Payment</th>
            <th>Visit Lender</th>
            <th></th>
        </tr>

        <tr>
            <td>
                <div class="lender">
                    <a href="#"><img src="images/consumer_logo.png" width="200" height="45"
                        alt="logo"></a>
                    <div class="lender_in">
                        <div class="lender_lft">
                            <ul>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star2.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><em>(382)</em></li>
                            </ul>

                            <div class="clear"></div>
                        </div>
                        <div class="lender_rgt"><a href="#">Lender info</a></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>20 year fixed</h5>
                    <span>3.250%  <small>APR</small></span>
                    <h5>3.250% Rate | At 0 pts</h5>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>$0.00 fees</h5>
                    <span>$1,645  <small>/mo</small></span>
                    <h5>As of 08/02</h5>
                </div>
            </td>
            <td>
                <a href="#" class="select_btn">Select</a>
            </td>
        </tr>
        <tr>
            <td>
                <div class="lender">
                    <a href="#"><img src="images/capital_logo.png" width="145" height="50" alt="logo"></a>
                    <div class="lender_in">
                        <div class="lender_lft">
                            <ul>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star2.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star2.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><em>(2)</em></li>
                            </ul>

                            <div class="clear"></div>
                        </div>
                        <div class="lender_rgt">
                            <a href="#">Lender info</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>15 year fixed</h5>
                    <span>2.924%  <small>APR</small></span>
                    <h5>2.875% Rate | At 0 pts</h5>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>$990.00 fees</h5>
                    <span>$1,985 <small>/mo</small></span>
                    <h5>As of 08/02</h5>
                </div>
            </td>
            <td>
                <a href="#" class="select_btn">Select</a>
            </td>
        </tr>
        <tr>
            <td>
                <div class="lender">
                    <a href="#"><img src="images/bank_logo.png" width="190" height="50" alt="logo"></a>
                    <div class="lender_in">
                        <div class="lender_lft">
                            <a href="#">Write a review</a>
                        </div>
                        <div class="lender_rgt">
                            <a href="#">Lender info</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>10 year fixed</h5>
                    <span>2.859%  <small>APR</small></span>
                    <h5>2.750% Rate | At 0 pts</h5>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>$1531.00 fees</h5>
                    <span>$2,767  <small>/mo</small></span>
                    <h5>As of 08/02</h5>
                </div>
            </td>
            <td>
                <a href="#" class="select_btn">Select</a>
            </td>
        </tr>
        <tr>
            <td>
                <div class="lender">
                    <a href="#"><img src="images/finacial.png" width="200" height="50" alt="logo"></a>
                    <div class="lender_in">
                        <div class="lender_lft">
                            <ul>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><em>(832)</em></li>
                            </ul>

                            <div class="clear"></div>
                        </div>
                        <div class="lender_rgt">
                            <a href="#">Lender info</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>30 year fixed</h5>
                    <span>3.398%   <small>APR</small></span>
                    <h5>3.375% Rate | At 0 pts</h5>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>$830.00 fees</h5>
                    <span>$1,282 <small>mo</small></span>
                    <h5>As of 08/02</h5>
                </div>
            </td>
            <td>
                <a href="#" class="select_btn">Select</a>
            </td>
        </tr>
        <tr>
            <td>
                <div class="lender">
                    <a href="#"><img src="images/internetbank_logo.png" width="97" height="50" alt="logo"></a>
                    <div class="lender_in">
                        <div class="lender_lft">
                            <ul>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star1.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><a href="#"><img src="/images/star2.png" width="13" height="13"
                                    alt="img"></a></li>
                                <li><em>(105)</em></li>
                            </ul>

                            <div class="clear"></div>
                        </div>
                        <div class="lender_rgt">
                            <a href="#">Lender info</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>30 year fixed</h5>
                    <span>3.414%  <small>APR</small></span>
                    <h5>3.375% Rate | At 0 pts</h5>
                </div>
            </td>
            <td>
                <div class="rate">
                    <h5>$1399.00 fees</h5>
                    <span>$1,282 <small>mo</small></span>
                    <h5>As of 08/02</h5>
                </div>
            </td>
            <td><a href="#" class="select_btn">Select</a></td>
        </tr>

    </table>
</div>

<form class="form-horizontal" method="get" action="/login">

    <div class="container text-center">
        <h3>RateCount one application process</h3>
        <h3>submit to all the lenders</h3>
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                            <input type="image" src="/images/General_Next.png"
                                   width="190" height="190" alt="Submit"
                                   value="Submit" name="Submit"></span>
                            <small>sign up/in</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>
@include('common.footer')

<script type="text/javascript">
    $(document).ready(function() {

        $('input').customInput();

        $('nav').clone().appendTo('.side_bar');
        $('.nav-icon,.overlay').click(function(e) {
            $('body,.nav-icon').toggleClass('open');
        });
    });
</script>