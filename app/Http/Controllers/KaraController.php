<?php

namespace App\Http\Controllers;

use App\Kara;
use Illuminate\Http\Request;

class KaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kara');
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
     * @param  \App\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function show(Kara $kara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function edit(Kara $kara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kara $kara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kara  $kara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kara $kara)
    {
        //
    }
}
