@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step4">
    @include('application.progress2')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/hispaniclatino">
    {{ csrf_field() }}

    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Race_Mexican.png"
                                width="190" height="190" alt="Submit"
                                value="Mexican" name="Submit">
                            </span><small>mexican</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_PuertoRican.png"
                                width="190" height="190" alt="Submit"
                                value="Puerto Rican" name="Submit">
                            </span><small>puerto rican</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Cuban.png"
                                width="190" height="190" alt="Submit"
                                value="Cuban" name="Submit">
                            </span><small>cuban</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Ethnicity_HispanicLatino.png"
                                width="190" height="190" alt="Submit"
                                value="Other Hispanic or Latino">
                            </span><small>other</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>

@include('common.footer')