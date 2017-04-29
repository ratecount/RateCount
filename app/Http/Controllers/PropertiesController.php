<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class PropertiesController extends Controller
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
            case "Household Expenses":
                return redirect('/application/householdexpense');
                break;
            case "Other Expenses":
                return redirect('/application/otherexpense');
                break;
            case "Revolving":
                return redirect('/application/otherexpense');
                break;
            case "Installment":
                return redirect('application/otherexpense');
                break;
            case "Alimony":
                return redirect('application/otherexpense');
                break;
            case "Child Support":
                return redirect('/application/otherexpense');
                break;
            case "Separate Maintenance":
                return redirect('/application/otherexpense');
                break;
            case "Job Related Expenses":
                return redirect('application/otherexpense');
                break;
            case "Other":
                return redirect('application/otherexpense');
                break;
            case "Done":
                return redirect('application/financedeclaration');
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
