@extends('indexlayout.header')
@include('indexlayout.indexnavbar')
@include('common.statusbar')

<script type="text/javascript">
    $(document).ready(function () {
        $('#checkbox1').change(function () {
            if (!this.checked)
//  ^
                $('#autoUpdate').fadeIn('slow');
            else
                $('#autoUpdate').fadeOut('slow');
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#cmn-toggle-1").click(function () {
            if ($(this).is(":checked")) {
                $("#yes").show();
            } else {
                $("#yes").hide();
            }
        });
    });
</script>

<div class="progress_block step1">
    @include('application.progress')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="get" action="/application/maritalstatus">
    <h3 class="text-center">Hi!</h3>
    Add another director <input type="checkbox" id="checkbox1" style="color: black"/>
    <div id="autoUpdate" class="autoUpdate">
        content
    </div>

    <div class="container">
        <div class="container_in">
            <div class="field">
                 <input type="text" class="creditor" id="creditor"
                        placeholder="Enter Creditor (Lender) Name"/>
                <label for="creditor">Enter Creditor (Lender) Name</label>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="mortgage_payment" id="mortgage_payment" placeholder="Monthly Mortgage Payment"/>
                <label for="mortgage_payment">Monthly Mortgage Payment</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="taxes" id="taxes" placeholder="Taxes"/>
                <label for="taxes">Monthly Mortgage Payment</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="mortgage_insurance" id="mortgage_insurance" placeholder="Taxes"/>
                <label for="mortgage_insurance">Mortgage Insurance</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="hoa" id="hoa" placeholder="Home Owner Assoication (HOA)"/>
                <label for="hoa">Home Owner Assoication (HOA)</label>
            </div>
            <div class="clear"></div>

            <div class="field">
                <input type="text" class="utilities" id="utilities" placeholder="Utilities (Gas, Electric, Water,etc.)"/>
                <label for="utilities">Utilities (Gas, Electric, Water,etc.)</label>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <h3 class="text-center"><br/>next<br/> </h3>

    <p></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Add_Finance.png"
                                        width="190" height="190" alt="Submit"></span>
                            <small>add other<br/>expenses</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>





@include('common.footer')