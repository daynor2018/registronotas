<?php

namespace App\Http\Controllers;

use App\Horario;
use App\Clase;
use App\Dia;
use App\DetalleHorario;
use Illuminate\Http\Request;

class HorarioController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function registrarhorario($codigo)
    {   
        $dias= Dia::all();
        $clase= Clase::find($codigo);
        return view('registrarhorario', compact('dias','clase'));
    }

    public function registraraula($codigo)
    {   
        $horario= Horario::find($codigo);
        return view('registraraula', compact('horario'));
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

    public function guardarhorario(Request $request)
    {
        $horario = new Horario();
        $horario->clase_id = $request->codigo;
        $horario->state = '1';
        $horario->save();

        if ($request->dia1!=0) {
            $diaelegido = $request->dia1;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $horario->id;
            $dethorario->dia_id = $diaelegido;
            $dethorario->save();
        }

        if ($request->dia2!=0) {
            $diaelegido = $request->dia2;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $horario->id;
            $dethorario->dia_id = $diaelegido;
            $dethorario->save();
        }

        if ($request->dia3!=0) {
            $diaelegido = $request->dia3;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $horario->id;
            $dethorario->dia_id = $diaelegido;
            $dethorario->save();    
        }

        if ($request->dia4!=0) {
            $diaelegido = $request->dia4;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $horario->id;
            $dethorario->dia_id = $diaelegido;
            $dethorario->save();
        }

        if ($request->dia5!=0) {
            $diaelegido = $request->dia5;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $horario->id;
            $dethorario->dia_id = $diaelegido;
            $dethorario->save();            
        }

        if ($request->dia6!=0) {
            $diaelegido = $request->dia6;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $horario->id;
            $dethorario->dia_id = $diaelegido;
            $dethorario->save();
        }

        if ($request->dia7!=0) {
            $diaelegido = $request->dia7;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $horario->id;
            $dethorario->dia_id = $diaelegido;
            $dethorario->save();
        }

        return redirect(route('registraraula',$horario->id))->with('successMsg','Solo falta un paso más!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
