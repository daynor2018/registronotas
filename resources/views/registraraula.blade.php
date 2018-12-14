@extends('layouts.plataformadmin')

@section('contenido')
	<div class="container rounded fondoformulario">
		<br>
		<div class="row">
			<div class="col-lg-12 m-auto">
				<h3><b>Asignación de Aulas</b></h3>
			</div>
		</div>
		<div class="row">
			<h4 class="col-lg-12 text-center">Seleccione el horario para cada día</h4>
		</div>

	    <div class="row">
	    	<div class="col-lg-8 bg-light m-auto">
	    	<form method="POST" action="{{route('guardarhorarios')}}">
	    		@csrf
	    		<br>
	    		<div class="form-group">
	    			<h1 class="lead">Clase: {{$horario->id}}</h1>
	    			<div class="row">

	    			</div>
	    		</div>
			  	<div class="col-lg-12 text-center">
			  	<button type="submit" class="btn btn-primary">Terminar con el registro</button>
			  	</div>
			</form>
			<br>
			</div>
	    </div>
	    <br>
	</div>
@endsection

