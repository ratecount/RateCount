@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step4">
    @include('application.progress2')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/nothispaniclatino">
    {{ csrf_field() }}

    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Race_White.png"
                                width="190" height="190" alt="Submit"
                                value="White" name="Submit">
                            </span><small>white<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Black.png"
                                width="190" height="190" alt="Submit"
                                value="Black or African American" name="Submit">
                            </span><small>black or<br/>african american</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Asian.png"
                            width="190" height="190" alt="Submit"
                            value="Asia" name="Submit">
                            </span><small>asia<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_NativeHawaiian.png"
                                width="190" height="190" alt="Submit"
                                value="Native Hawaiian or Other Pacific Islander" name="Submit">
                            </span><small>native hawaiian or<br/>other pacific islander</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_AmericanIndian.png"
                                width="190" height="190" alt="Submit"
                                value="American Indian or Alaska Native" name="Submit">
                            </span><small>american indian or<br/>alaska native</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/General_Privacy.png"
                                width="190" height="190" alt="Submit"
                                value="Do No Wish to Provide" name="Submit">
                            </span><small>do not wish<br/>to provide</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')