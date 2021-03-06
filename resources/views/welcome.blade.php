@extends('indexlayout.header')
@include('indexlayout.indexnavbar')


<!-- Marketing messaging and featurettes
================================================== -->
<div class="jumbotron jumbotron_image_rc">

    <div class="container">

        <h1> modernizing the lending experience</h1>
        <br/>
        <h4>r e s t. &nbsp&nbsp&nbsp r e l a x. &nbsp&nbsp&nbsp e n j o y.</h4>
        <br/><br><br/><br><br/><br><br/><br><br/><br>

        <form class="form-horizontal" method="get" action="/application/estimatecreditscore">
            {{ csrf_field() }}

            <div class="form-group row">
                <div class="col-lg-5">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg"
                            placeholder="enter your zip code here to get started"
                            required>

                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-primary-rc" type="Submit">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div>

            <!--<div class="form-group row">
                <div class="col-lg-6">
                    <input type="submit" class="btn btn-primary btn-primary-rc btn-lg"
                           value="Mortgage Purchase" name="purchase">

                    <input type="submit" class="btn btn-primary btn-primary-rc btn-lg"
                           value="Mortgage Refinance"
                           name="refinance">
                </div>
            </div>-->
        </form>
    </div>
</div>

<br/><br/><br/>

<div class="container marketing">
    <div class="row">
        <div class="col-lg-4 text-center">
            <h3>one application</h3>
            <p>unified application for all lenders<br/>&nbsp</p>
            <img src="/images/oneapplication.png"
                 alt="Generic placeholder image" width="140" height="140">
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>

        <div class="col-lg-4 text-center">
            <h3>hassle-free</h3>
            <p>apply anywhere, anytime<br/>&nbsp</p>
            <img src="/images/hasslefree.png"
                 alt="Generic placeholder image" width="140" height="140">
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>

        <div class="col-lg-4 text-center">
            <h3>privacy</h3>
            <p>will NOT sell your data<br/>&nbsp</p>
            <img src="/images/privacy.png"
                 alt="Generic placeholder image" width="140" height="140">
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>
    </div>
</div>
<br/><br/>
<!-- START THE FEATURETTES -->

<div class="block_overlay">
    <hr class="featurette-divider">
    <br/><br/>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2>platform that connects consumers and lenders...<span class="text-muted">seamlessly!</span>
                </h2><br>

                <h5><i class="fa fa-check-circle-o fa-2x" style="color: #293E6A"></i>
                    apply only one time: no more starting over or filling out different forms;
                </h5><br>
                <h5><i class="fa fa-share-alt fa-2x" aria-hidden="true" style="color: #293E6A"></i>
                    analysis: match your profile with
                    lenders that fits your financial goals;
                </h5><br>
                <h5><i class="fa fa-thumbs-o-up fa-2x" style="color: #293E6A"></i>
                    select the rate that fits you: at the end of the day, rate counts!
                </h5>
            </div>

            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto"
                     src="/images/homepage_share.png" alt="Generic placeholder image">
            </div>
        </div>
    </div>
</div>

<br><br><br>
<div class="container">
    <div class="row featurette">
        <div class="col-md-7 push-md-5">
            <h2>oh yeah, it's that easy...<span class="text-muted">and intuitive!</span>
            </h2><br>
            <h5><i class="fa fa-gamepad fa-2x" style="color: #293E6A"></i>
                interactive:
                design with logic and actions for a better user experience;
            </h5><br>
            <h5><i class="fa fa-compass fa-2x" style="color: #293E6A"></i>
                smart workflow:
                step by step to get you into the right direction;
            </h5><br>
            <h5><i class="fa fa-info-circle fa-2x" style="color: #293E6A"></i>
                transparency:
                up-to-date status of your application.
            </h5><br>
        </div>

        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto"
                 src="/images/homepage_initutive.png" alt="Generic placeholder image">
        </div>
    </div>
</div>

<div class="block_overlay">
    <br><br><br>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2>and lastly, security...<span class="text-muted">privacy is protected!</span></h2>
                <p></p>

                <h5><i class="fa fa-key fa-2x" aria-hidden="true" style="color: #293E6A"></i>
                    two factor authentication:  adds an extra layer of security to your account
                    by sending a verification pin to your phone via text or email;
                </h5><br>

                <h5><i class="fa fa-eye-slash fa-2x" aria-hidden="true" style="color: #293E6A"></i>
                    data encryption: your data is protected by encryption externally and internally;
                </h5><br>

                <h5><i class="fa fa-usd fa-2x" aria-hidden="true" style="color: #293E6A"></i>
                    privacy secured: your data is safe and will not be sold to
                    third parties without your consent.
                </h5>
            </div>

            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto"
                     src="/images/homepage_protected_v2.png" alt="Generic placeholder image">
            </div>
        </div>
    </div>
</div>

<br><br><br>
<div class="container">
    <div class="row featurette">
        <div class="col-md-7 push-md-5">
            <h2>this is us<span class="text-muted"></span>
            </h2><br>
            <h5><i class="fa fa-gamepad fa-2x" style="color: #293E6A"></i>
                1.

            </h5><br>
            <h5><i class="fa fa-compass fa-2x" style="color: #293E6A"></i>
                2.

            </h5><br>
            <h5><i class="fa fa-info-circle fa-2x" style="color: #293E6A"></i>
                3.

            </h5><br>
        </div>

        <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto"
                 data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
        </div>
    </div>
</div>

<div class="block_overlay">
    <br><br><br>
    <div class="container text-center">
        <h4 class="text-center">stay connected</h4>
        <br/>
        <div class="container text-center">
            <a href=""><i class="fa fa-facebook fa-3x"></i></a>
            <a href=""><i class="fa fa-google-plus fa-3x"></i></a>
            <a href=""><i class="fa fa-twitter fa-3x"></i></a>
            <a href=""><i class="fa fa-youtube fa-3x"></i></a>
            <a href=""><i class="fa fa-linkedin fa-3x"></i></a>
            <a href=""><i class="fa fa-rss fa-3x"></i></a>
        </div>
    </div>
    <br/><br/>
    <div class="container text-center">
        <h4 class="text-center">make a better experience, join our project</h4>
        <br/>
        <div class="container text-center">
            <a href=""><i class="fa fa-github fa-3x"></i></a>
        </div>
    </div>
</div>
    <!--<hr class="featurette-divider">-->

    <!-- /END THE FEATURETTES -->

@include('common.footer')

<script>
    $(document).ready(function(){
        $(".dropdown-toggle").dropdown();
    });
</script>

<script>
    $('#myDropdown > li > a').click(function(e){
        $('#myDropdown > li > a').removeClass('selected');
        $(this).addClass('selected');
    });
</script>
