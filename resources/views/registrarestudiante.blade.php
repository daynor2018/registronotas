@extends('layouts.plataformadmin')

@section('contenido')
	<div class="container rounded fondoformulario">
		<br>
		<div class="row">
			<div class="col-lg-12 m-auto">
				<h3><b>Nuevo Estudiante</b></h3>
			</div>
		</div>
		<div class="row">
			<h4 class="col-lg-12 text-center">Datos Personales</h4>
		</div>

	    <div class="row">
	    	<div class="col-lg-8 bg-light m-auto">
	    	<form method="POST" action="{{route('guardarestudiante')}}">
	    		@csrf
	    		<br>
	    		<div class="form-group">
			    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Ingrese su nombre principal">
			  	</div>
				<div class="form-group">
			    <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Ingrese sus nombres secundarios">
			    <small id="secondnameHelp" class="form-text text-muted">* En caso de no contar con uno; puede dejar vacio el campo</small>
			  	</div>
			  	<div class="form-group">
			    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellido paterno">
			  	</div>
			  	<div class="form-group">
			    <input type="text" class="form-control" id="secondlastname" name="secondlastname" placeholder="Apellido materno">
			  	</div>
			  	<div class="form-group">
			    <input type="date" class="form-control" id="birthdate" name="birthdate">
			  	</div>
			  	<div class="form-group">
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email del estudiante">
			  	</div>
			  	
			  	<div class="form-group">                            
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña">
	                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
    	            <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif            
                </div>
                <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">
                </div>		    

			  	<div class="form-group text-center">
			    	<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="genero1" name="genre" class="custom-control-input" value="1">
					  <label class="custom-control-label" for="genero1">Masculino</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="genero2" name="genre" class="custom-control-input" value="2">
					  <label class="custom-control-label" for="genero2">Femenino</label>
					</div>
			  	</div>

			  	<div class="form-group">
                    <select class="form-control" id="career" name="career">
                    	@foreach($carreras as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    	@endforeach
                    </select>
                </div>

			  	<div class="form-group">
                <input id="document" type="text" class="form-control" name="document" placeholder="Cedula de Identidad">
                </div>		    

                <div class="form-group">
                <input id="enrollment" type="text" class="form-control" name="enrollment" placeholder="Matricula">
                </div>		    

			  	<div class="col-lg-12 text-center">
			  	<button type="submit" class="btn btn-primary">Registrar</button>
			  	</div>
			</form>
			<br>
			</div>
	    </div>
	    <br>
	</div>
@endsection

