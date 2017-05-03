@extends('indexlayout.header')
@include('common.navbar')
@include('common.statusbar')

<div class="progress_block step2">
    @include('application.progress4')
</div>

<!--Need to update <form>: IF exist then "method=get(edit)" else "method=post" ENDIF-->
<form class="form_block" method="post" action="/application/householdexpense">
    {{ csrf_field() }}

    <div class="container">
        <h3 class="text-center">John Smith</h3>
        <h4 class="text-center">let's determine your household expenses</h4>

        <div class="container_in_form">
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

    <div class="container">
        <h3 class="text-center"><br/>let's add</h3>

        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <a><span><input type="image" src="/images/Add_Finance.png"
                                width="190" height="190" alt="Submit"
                                value="Other Expenses" name="Submit">
                            </span><small>other expenses</small></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</form>

@include('common.footer')

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
    $(document).ready(function () {
        $("#cmn-toggle-1").click(function () {
            if ($(this).is(":checked")) {
                $("#yes").show();
            } else {
                $("#yes").hide();
            }
        });
    });
</script>