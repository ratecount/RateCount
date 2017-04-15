@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!-- Maincontent Starts -->
<div class="main-content">
    <div class="container">
        <form class="form_block" method="post" action="/application/borrower">
            {{ csrf_field() }}
            <div class="form_block_in">
                <h3>Hi, please log in!</h3>

                <div class="field">
                    <input type="email" name="username" id="username" placeholder="Enter a valid email address" autofocus="autofocus" required/>
                    <label for="username">Email</label>
                </div>
                <div class="clear"></div>

                <!--<div class="field">
                    <input type="password" name="password" id="password" placeholder="Create a password" required/>
                    <label for="password">Password</label>
                </div>
                <div class="clear"></div>-->
            </div>

            <section class="two_cards_block">
                <ul>
                    <li>
                        <a>
                        <span><input type="image" src="/images/General_Next.png" width="190" height="190" alt="Submit" />
                        </span>
                            <small>Log In</small>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </section>
        </form>
    </div>
</div>

<!-- Maincontent Ends -->

@include('common.footer')