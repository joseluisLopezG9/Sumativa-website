<?php

namespace App\Http\Controllers;

use App\Models\Identidad;
use Illuminate\Http\Request;

class IdentidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('identidad/quienessomos');
    }


    public function show()
    {
        return view('identidad/vision');
    }

    public function contactanos()
    {
        return view('identidad/contactanos');
    }

    public function ayuda()
    {
        return view('identidad/ayuda');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('identidad/mision');
        
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
     * @param  \App\Models\Identidad  $identidad
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Identidad  $identidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Identidad $identidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Identidad  $identidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Identidad $identidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Identidad  $identidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Identidad $identidad)
    {
        //
    }
}
