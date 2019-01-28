<?php

namespace LSFutbol\Http\Controllers;

use Illuminate\Http\Request;

use LSFutbol\Partit;
use LSFutbol\Equip;
use LSFutbol\Jugador;

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
        $tarea = new Partit();
        $tarea -> temporada = $request->input('temporada');
        $tarea -> competicio = $request->input('competicio');
        $tarea -> golslocal = $request->input('golslocal');
        $tarea -> golsvisitant = $request->input('golsvisitant');

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
        $id = $request->input('IDpartit');
        $tarea = Partit::find($id);
        $tarea->titulo = $request->input('competicio');
        $result = $tarea->save();
        if($result) {
            return view('Competicions');
        } else {
            return view('compe.update');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listaCompeticions = Partit::all();
        return view('compe.update', compact('listaCompeticions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('compe.update');
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
        $result = Partit::where('IDpartit', $id)->delete();
        if ($result) {
            return view('Competicions', ['IDpartit' => $id]);  //esta variable id la pasamos para pintar en la página de confirmación el id que se ha borrado.
        } else {
            return view('compe.delete');
        }
    }
}
