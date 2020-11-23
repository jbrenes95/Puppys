<?php

namespace App\Http\Controllers;

use App\Vaccines;
use Illuminate\Http\Request;

class VaccinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = Vaccines::all();
        return $vaccines;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccines $vaccines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccines $vaccines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccines $vaccines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccines $vaccines)
    {
        //
    }
}
