@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/employmentinfo">
    {{ csrf_field() }}
    <h3 class="text-center">John Smith,<br/><br/>please provide the last two years employment<br/> </h3>
    <p></p>
    <div class="container">
        <div class="container_in">
            <div class="field">
                <input type="text" class="employer" id="employer"
                    required placeholder="Employer or Business Name"/>
                <label for="employer">Employer or Business Name</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="position_or_title" id="postion_or_title"
                    required placeholder="Position or Title"/>
                <label for="postion_or_title">Position or Title</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="phone" id="phone"
                    placeholder="Phone"/>
                <label for="phone">Phone</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="start_date" id="start_date"
                    placeholder="Employment start date"/>
                <label for="start_date">Employment Start Date</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="end_date" id="end_date"
                    placeholder="Employment end date (leave blank if current)"/>
                <label for="end_date">Employment End Date (leave blank if current)</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="address" id="address"
                    placeholder="Address"/>
                <label for="address">Address</label>
            </div>
            <div class="clear"></div>

        </div>
    </div>
    <h3 class="text-center">for this job, were or are you a</h3>

    <p></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span>
                                <input type="image" src="/images/Employment_Type_Company.png"
                                    width="190" height="190" alt="Submit"
                                    value="W2" name="Submit">
                            </span><small>W-2<br/>Employee</small></a>
                    </li>

                    <li>
                        <a><span>
                                <input type="image" src="/images/Employment_Type_SelfEmploy.png"
                                    width="190" height="190" alt="Submit"
                                    value="Self Employ" name="Submit">
                            </span><small>self employ or<br/>business owner</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')