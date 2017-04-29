@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')
<br/><br/>

<form method="post" action="/login">
    {{ csrf_field() }}

    <div class="container" id="pill">
        <ul class="nav nav-pills">
            <li class="active">
                <a href="#1a" data-toggle="pill">Login</a>
                <br/><br/>
            </li>

            <li>
                <a href="#2a" data-toggle="pill">Create New Account</a>
                <br/><br/>
            </li>
        </ul>

        <!--Login-->
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <div class="row featurette">
                    <div class="col-md-5">
                        <h3 class="text-center">Login</h3><br/>

                        <div class="field">
                            <input type="email" id="username" name="username"
                                   placeholder="Enter a valid email address"
                                   autofocus="autofocus"/>
                            <label for="Username">email</label>
                        </div>

                        <div class="field">
                            <input type="password" id="password" name="password"
                                   placeholder="Create a password"/>
                            <label for="password">password</label>
                        </div>
                        <br/>
                        <button class="btn btn-primary btn-lg" type="Submit"
                                value="Get Pin" name="Submit" disabled>
                            <i class="fa fa-lock" aria-hidden="true"></i> get pin
                        </button>
                        <br/><br/>
                        <div class="field">
                            <input type="password" id="pin" name="enter pin"
                                   placeholder="enter pin"/>
                            <label for="pin">enter pin</label>
                        </div>
                        <br/>
                        <button class="btn btn-primary btn-lg" type="Submit"
                                value="Login" name="Submit">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> sign in
                        </button>
                    </div>
                    <br/>
                    <div class="col-md-7">
                        <img class="featurette-image img-fluid mx-auto"
                             src="/images/signin.png" width="800" height="800"
                             alt="Generic placeholder image">
                    </div>
                </div>
            </div>

            <!--Create New Account-->
            <div class="tab-pane" id="2a">
                <div class="row featurette">
                    <div class="col-md-5">
                        <h3 class="text-center">Create New Account</h3>
                        <br/>
                        <div class="field">
                            <input type="email" name="username" id="username"
                                placeholder="Enter a valid email address"
                                autofocus="autofocus" />
                            <label for="username">email</label>
                        </div>

                        <div class="field">
                            <input type="password" name="password" id="password"
                            placeholder="Create a password" />
                            <label for="password">password</label>
                        </div>

                        <div class="field">
                            <input type="password" name="confirm_password" id="confirm_password"
                                placeholder="Confirm password"/>
                            <label for="confirm_password">confirm password</label>
                        </div>
                        <br/><br/>
                        <button class="btn btn-primary btn-lg" type="Submit"
                                value="Create New Account" name="Submit">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            create account</button>

                    </div>

                    <div class="col-md-7">
                        <img class="featurette-image img-fluid mx-auto"
                             src="/images/createaccount.png" width="800" height="800" alt="Generic placeholder image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="push"></div>

<script>
    $(document).ready(function(){
        $(".nav-pills a").click(function(){
            $(this).tab('show');
        });
    });
</script>

@include('common.footer')


