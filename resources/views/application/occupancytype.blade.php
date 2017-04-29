@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')


<div class="progress_block step3">
    @include('application.progress')
</div>

<form class="form_block" method="post" action="/application/occupancytype">
    {{ csrf_field() }}

    <div class="container">
        <h3 class="text-center">occupancy type</h3>
        <p></p>
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/OccupancyType_Primary.png"
                            width="190" height="190" alt="Submit"
                            value="Primary" name="Submit">
                            </span><small>primary</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/OccupancyType_Secondary.png"
                            width="190" height="190" alt="Submit"
                            value="Secondary" name="Submit">
                            </span><small>secondary</small></a>
                    </li>

                    <li>
                        <a><span><input type="image" src="/images/OccupancyType_Investment.png"
                            width="190" height="190" alt="Submit"
                            value="Investment" name="Submit">
                            </span><small>investment</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="push"></div>
    </div>
</form>

@include('common.footer')

