@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step4">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/nothispaniclatino">
    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Race_White.png"
                            width="190" height="190" alt="Submit"></span>
                            <small>white<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Black.png"
                            width="190" height="190" alt="Submit"></span>
                            <small>black or<br/>african american</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Race_Asian.png"
                                        width="190" height="190" alt="Submit"
                                        formaction="/application/addcoborrower">
                            </span><small>asia<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_NativeHawaiian.png"
                            width="190" height="190" alt="Submit"></span>
                            <small>native hawaiian or<br/>other pacific islander</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_AmericanIndian.png"
                            width="190" height="190" alt="Submit"></span>
                            <small>american indian or<br/>alaska native</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/General_Privacy.png"
                            width="190" height="190" alt="Submit"></span>
                            <small>do not wish<br/>to provide</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')