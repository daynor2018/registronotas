@extends('layouts.plantillareportes')
@section('reporte')
	@if(count($docentes)==0)
		<div class="container-fluid">
		    <h1 class="text-white">La lista de docentes esta vacia!</h1>
		    <p class="lead text-white">No se cuenta con ningún registro de docentes activos.</p>
		</div>
	@else
		<div class="container-fluid">
	    <div class="row">
	    	<div class="col-lg-12">
	    	<h1 class="text-dark text-center">Lista de docentes</h1>
	    	</div>
	    	<br>
	    	<br>
	    </div>
	    <div class="row">
	    	<div class="col-lg-12">
	        <table border="1">
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
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($docentes as $d)
			    <tr>
				    <th scope="row">{{$d->id}}</th>
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
			    </tr>
			    @endforeach
			  </tbody>
			</table>
			</div>
	    </div>
	</div>
	@endif
@endsection

