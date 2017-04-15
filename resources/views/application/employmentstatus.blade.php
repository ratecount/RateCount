@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step5">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/employmentstatus">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                            <input type="image" src="/images/Employment_Type_Company.png"
                                width="190" height="190" alt="Submit"
                                value="Employ" name="Submit">
                            </span><small>employ <br/> </small></a>
                    </li>

                    <li>
                        <a><span>
                            <input type="image" src="/images/Income_OtherSource_Unemployment.png"
                                width="190" height="190" alt="Submit"
                                value="Unemployed" name="Submit">
                            </span><small>unemployed<br/></small></a>
                    </li>

                    <li>
                        <a><span>
                            <input type="image" src="/images/Employment_Status_Retired.png"
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