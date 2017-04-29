@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step1">
    @include('application.progress3')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/militarystatusyes">
    {{ csrf_field() }}

    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Employment_Military_Yes.png"
                            width="190" height="190" alt="Submit"
                            value="On Active Duty" name="Submit">
                            </span><small>on <br/>active duty</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Employment_Military_RDS.png"
                            width="190" height="190" alt="Submit"
                            value="Retired, Discharge or Separated" name="Submit">
                            </span><small>retired, discharge <br/>or separated</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Employment_Military_SurvivingSpouse.png"
                            width="190" height="190" alt="Submit"
                            value="Surviving Spouse" name="Submit">
                            </span><small>surviving <br/>spouse</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')