<?php

namespace App\Http\Controllers;

use App\Auteur;
use Illuminate\Http\Request;

class AuteursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct(){

        $this->middleware('auth');
    }
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
     * @param  \App\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function show(Auteur $auteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Auteur $auteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auteur $auteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auteur $auteur)
    {
        //
    }
}
