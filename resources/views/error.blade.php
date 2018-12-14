@extends('layouts.plataform')
@section('contenido')
<link rel="stylesheet" type="text/css" href="{{asset('/css/error.css')}}">
	<section class="error_section">
      <p class="error_section_subtitle">Opps Esta página no esta disponible!</p>
      <h1 class="error_title">
        <p>404</p>
        404
      </h1>
      <a href="/home" class="btn">Volver Atrás</a>
    </section>

    <script type="text/javascript">
    	const title = document.querySelector('.error_title')

		document.onmousemove = function(e) {
		  let x = e.pageX - window.innerWidth/2;
		  let y = e.pageY - window.innerHeight/2;
		  
		  title.style.setProperty('--x', x + 'px')
		  title.style.setProperty('--y', y + 'px')
		}

		title.onmousemove = function(e) {
		  let x = e.pageX - window.innerWidth/2;
		  let y = e.pageY - window.innerHeight/2;

		  let rad = Math.atan2(y, x).toFixed(2); 
		  let length = Math.round(Math.sqrt((Math.pow(x,2))+(Math.pow(y,2)))/10); 

		  let x_shadow = Math.round(length * Math.cos(rad));
		  let y_shadow = Math.round(length * Math.sin(rad));

		  title.style.setProperty('--x-shadow', - x_shadow + 'px')
		  title.style.setProperty('--y-shadow', - y_shadow + 'px')

		}
    </script>
@endsection