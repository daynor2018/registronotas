<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if (!empty(auth()->user())) {
		if (auth()->user()->authorizeRoles('administrador','docente','estudiante')) {
            if (auth()->user()->hasRole('administrador')) {
                return view('homeadmin');    
            }else{
                if (auth()->user()->hasRole('docente')) {
                    return view('homedoc');
                }else{
                    if (auth()->user()->hasRole('estudiante')) {
                        return view('homeest');
                    }else{
                        return view('error');
                    }
                }
            }
        }
	}else{
    	return view('welcomeplataform');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/lista/docente','UserController@listadocente')->name('listadocentes')->middleware('auth', 'role:administrador');
Route::get('/registrar/docente','UserController@registrardocente')->name('registrardocente')->middleware('auth', 'role:administrador');
Route::post('/docente/registrado','UserController@guardardocente')->name('guardardocente')->middleware('auth', 'role:administrador');
Route::post('/actualizar/docente/{id}','UserController@editardocente')->name('actualizardocente')->middleware('auth', 'role:administrador');
Route::get('/eliminar/docente/{id}','UserController@bajadocente')->name('eliminardocente')->middleware('auth', 'role:administrador');
Route::get('/reportepdf/docentes','UserController@reportepdfdocente')->name('pdfdocente')->middleware('auth', 'role:administrador');
Route::get('/reportexls/docentes','UserController@reportesxlsdocente')->name('xlsdocente')->middleware('auth', 'role:administrador');

Route::get('/lista/estudiante','UserController@listaestudiante')->name('listaestudiantes')->middleware('auth', 'role:administrador');
Route::get('/registrar/estudiante','UserController@registrarestudiante')->name('registrarestudiante')->middleware('auth', 'role:administrador');
Route::post('/estudiante/registrado','UserController@guardarestudiante')->name('guardarestudiante')->middleware('auth', 'role:administrador');
Route::post('/actualizar/estudiante/{id}','UserController@editarestudiante')->name('actualizarestudiante')->middleware('auth', 'role:administrador');
Route::get('/eliminar/estudiante/{id}','UserController@bajaestudiante')->name('eliminarestudiante')->middleware('auth', 'role:administrador');

Route::get('/lista/clase','ClaseController@listaclase')->name('listaclases')->middleware('auth', 'role:administrador');
Route::post('/clase/registrada','ClaseController@guardarclase')->name('registrarclase')->middleware('auth', 'role:administrador');
Route::post('/actualizar/clase/{id}','ClaseController@editarclase')->name('actualizarclase')->middleware('auth', 'role:administrador');
Route::get('/eliminar/clase/{id}','ClaseController@bajaclase')->name('eliminarclase')->middleware('auth', 'role:administrador');

Route::get('/registrar/horario/{id}','HorarioController@registrarhorario')->name('registrarhorario')->middleware('auth', 'role:administrador');
Route::post('/horario/registrado','HorarioController@guardarhorario')->name('guardarhorarios')->middleware('auth', 'role:administrador');