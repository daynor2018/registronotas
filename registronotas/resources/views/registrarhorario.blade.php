@extends('layouts.plataformadmin')

@section('contenido')
	<div class="container rounded fondoformulario">
		<br>
		<div class="row">
			<div class="col-lg-12 m-auto">
				<h3><b>Asignación de Horario</b></h3>
			</div>
		</div>
		<div class="row">
			<h4 class="col-lg-12 text-center">Dias disponibles para la materia</h4>
		</div>

	    <div class="row">
	    	<div class="col-lg-8 bg-light m-auto">
	    	<form method="POST" action="{{route('guardarhorarios')}}">
	    		@csrf
	    		<br>
	    		<div class="form-group">
	    			<h1 class="lead">Clase: {{$clase->matter}}</h1>
	    			<br>
	    			<div class="row">
	    		@foreach($dias as $d)
	    				<div class="form-group col-lg-3">
		    				<div class="custom-control custom-checkbox">
	  						<input type="checkbox" class="custom-control-input" id="Check{{$d->id}}" name="dia{{$d->id}}" value="{{$d->id}}">
	  						<br>
	  						<label class="custom-control-label" for="Check{{$d->id}}">{{strtoupper($d->name)}}</label>
							</div>
						</div>
	    				<div class="form-group col-lg-3">
      						<label for="horainicio{{$d->id}}">Hora de inicio</label>
      						<input type="time" name="horainicio{{$d->id}}" id="horainicio{{$d->id}}">
    					</div>
    					<div class="form-group col-lg-3">
      						<label for="horafinal{{$d->id}}">Hora de finalización</label>
      						<input type="time" name="horafinal{{$d->id}}" id="horafinal{{$d->id}}">
    					</div>
    					<div class="form-group col-lg-3">
    						<label for="aula{{$d->id}}">Aula</label>
    						<input type="text" name="aula{{$d->id}}" id="aula{{$d->id}}">
    					</div>
					<br>			
	    		@endforeach()
	    		<input type="hidden" name="codhorario" value="{{$codigo}}" id="{{$codigo}}">
	    		</div>
	    		</div>
			  	<div class="col-lg-12 text-center">			  	
			  	<button type="submit" class="btn btn-primary">Continuar con el registro</button>
			  	</div>
			</form>
			<br>
			</div>
	    </div>
	    <br>
	</div>
@endsection

