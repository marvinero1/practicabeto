<?php

namespace App\Http\Controllers;

use App\pruebas;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pruebas.index', compact('pruebas'));
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
     * @param  \App\pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function show(pruebas $pruebas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function edit(pruebas $pruebas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pruebas $pruebas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function destroy(pruebas $pruebas)
    {
        //
    }
}
