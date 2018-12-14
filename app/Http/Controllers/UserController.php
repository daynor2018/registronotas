<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Estudiante;
use App\Carrera;
use Barryvdh\DomPDF\Facade as PDF;
use DB;

class UserController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listadocente()
    {
        $docentes= User::listadocente();
        return view('listadocente',compact('docentes'));
    }

    public function listaestudiante()
    {
        $estudiantes= User::listaestudiante();
        $carreras= Carrera::all();
        return view('listaestudiante',compact('estudiantes','carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrardocente(){
        return view('registrardocente');
    }

    public function registrarestudiante(){
        $carreras= Carrera::all();
        return view('registrarestudiante',compact('carreras'));
    }

    public function reportepdfdocente(){
        $docentes= User::listadocente();
        $pdf = PDF::loadView('pdfdocente', compact('docentes'));
        $pdf->setPaper('letter', 'landscape');
        return $pdf->stream('listado_docente.pdf');
    }

    public function reportesxlsdocente(){
        $docentes = User::listadocente()->toArray();
        return \Excel::create('demo', function($excel) use ($docentes) {
            $excel->sheet('listado_docente', function($sheet) use ($docentes)
            {
                $sheet->fromArray($docentes);
            });
        })->download('xls');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardardocente(Request $request)
    {
        $docente = new User();
        $docente->firstname=$request->firstname;
        $docente->secondname=$request->secondname;
        $docente->lastname=$request->lastname;
        $docente->secondlastname=$request->secondlastname;
        $docente->birthdate=$request->birthdate;
        $docente->email=$request->email;
        $docente->password=bcrypt($request->password);
        $docente->genre=$request->genre;
        $docente->state='2';
        $docente->code=str_random(25);
        $docente->save();
        $docente->roles()->attach(Role::where('name', 'docente')->first());
        return redirect(route('listadocentes'))->with('successMsg','Registro de nuevo docente correctamente agregado!');
    }

    public function guardarestudiante(Request $request)
    {
        $alumno = new User();
        $alumno->firstname=$request->firstname;
        $alumno->secondname=$request->secondname;
        $alumno->lastname=$request->lastname;
        $alumno->secondlastname=$request->secondlastname;
        $alumno->birthdate=$request->birthdate;
        $alumno->email=$request->email;
        $alumno->password=bcrypt($request->password);
        $alumno->genre=$request->genre;
        $alumno->state='1';
        $alumno->code=str_random(25);
        $alumno->save();
        $alumno->roles()->attach(Role::where('name', 'estudiante')->first());

        $estudiante = new Estudiante();
        $estudiante->user_id = $alumno->id;
        $estudiante->carrera_id = $request->career;
        $estudiante->document = $request->document;
        $estudiante->enrollment = $request->enrollment;
        $estudiante->save();

        return redirect(route('listaestudiantes'))->with('successMsg','Registro de nuevo estudiante correctamente agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editardocente(Request $request, $id)
    {
        $docente = User::find($id);
        $docente->firstname=$request->firstname;
        $docente->secondname=$request->secondname;
        $docente->lastname=$request->lastname;
        $docente->secondlastname=$request->secondlastname;
        $docente->birthdate=$request->birthdate;
        $docente->email=$request->email;
        $docente->genre=$request->genre;
        $docente->code=$request->code;
        $docente->save();
        return redirect(route('listadocentes'))->with('successMsg','Los cambios de la edición han sido guardados.');
    }

    public function editarestudiante(Request $request, $id)
    {
        $alumno = User::find($id);
        $alumno->firstname=$request->firstname;
        $alumno->secondname=$request->secondname;
        $alumno->lastname=$request->lastname;
        $alumno->secondlastname=$request->secondlastname;
        $alumno->birthdate=$request->birthdate;
        $alumno->email=$request->email;
        $alumno->genre=$request->genre;
        $alumno->code=$request->code;
        $alumno->save();
               
        $estudiante = Estudiante::find($request->student);
        $estudiante->carrera_id = $request->career;
        $estudiante->document = $request->document;
        $estudiante->enrollment = $request->enrollment;
        $estudiante->save();

        return redirect(route('listaestudiantes'))->with('successMsg','Los cambios de la edición han sido guardados.');
    }

    public function bajadocente($id)
    {
        $docente = User::find($id);
        $docente->state='0';
        $docente->save();
        return redirect(route('listadocentes'))->with('successMsg','El registro ha sido eliminado');;
    }

    public function bajaestudiante($id)
    {
        $docente = User::find($id);
        $docente->state='0';
        $docente->save();
        return redirect(route('listaestudiantes'))->with('successMsg','El registro ha sido eliminado');;
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

