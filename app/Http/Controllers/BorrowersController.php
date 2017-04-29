<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class BorrowersController extends Controller
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
            case "Male":
                return redirect('/application/maritalstatus');
                break;
            case "Female":
                return redirect('/application/maritalstatus');
                break;
            case "Hispanic or Latino":
                return redirect('/application/hispaniclatino');
                break;
            case "Not Hispanic or Latino":
                return redirect('/application/nothispaniclatino');
                break;
            case "Mexican":
                return redirect('/application/addcoborrower');
                break;
            case "Puerto Rican":
                return redirect('/application/addcoborrower');
                break;
            case "Cuban":
                return redirect('/application/addcoborrower');
                break;
            case "Other Hispanic or Latino":
                return redirect('/application/addcoborrower');
                break;
            case "White":
                return redirect('/application/addcoborrower');
                break;
            case "Black or African American":
                return redirect('/application/addcoborrower');
                break;
            case "Asia":
                return redirect('/application/nothispaniclatinoasian');
                break;
            case "Native Hawaiian or Other Pacific Islander":
                return redirect('/application/addcoborrower');
                break;
            case "American Indian or Alaska Native":
                return redirect('/application/addcoborrower');
                break;
            case "Do No Wish to Provide":
                return redirect('/application/addcoborrower');
                break;
            case "Add CoBorrower":
                return redirect('/application/borrower');
                break;
            case "Add Employment":
                return redirect('/application/militarystatus');
                break;
            default:
                return redirect('/application/addcoborrower');
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
