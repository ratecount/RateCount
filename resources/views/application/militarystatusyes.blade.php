@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step5">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/militarystatus">
    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                            <input type="image" src="/images/Employment_Military_Yes.png"
                                   width="190" height="190" alt="Submit">
                            </span><small>on <br/>active duty</small></a>
                    </li>

                    <li>
                        <a><span>
                            <input type="image" src="/images/Employment_Military_RDS.png"
                                   width="190" height="190" alt="Submit">
                            </span><small>retired, discharge <br/>or separated</small></a>
                    </li>

                    <li>
                        <a><span>
                            <input type="image" src="/images/Employment_Military_SurvivingSpouse.png"
                                   width="190" height="190" alt="Submit">
                            </span><small>surviving <br/>spouse</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')