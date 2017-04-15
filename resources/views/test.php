@extends('indexlayout.header')
@include('common.navbar')


<!-- Marketing messaging and featurettes
================================================== -->
<div class="jumbotron">

    <div class="container">

        <h1 style="color:white"> modernizing the lending experience</h1>
        <p></p>
        <h4 style="color:white">
            r e s t. &nbsp&nbsp&nbsp r e l a x. &nbsp&nbsp&nbsp e n j o y.
        </h4>
        <p>or</p>
        <h4 style="color:white">
            f a s t. &nbsp&nbsp&nbsp s i m p le. &nbsp&nbsp&nbsp e a s y.
        </h4>
        <p></p>

        <form method="post" action="/application/borrower">
            {{ csrf_field() }}

            <div class="zipcode_rgt">
                <label for="ex3"></label>
                <input class="input_block" id="ex3" type="text"
                       placeholder=" enter your zip code to get started"><p></p>
                <p>
                    <input type="submit" class="btn btn-primary"
                           value="Mortgage Purchase" name="purchase">

                    <input type="submit" class="btn btn-secondary"
                           value="Mortgage Refinance"
                           name="refinance">
                </p>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </form>
    </div>
</div>
<br>
<div class="container marketing">
    <div class="row">
        <div class="col-lg-4">
            <h2>one application</h2>
            <p>unified application for all lenders<br/>&nbsp</p>
            <img src="/images/oneapplication.png"
                 alt="Generic placeholder image" width="140" height="140">
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>

        <div class="col-lg-4">
            <h2>hassle-free</h2>
            <p>apply anywhere, anytime<br/>&nbsp</p>
            <img src="/images/hasslefree.png"
                 alt="Generic placeholder image" width="140" height="140">
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>

        <div class="col-lg-4">
            <h2>privacy</h2>
            <p>will NOT sell your data<br/>&nbsp</p>
            <img src="/images/privacy.png"
                 alt="Generic placeholder image" width="140" height="140">
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>
    </div>
</div>

<!-- START THE FEATURETTES -->
<div class="block_overlay">
    <hr class="featurette-divider">
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
                    lender that fits your financial goals;
                </h5><br>
                <h5><i class="fa fa-thumbs-o-up fa-2x" style="color: #293E6A"></i>
                    select the rate that fits your goal: at the end of the day, rate counts!
                </h5>
            </div>

            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto"
                     src="/images/marketplace.jpg" alt="Generic placeholder image">
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
                design with logic and actions for a better user experiences;
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
                 data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
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
                    data encryption: your data is protected by encryption externally an internally;
                </h5><br>

                <h5><i class="fa fa-usd fa-2x" aria-hidden="true" style="color: #293E6A"></i>
                    privacy secured: your data is safe and will not be sold to
                    third parties without your consent.
                </h5>
            </div>

            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto"
                     src="/images/security.jpg" alt="Generic placeholder image">
            </div>
        </div>
    </div>
</div>

<br><br><br>
<div class="container">
    <div class="row featurette">
        <div class="col-md-7 push-md-5">
            <h2>oh yeah, it's that easy...<span class="text-muted">intuitive!</span>
            </h2><br>
            <h5><i class="fa fa-gamepad fa-2x" style="color: #293E6A"></i>
                interactive.
                design with logic and actions for a better user experiences.
            </h5><br>
            <h5><i class="fa fa-compass fa-2x" style="color: #293E6A"></i>
                smart workflow.
                step by step to get you into the right direction.
            </h5><br>
            <h5><i class="fa fa-info-circle fa-2x" style="color: #293E6A"></i>
                transparency.
                up-to-date status of your application.
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
    <div class="container">
        <div class="row featurette">
            <div class="text-center">
                <h5>stay connected</h5>
                <p></p>
                <div class="col-md-12">

                    <a><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                    <a><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    <a><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>


                    <h5>help us make a better site!</h5>
                    <!--<i class="fa fa-github fa-2x" aria-hidden="true"></i>-->
                </div>

            </div>
        </div>
    </div>
    <!--<hr class="featurette-divider">-->

    <!-- /END THE FEATURETTES -->
</div>

@include('common.footer')
