<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class EmploymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        switch (request('Submit')) {
            case "Serve":
                return redirect('/application/militarystatusyes');
                break;
            case "Did Not Serve":
                return redirect('/application/employmentinfo');
                break;
            case "On Active Duty":
                return redirect('/application/employmentinfo');
                break;
            case "Retired, Discharge or Separated":
                return redirect('/application/employmentinfo');
                break;
            case "Surviving Spouse":
                return redirect('/application/employmentinfo');
                break;
            case "Employ":
                return redirect('/application/employmentinfo');
                break;
            case "Unemployed":
                return redirect('/application/employmentinfo');
                break;
            case "Retired":
                return redirect('/application/otherincomesource');
                break;
            case "W-2":
                return redirect('/application/employmentw2income');
                break;
            case "Self Employ":
                return redirect('/application/employmentselfemployincome');
                break;
            case "Does Not Apply":
                return redirect('/application/addproperty');
                break;
            case "Alimony":
                return redirect('/application/otherincomesource');
                break;
            case "Child Support":
                return redirect('/application/otherincomesource');
                break;
            case "Disability":
                return redirect('/application/otherincomesource');
                break;
            case "Foster Care":
                return redirect('/application/otherincomesource');
                break;
            case "Retirement":
                return redirect('/application/otherincomesource');
                break;
            case "Royalty Payments":
                return redirect('/application/otherincomesource');
                break;
            case "Separate Maintenance":
                return redirect('/application/otherincomesource');
                break;
            case "Social Security":
                return redirect('/application/otherincomesource');
                break;
            case "Unemployment":
                return redirect('/application/otherincomesource');
                break;
            case "VA Compensation":
                return redirect('/application/otherincomesource');
                break;
            case "See More Other Income":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Auto Allowance":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Broader Income":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Capital Gains":
                return redirect('/application/otherincomesourcep2');
                break;
            case "House or Parsonage":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Interest and Dividends":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Mortgage Credit Certificate":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Mortgage Differential Payments":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Note Receivable":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Public Assistance":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Trust":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Other Income Source":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Done":
                return redirect('/application/addproperty');
                break;
            case "Add Employment":
                return redirect('/application/employmentinfo');
                break;
            case "Other Income":
                return redirect('/application/otherincomesource');
                break;
            case "Does Not Apply":
                return redirect('/application/addproperty');
                break;
            case "See More Other Income":
                return redirect('/application/otherincomesourcep2');
                break;
            case "Done":
                return redirect('/application/addproperty');
                break;
            case "Add Coborrower":
                return redirect('/application/militarystatus');
                break;
            case "Add Property":
                return redirect('/application/address');
                break;
            default:
                return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
