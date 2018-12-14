@extends('layouts.plataformadmin')
@section('contenido')
	@if(count($clases)==0)
		<div class="container-fluid">
		    <div class="jumbotron fondojumbo">
		        <h1 class="text-white">La lista de clases esta vacia!</h1>
		        <p class="lead text-white">No se habilito ninguna clase aún.</p>
			@if(count($docentes)==0)
				<p class="lead text-warning">Para habilitar una clase debe de registrar docentes disponibles</p>
			@else
			<div class="modal fade" id="agregaClase" tabindex="-1" role="dialog" aria-labelledby="agregaClaseLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header bg-success">
			        <h5 class="modal-title" id="agregaClaseLabel">Agregar Clase</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="rounded modal-body fondoformulario">
			        <form method="POST" action="{{route('registrarclase')}}">
			        	@csrf
			        <legend class="lead text-center">Nueva Clase</legend>
			        <div class="form-group">
				        <label for="docente">Docente a cargo de la clase:</label>
				        <select class="form-control" id="docente" name="docente">
				           	@foreach($docentes as $d)
				            <option value="{{$d->id}}">{{$d->firstname}} {{$d->secondname}}</option>
				           	@endforeach
				        </select>
				    </div>

			        <div class="form-group">
			        	<label for="semester">Semestre actual:</label>
				        <input id="semester" type="text" class="form-control" name="semester" value="@if(date("n")<6){{'I'}}@else{{'II'}}@endif/{{date("Y")}}">
				    </div>

				    <div class="form-group">
				        <input id="matter" type="text" class="form-control" name="matter" placeholder="Materia de la clase">
				    </div>

				    <div class="form-group">
				        <input id="curse" type="text" class="form-control" name="curse" placeholder="Paralelo de la clase">
				    </div>

			        <div class="col-lg-12 text-center">
					  	<div class="card-footer">
						  	<button type="submit" class="btn btn-dark">Registrar</button>
						</div>
					</div>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<button type="button" class="btn btn-light bg-warning" data-toggle="modal" data-target="#agregaClase">Agregar Clase</button>
			@endif
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
	    	<h1 class="text-white">Clases inactivas</h1>
	    	<p class="lead text-white">Las siguientes clases aún no cuentan con un horario</p>
	    	<div class="modal fade" id="agregaClase" tabindex="-1" role="dialog" aria-labelledby="agregaClaseLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header bg-success">
			        <h5 class="modal-title" id="agregaClaseLabel">Agregar Clase</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="rounded modal-body fondoformulario">
			        <form method="POST" action="{{route('registrarclase')}}">
			        	@csrf
			        <legend class="lead text-center">Nueva Clase</legend>
			        <div class="form-group">
				        <label for="docente">Docente a cargo de la clase:</label>
				        <select class="form-control" id="docente" name="docente">
				           	@foreach($docentes as $d)
				            <option value="{{$d->id}}">{{$d->firstname}} {{$d->secondname}}</option>
				           	@endforeach
				        </select>
				    </div>

			        <div class="form-group">
			        	<label for="semester">Semestre actual:</label>
				        <input id="semester" type="text" class="form-control" name="semester" value="@if(date("n")<6){{'I'}}@else{{'II'}}@endif/{{date("Y")}}">
				    </div>

				    <div class="form-group">
				        <input id="matter" type="text" class="form-control" name="matter" placeholder="Materia de la clase">
				    </div>

				    <div class="form-group">
				        <input id="curse" type="text" class="form-control" name="curse" placeholder="Paralelo de la clase">
				    </div>

			        <div class="col-lg-12 text-center">
					  	<div class="card-footer">
						  	<button type="submit" class="btn btn-dark">Registrar</button>
						</div>
					</div>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
	    	<div class="btn-group">
	    	<button type="button" class="btn btn-light bg-warning" data-toggle="modal" data-target="#agregaClase">Agregar Clase</button>
	    	<a class="btn btn-light bg-warning" href="#">Exportar</a>
	    	</div>
	    	<br>
	    	<br>
	        <table class="table table-striped table-dark">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">Docente a cargo</th>
			      <th scope="col">Materia</th>
			      <th scope="col">Semestre</th>
			      <th scope="col">Paralelo</th>
			      <th scope="col">Estado</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($clases as $c)
			    <tr>
				    <th scope="row">{{$c->id}}</th>
				    <td>{{$c->user_id}}</td>
				    <td>{{$c->matter}}</td>
				    <td>{{$c->semester}}</td>
				    <td>{{$c->curse}}</td>
				    <td>{{$c->state}}</td>
				    <td>
				    	<div class="btn-group">
						<button class="btn btn-warning" type="button" data-toggle="modal" data-target="#editarModal{{$c->id}}">
						  <span class="fa fa-address-book"></span>
						</button>
						<div class="modal fade bd-example-modal-lg" id="editarModal{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="editarModalTitle{{$c->id}}" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						    <div class="modal-content bg-dark">
						      <div class="modal-header">
						        <h5 class="modal-title text-center" id="editarModalTitle{{$c->id}}">Editar Clase</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="rounded modal-body fondoformulario">
						        {{--  --}}
						        <form method="POST" action="{{route('actualizarclase',$c->id)}}">
						    	{{ csrf_field() }}
						    	<div class="form-group">
						        <label class="col-form-label text-dark" for="docente">Docente a cargo de la clase:</label>
						        <select class="form-control" id="docente" name="docente">
						           	@foreach($docentes as $d)
						            <option value="{{$d->id}}">{{$d->firstname}}{{$d->secondname}}</option>
						           	@endforeach
						        </select>
						    </div>

					        <div class="form-group">
					        	<label class="col-form-label text-dark" for="semester">Semestre actual:</label>
						        <input id="semester" type="text" class="form-control" name="semester" value="{{$c->semester}}">
						    </div>

						    <div class="form-group">
						    	<label class="col-form-label text-dark" for="matter">Materia:</label>
						        <input id="matter" type="text" class="form-control" name="matter" value="{{$c->matter}}">
						    </div>

						    <div class="form-group">
						    	<label class="col-form-label text-dark" for="curse">Paralelo:</label>
						        <input id="curse" type="text" class="form-control" name="curse" value="{{$c->curse}}">
						    </div>

						     <div class="col-lg-12 text-center">
							  	<div class="card-footer">
								  	<button type="submit" class="btn btn-dark">Actualizar</button>
								</div>
							</div>
								</form>
						      </div>
						    </div>
						  </div>
						</div>
						{{--  --}}
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal{{$c->id}}">
						<span class="fa fa-dot-circle"></span>
						</button>
						{{--  --}}
						<a class="btn btn-primary" href="{{route('registrarhorario',$c->id)}}"><span class="fa fa-warehouse"></span></a>
					</div>
			      	</td>
			    </tr>
			    <div class="modal fade" id="eliminarModal{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel{{$c->id}}" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content bg-warning">
						      <div class="modal-header">
						        <h5 class="modal-title" id="eliminarModalLabel{{$c->id}}">Eliminar registro</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body fondoformulario">
						        <h4>¿Esta seguro de la eliminación de la siguiente clase?</h4>
						        <ul><li>{{$c->id}}</li></ul>
						      </div>
						      <div class="rounded modal-footer bg-warning">
						        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
						        <a href="{{route('eliminarclase',$c->id)}}" class="btn btn-danger">Continuar</a>
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