@extends('layouts.estudiante')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/estudiante.css')}}">
	<div class="container bg-primary">
		<br>
		<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Bienvenido Estudiante!</h1>
     </div>
	</section>

	<div class="container mb-4">
	    <div class="row">
	        <div class="col-12">
	            <div class="table-responsive">
	                <table class="table table-striped">
	                    <thead>
	                        <tr>
	                            <th scope="col"> </th>
	                            <th scope="col">Materia</th>
	                            <th scope="col">Disponibilidad</th>
	                            <th scope="col" class="text-center">Ultimo puntaje</th>
	                            <th scope="col" class="text-right">Puntuación total</th>
	                            <th> </th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
	                            <td>Ingenieria de sistemas</td>
	                            <td>En curso</td>
	                            <td class="text-right">40/50</td>
	                            <td class="text-right">30%</td>
	                            <td class="text-right"><button class="btn btn-sm btn-success">ver registros </button> </td>
	                        </tr>
	                        <tr>
	                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
	                            <td>Ingenieria de Software</td>
	                            <td>En curso</td>
	                            <td class="text-right">40/50</td>
	                            <td class="text-right">80%</td>
	                            <td class="text-right"><button class="btn btn-sm btn-success">ver registros </button> </td>
	                        </tr>
	                        <tr>
	                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
	                            <td>Redes II</td>
	                            <td>En curso</td>
	                            <td class="text-right">40/50</td>
	                            <td class="text-right">75%</td>
	                            <td class="text-right"><button class="btn btn-sm btn-success">ver registros </button> </td>
	                        </tr>
	                        <tr>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td>Sub-Total Semestre</td>
	                            <td class="text-right">85%</td>
	                        </tr>
	                        <tr>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td>Mejor nota</td>
	                            <td class="text-right">40/50</td>
	                        </tr>
	                        <tr>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td><strong>Materia destacada</strong></td>
	                            <td class="text-right"><strong>Ingenieria de sistemas</strong></td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	        <div class="col mb-2">
	            <div class="rounded row">
	            	<div class="input-group">
	                <div class="col-sm-12  col-md-6">
	                    <button class="btn btn-block btn-light bg-warning">Ver fecha de trabajos</button>
	                </div>
	                <div class="col-sm-12 col-md-6 text-right">
	                    <button class="btn btn-block btn-light bg-warning">Ver retroalimentaciones nuevas</button>
	                </div>
	                </div>
	            </div>
	            <br>
	        </div>
	    </div>
	</div>
	</div>
@endsection