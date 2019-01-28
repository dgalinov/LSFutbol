<?php

namespace LSFutbol\Http\Controllers;

use Illuminate\Http\Request;

use LSFutbol\Partit;

class LSFutbolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($_POST['champions']) {
            $listaCompeticions = Partit::all()->where('competicio', 'Champions')->first();
            return view('Competicions', compact('listaCompeticions'));
        } else if ($_POST['lliga']) {
            $listaCompeticions = Partit::all()->where('competicio', 'Lliga')->first();
            return view('Competicions', compact('listaCompeticions'));
        } else if ($_POST['copadelrei']) {
            $listaCompeticions = Partit::all()->where('competicio', 'Copa del Rei')->first();
            return view('Competicions', compact('listaCompeticions'));
        } else {
            echo "No esta disponible esta opcion";
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
