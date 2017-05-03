@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step5">
    @include('application.progress3')
</div>

<form class="form_block" method="post" action="/application/addproperty">
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
                                value="Add Coborrower" name="Submit">
                            </span><small>coborrower<br/>employment</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/PropertyType_SingleFamilyHouse.png"
                                width="190" height="190" alt="Submit"
                                value="Add Property" name="Submit">
                            </span><small>property<br/>&nbsp</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>
<div class="push"></div>

@include('common.footer')