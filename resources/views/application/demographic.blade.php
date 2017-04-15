@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step4">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/demographic">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                                <input type="image" src="/images/Ethnicity_HispanicLatino.png"
                                    width="190" height="190" alt="Submit"
                                    value="Hispanic or Latino" name="Submit">
                            </span><small>hispanic<br/>or latino <br/> </small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Ethnicity_NotHispanicLatino.png"
                                    width="190" height="190" alt="Submit"
                                    value="Not Hispanic or Latino" name="Submit">
                            </span><small>not hispanic<br/>or latino</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/General_Privacy.png"
                                    width="190" height="190" alt="Submit"
                                    value="Do not wish to provide" name="Submit">
                            </span><small>do not wish<br/>to provide<br/></small></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</form>


@include('common.footer')