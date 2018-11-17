<?php

namespace App\Http\Controllers;

use App\Clase;
use App\User;
use Illuminate\Http\Request;

class ClaseController extends Controller
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

    public function listaclase()
    {
        $clases = Clase::all();
        $docentes = User::listadocente();
        return view('listaclase', compact('clases','docentes'));
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

    public function guardarclase(Request $request)
    {
        $clase = new Clase();
        $clase->user_id=$request->docente;
        $clase->semester=$request->semester;
        $clase->matter=$request->matter;
        $clase->curse=$request->curse;
        $clase->state='3';
        $clase->save();
        return redirect(route('listaclases'))->with('successMsg','Nueva clase agregada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show($clase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit($clase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clase)
    {
        
    }

    public function editarclase(Request $request, $clase)
    {
        $clase = Clase::find($clase);
        $clase->user_id=$request->docente;
        $clase->semester=$request->semester;
        $clase->matter=$request->matter;
        $clase->curse=$request->curse;
        $clase->save();
        return redirect(route('listaclases'))->with('successMsg','La edición se ha realizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clase $clase)
    {
        //
    }

    public function bajaclase($clase)
    {
        $clase = Clase::find($clase);
        $clase->state='0';
        $clase->save();
        return redirect(route('listaclases'))->with('successMsg','La clase ha sido eliminada!');
    }
}
