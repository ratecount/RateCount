@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')


<form method="post" action="/authentication">
    {{ csrf_field() }}
    <div class="container">
        <br/><br/>
        <h3 class="text-center">Thank you for signing up with us!</h3><br/>
        <div class="row featurette">

            <div class="col-md-5">
                <h5>Let's setup your two factor authentication!</h5>
                <br/>
                <h5>Enter your cell phone number to receive a pin to login.</h5>

                <div class="field">
                    <input type="number" id="cellphone"
                           placeholder="Enter your cell phone" autofocus="autofocus"
                           value="Cell Phone" name="Submit"/>
                    <label for="cellphone">Cell Phone</label>
                </div>

                <button class="btn btn-primary" type="Submit"
                    value="Authentication" name="Submit">
                    <i class="fa fa-lock" aria-hidden="true"></i> login
                </button>

            </div>

            <div class="col-md-7">
                <img class="featurette-image img-fluid mx-auto"
                     src="/images/homepage_peaceofmind.png" width="800" height="800" alt="Generic placeholder image">
            </div>
        </div>
    </div>
</form>
<div class="push"></div>


@include('common.footer')