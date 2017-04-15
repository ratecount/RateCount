<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redirect;
use App;

class EthnicitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if($_POST['hispaniclatino']) {
            return redirect('/application/hispaniclatino');
        }
        elseif($_POST['nothispaniclatino']) {
            return Redirect('/application/nothispaniclatino');
        }
        elseif($_POST['privacy']) {
            return Redirect('/application/demographic');
        }*/

        dd(request()->all());
        //dd(request('Submit'));
        //$post = Request::get('post_id');
        //$post = new User;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (request('Submit') == 'Hispanic or Latino') {
            return redirect('/application/hispaniclatino');
        }
        elseif (request('Submit') == 'Not Hispanic or Latino') {
            return view('application.nothispaniclatino');
        }
        else {
            return view('application.addcoborrower');
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
