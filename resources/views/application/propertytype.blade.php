@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')


<div class="progress_block step2">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/occupancytype">
    {{ csrf_field() }}

    <div class="container">
        <h3 class="text-center">property type</h3>
        <p></p>
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/PropertyType_SingleFamilyHouse.png"
                            width="190" height="190" alt="Submit"
                            value="Single Family Home" name="Submit"></span>
                            <small>single family home</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/PropertyType_Condo.png"
                            width="190" height="190" alt="Submit"
                            value="Condo" name="Submit"></span>
                            <small>condo</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/PropertyType_PUD.png"
                            width="190" height="190" alt="Submit"
                            value="PUD" name="Submit">
                            </span><small>pud</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/PropertyType_Duplex.png"
                            width="190" height="190" alt="Submit"
                            value="Duplex" name="Submit">
                            </span><small>duplex</small></a>
                    </li>
                    <li>
                        <a><span><input type="image" src="/images/PropertyType_Triplex.png"
                            width="190" height="190" alt="Submit"
                            value="Triplex" name="Submit">
                            </span><small>triplex</small></a>
                    </li>
                    <li>
                        <a><span><input type="image" src="/images/PropertyType_Quadplex.png"
                            width="190" height="190" alt="Submit"
                            value="Quadplex" name="Submit">
                            </span><small>quadplex</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>

@include('common.footer')
