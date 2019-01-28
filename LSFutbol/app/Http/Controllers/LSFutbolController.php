<?php

namespace LSFutbol\Http\Controllers;

use Illuminate\Http\Request;

use LSFutbol\Partit;
use LSFutbol\Equip;

class LSFutbolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!empty($_GET['champions'])) {
            $listaCompeticions = Partit::all()->where('competicio', 'Champions');
            return view('Champions', compact('listaCompeticions'));
        } else if (!empty($_GET['lliga'])) {
            $listaCompeticions = Partit::all()->where('competicio', 'Lliga');
            return view('Champions', compact('listaCompeticions'));
        } else if (!empty($_GET['copadelrei'])) {
            $listaCompeticions = Partit::all()->where('competicio', 'Copa del Rei');
            return view('Champions', compact('listaCompeticions'));
        } else {
            echo "No esta disponible esta opcion";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tarea = new Equip();
        $tarea -> nom_equip = $request->input('nom_equip');
        $result = $tarea -> save();
        if($result) {
            return view('Champions');
        }
        else {
            return view('Competicions');
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
