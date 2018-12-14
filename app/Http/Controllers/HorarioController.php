<?php

namespace App\Http\Controllers;

use App\Horario;
use App\Clase;
use App\Dia;
use App\DetalleHorario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $flag= DB::table('clases')
            ->join('horarios', 'clases.id', '=', 'horarios.clase_id')
            ->select('*')
            ->where('horarios.clase_id', '=', $codigo)->get();
        if (count($flag)>0) {
            // return view('registrarhorario', compact('dias','clase'));
            // echo "hay registro";
            $horario = new Horario();
            $horario->clase_id = $codigo;
            $horario->state = '1';
            $horario->save();
            return view('registrarhorario', compact('dias','clase','codigo'));
        }else{
            $horario = new Horario();
            $horario->clase_id = $codigo;
            $horario->state = '1';
            $horario->save();
            return view('registrarhorario', compact('dias','clase','codigo'));
        }
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
        $estado='3';
        if ($request->dia1!=0) {
            $diaelegido = $request->dia1;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $request->codhorario;
            $dethorario->dia_id = $diaelegido;
            $dethorario->aula_id = $request->aula1;
            $dethorario->starttime = $request->horainicio1;
            $dethorario->endtime = $request->horafinal1;
            $dethorario->save();
            $estado='2';
        }

        if ($request->dia2!=0) {
            $diaelegido = $request->dia2;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $request->codhorario;
            $dethorario->dia_id = $diaelegido;
            $dethorario->aula_id = $request->aula2;
            $dethorario->starttime = $request->horainicio2;
            $dethorario->endtime = $request->horafinal2;
            $dethorario->save();
            $estado='2';
        }

        if ($request->dia3!=0) {
            $diaelegido = $request->dia3;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $request->codhorario;
            $dethorario->dia_id = $diaelegido;
            $dethorario->aula_id = $request->aula3;
            $dethorario->starttime = $request->horainicio3;
            $dethorario->endtime = $request->horafinal3;
            $dethorario->save();    
            $estado='2';
        }

        if ($request->dia4!=0) {
            $diaelegido = $request->dia4;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $request->codhorario;
            $dethorario->dia_id = $diaelegido;
            $dethorario->aula_id = $request->aula4;
            $dethorario->starttime = $request->horainicio4;
            $dethorario->endtime = $request->horafinal4;
            $dethorario->save();
            $estado='2';
        }

        if ($request->dia5!=0) {
            $diaelegido = $request->dia5;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $request->codhorario;
            $dethorario->dia_id = $diaelegido;
            $dethorario->aula_id = $request->aula5;
            $dethorario->starttime = $request->horainicio5;
            $dethorario->endtime = $request->horafinal5;
            $dethorario->save();            
            $estado='2';
        }

        if ($request->dia6!=0) {
            $diaelegido = $request->dia6;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $request->codhorario;
            $dethorario->dia_id = $diaelegido;
            $dethorario->aula_id = $request->aula6;
            $dethorario->starttime = $request->horainicio6;
            $dethorario->endtime = $request->horafinal6;
            $dethorario->save();
            $estado='2';
        }

        if ($request->dia7!=0) {
            $diaelegido = $request->dia7;
            $dethorario = new DetalleHorario();
            $dethorario->horario_id = $request->codhorario;
            $dethorario->dia_id = $diaelegido;
            $dethorario->aula_id = $request->aula7;
            $dethorario->starttime = $request->horainicio7;
            $dethorario->endtime = $request->horafinal7;
            $dethorario->save();
            $estado='2';
        }

        $clase= Clase::find($request->codhorario);
        $clase->state= $estado;
        $clase->save();

        return redirect(route('listaclases'))->with('successMsg','Hecho!');
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
