@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step5">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/addproperty">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                            <input type="image" src="/images/Add_Coborrower.png"
                                   width="190" height="190" alt="Submit">
                            </span><small>add coborrower<br/>employment</small></a>
                    </li>

                    <li>
                        <a><span>
                            <input type="image" src="/images/single_house.png"
                                   width="190" height="190" alt="Submit">
                            </span><small>add<br/>property</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')