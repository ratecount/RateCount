@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step4">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="#">
    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Race_Mexican.png"
                            width="190" height="190" alt="Submit" value="mexican"></span>
                            <small>mexican</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_PuertoRican.png"
                            width="190" height="190" alt="Submit" value="puertorican"></span>
                            <small>puerto rican</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Cuban.png"
                            width="190" height="190" alt="Submit" value="cuban"></span>
                            <small>cuban</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Ethnicity_HispanicLatino.png"
                            width="190" height="190" alt="Submit" value="otherhispaniclatino"></span>
                            <small>other</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')