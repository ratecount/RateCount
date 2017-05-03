@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step5">
    @include('application.progress2')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/addcoborrower">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith</h3>
    <h4 class="text-center">let's add</h4>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Add_Coborrower.png"
                                width="190" height="190" alt="Submit"
                                value="Add CoBorrower" name="Submit">
                            </span><small>coborrower</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Add_Employment.png"
                                width="190" height="190" alt="Submit"
                                value="Add Employment" name="Submit">
                            </span><small>employment</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>
<div class="push"></div>
@include('common.footer')