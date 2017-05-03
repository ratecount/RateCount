@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step2">
    @include('application.progress3')
</div>

<form class="form_block" method="post" action="/application/employmentstatus">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith</h3>
    <h4 class="text-center">are you</h4>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Employment_Type_Company.png"
                                width="190" height="190" alt="Submit"
                                value="Employ" name="Submit">
                            </span><small>employ <br/> </small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Income_OtherSource_Unemployment.png"
                                width="190" height="190" alt="Submit"
                                value="Unemployed" name="Submit">
                            </span><small>unemployed<br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Employment_Status_Retired.png"
                                width="190" height="190" alt="Submit"
                                value="Retired" name="Submit">
                            </span><small>retired<br/></small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')