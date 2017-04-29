<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiresController extends Controller
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
            case "Zip Code":
                return redirect("/application/estimatecreditscore");
                break;
            case "Excellent":
                return redirect("/application/propertytype");
                break;
            case "Good":
                return redirect("/application/propertytype");
                break;
            case "Average":
                return redirect("/application/propertytype");
                break;
            case "Below Average":
                return redirect("/application/propertytype");
                break;
            case "Single Family Home":
                return redirect("/application/occupancytype");
                break;
            case "Condo":
                return redirect("/application/occupancytype");
                break;
            case "PUD":
                return redirect("/application/occupancytype");
                break;
            case "Duplex":
                return redirect("/application/occupancytype");
                break;
            case "Triplex":
                return redirect("/application/occupancytype");
                break;
            case "Quadplex":
                return redirect("/application/occupancytype");
                break;
            case "Primary":
                return redirect("/application/loanamount");
                break;
            case "Secondary":
                return redirect("/application/loanamount");
                break;
            case "Investment":
                return redirect("/application/loanamount");
                break;
            case "Purchase":
                return redirect("/application/ratesheet");
                break;
            case "Refinance":
                return redirect("/application/ratesheet");
                break;
            case "Create New Account":
                return redirect("/createaccount");
                break;
            case "Sign In":
                return redirect("/login");
                break;
            default:
                return redirect("/");
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
