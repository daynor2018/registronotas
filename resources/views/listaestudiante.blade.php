@extends('layouts.plataformadmin')
@section('contenido')
	@if(count($estudiantes)==0)
		<div class="container-fluid">
		    <div class="jumbotron fondojumbo">
		        <h1 class="text-white">La lista de estudiantes esta vacia!</h1>
		        <p class="lead text-white">No se cuenta con ningún registro de estudiantes.</p>
			<a class="btn btn-light bg-warning" href="{{route('registrarestudiante')}}">Agregar estudiante</a>
		    </div>
		</div>
	@else
		<div class="container-fluid">
			@if(session('successMsg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session('successMsg') }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        	@endif
	    <div class="jumbotron fondojumbo">
	    	<h1 class="text-white">Lista de estudiantes</h1>
	    	<div class="btn-group">
	    	<a class="btn btn-light bg-warning" href="{{route('registrarestudiante')}}">Nuevo estudiante</a>
	    	<a class="btn btn-light bg-warning" href="#">Exportar</a>
	    	</div>
	    	<br>
	    	<br>
	        <table class="table table-striped table-dark">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">Nombres</th>
			      <th scope="col">Apellidos</th>
			      <th scope="col">Nacimiento</th>
			      <th scope="col">Email</th>
			      <th scope="col">Genero</th>
			      <th scope="col">Estado</th>
			      <th scope="col">Codigo</th>
			      <th scope="col">Matricula</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($estudiantes as $d)
			    <tr>
				    <th scope="row">{{$d->user_id}}</th>
				    <td>{{$d->firstname}} {{$d->secondname}}</td>
				    <td>{{$d->lastname}} {{$d->secondlastname}}</td>
				    <td>{{$d->birthdate}}</td>
				    <td>{{$d->email}}</td>
				    <td>@if($d->genre=='1')
				    	{{'Masculino'}}
				    	@else
				    	{{'Femenino'}}
				    	@endif
				    	</td>
				    <td>{{$d->state}}</td>
				    <td>{{$d->code}}</td>
				    <td>{{$d->enrollment}}</td>
				    <td>
				    	<div class="btn-group">
						<button class="btn btn-warning" type="button" data-toggle="modal" data-target="#editarModal{{$d->id}}">
						  <span class="fa fa-address-book"></span>
						</button>
						<div class="modal fade bd-example-modal-lg" id="editarModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="editarModalTitle{{$d->id}}" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						    <div class="modal-content bg-dark">
						      <div class="modal-header">
						        <h5 class="modal-title text-center" id="editarModalTitle{{$d->id}}">Editar Estudiante</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="rounded modal-body fondoformulario">
						        {{--  --}}
						        <form method="POST" action="{{route('actualizarestudiante',$d->user_id)}}">
						    	{{ csrf_field() }}
						    	<br>
						    	<div class="form-group input-group">
								    <input type="text" class="form-control" id="firstname" name="firstname" value="{{$d->firstname}}">
								    @if(!is_null($d->secondname))
								    <input type="text" class="form-control" id="secondname" name="secondname" value="{{$d->secondname}}">
								    @else
								    <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Ingrese su segundo nombre">
								    @endif
								</div>								    
								<div class="form-group input-group">
								    <input type="text" class="form-control" id="lastname" name="lastname" value="{{$d->lastname}}">
								    <input type="text" class="form-control" id="secondlastname" name="secondlastname" value="{{$d->secondlastname}}">
								</div>
								<div class="form-group">
								    <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{$d->birthdate}}">
								</div>
								<div class="form-group">
								    <input type="email" class="form-control" id="email" name="email" value="{{$d->email}}">
								</div>								  	
								<div class="form-group">                         
					                <input type="text" class="form-control" id="code" name="code" value="{{$d->code}}">
					            </div>
								<div class="form-group text-center">
									@if($d->genre=='1')
								   	<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="genero1" name="genre" class="custom-control-input" value="1" checked="on">
									<label class="custom-control-label text-dark" for="genero1">Masculino</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="genero2" name="genre" class="custom-control-input" value="2">
									<label class="custom-control-label text-dark" for="genero2">Femenino</label>
									</div>
									@else
									<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="genero1" name="genre" class="custom-control-input" value="1">
									<label class="custom-control-label text-dark" for="genero1">Masculino</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="genero2" name="genre" class="custom-control-input" value="2" checked="on">
									<label class="custom-control-label text-dark" for="genero2">Femenino</label>
									</div>
									@endif
								</div>

								<div class="form-group">
				                    <select class="form-control" id="career" name="career">
				                    	@foreach($carreras as $c)
				                        <option value="{{$c->id}}">{{$c->name}}</option>
				                    	@endforeach
				                    </select>
				                </div>

							  	<div class="form-group">
				                <input id="document" type="text" class="form-control" name="document" value="{{$d->document}}">
				                </div>		    

				                <div class="form-group">
				                <input id="enrollment" type="text" class="form-control" name="enrollment" value="{{$d->enrollment}}">
				                </div>

								<div class="col-lg-12 text-center">
								  	<div class="card-footer">
								  	<input type="hidden" name="student" value="{{$d->id}}">
								  	<button type="submit" class="btn btn-dark">Actualizar</button>
								  	</div>
								</div>
								</form>
						      </div>
						    </div>
						  </div>
						</div>
						{{--  --}}
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal{{$d->id}}">
						<span class="fa fa-dot-circle"></span>
						</button>
						{{--  --}}
			      	</td>
			    </tr>
			    <div class="modal fade" id="eliminarModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel{{$d->id}}" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content bg-warning">
						      <div class="modal-header">
						        <h5 class="modal-title" id="eliminarModalLabel{{$d->id}}">Eliminar registro</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body fondoformulario">
						        <h4>Se denegara el acceso y registro de los datos siguientes:</h4>
						        <ul><li>{{$d->firstname}}</li><li>{{$d->email}}</li></ul>
						      </div>
						      <div class="rounded modal-footer bg-warning">
						        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
						        <a href="{{route('eliminardocente',$d->id)}}" class="btn btn-danger">Continuar</a>
						      </div>
						    </div>
						  </div>
						</div>
			    @endforeach
			  </tbody>
			</table>
	    </div>
	</div>
	@endif
@endsection