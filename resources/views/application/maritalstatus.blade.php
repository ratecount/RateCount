@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step2">
    @include('application.progress2')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/demographic">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/MaritalStatus_Married.png"
                            id="Married" name="Submit" value="Married"
                            width="190" height="190" alt="Submit">
                            </span><small>married</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/MaritalStatus_Separated.png"
                            id="Separated" name="Submit" value="Separated"
                            width="190" height="190" alt="Submit"></span>
                            <small>separated</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/MaritalStatus_Single.png"
                            id="Single" name="Submit" value="Single"
                            width="190" height="190" alt="Submit">
                            </span><small>unmarried</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>

@include('common.footer')