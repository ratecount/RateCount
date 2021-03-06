@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step5">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/militarystatus">
    {{ csrf_field() }}
    <h3 class="text-center">Did you (or your deceased spouse) ever serve,
        <br/>or are you currently serving, in the United States Armed Forces?</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                            <input type="image" src="/images/Employment_Military_Yes.png"
                                width="190" height="190" alt="Submit"
                                value="Serve" name="Submit">
                            </span><small>serve</small></a>
                    </li>

                    <li>
                        <a><span>
                            <input type="image" src="/images/Employment_Military_No.png"
                                width="190" height="190" alt="Submit"
                                value="Did Not Serve" name="Submit">
                            </span><small>did not serve</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')