@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<!--Need to update <div class progress_block: IF exist then "step#" else "step#" ENDIF-->
<div class="progress_block step4">
    @include('application.progress2')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/nothispaniclatinoasian">
    {{ csrf_field() }}

    <h3 class="text-center">John Smith, are you</h3>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Race_AsianIndian.png"
                                width="190" height="190" alt="Submit"
                                value="Asian Indian" name="Submit">
                            </span><small>Asian<br/>Indian<br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Chinese.png"
                                width="190" height="190" alt="Submit"
                                value="Chinese" name="Submit">
                            </span><small>Chinese<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Filipino.png"
                                width="190" height="190" alt="Submit"
                                value="Filipino" name="Submit">
                            </span><small>Filipino<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Japanese.png"
                                width="190" height="190" alt="Submit"
                                value="Japanese" name="Submit">
                            </span><small>Japanese<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Korean.png"
                                width="190" height="190" alt="Submit"
                                value="Korean" name="Submit">
                            </span><small>Korean<br/><br/></small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/Race_Vietnamese.png"
                                width="190" height="190" alt="Submit"
                                value="Vietnamese" name="Submit">
                            </span><small>Vietnamese<br/><br/></small></a>
                    </li>
                    <li>
                        <a><span><input type="image" src="/images/General_Question.png"
                                width="190" height="190" alt="Submit"
                                value="Other Asian" name="Submit">
                            </span><small>Other Asian<br/><br/></small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')