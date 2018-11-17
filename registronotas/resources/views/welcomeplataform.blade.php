@extends('layouts.plataform')

@section('content')
<div class="container fondoazul">
    <br>
<div class="row">
    <div class="d-none d-lg-block d-xl-block col-lg-8 col-xl-8">
        <div class="card contenido">
            <h5 class="h5">SERVICIOS OFRECIDOS</h5>
            <div class="card-body">
            <div id="carouselWelcome" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselWelcome" data-slide-to="0" class="active"></li>
                <li data-target="#carouselWelcome" data-slide-to="1"></li>
                <li data-target="#carouselWelcome" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('/images/welcome/carousel1.jpg')}}" alt="Primer slide">
                  <div class="carousel-caption d-none d-lg-block">
                    <h5 class="text-dark">Mejora la comunicación con tus estudiantes</h5>
                    <a class="btn btn-light bg-warning btn-xs" href="{{route('register')}}">Registrate ya!</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/images/welcome/carousel2.jpg')}}" alt="Segundo slide">
                  <div class="carousel-caption d-none d-lg-block">
                    <h5 class="text-dark text-left">Trabaja con tu propio sistema de calificaciones</h5>
                    <p class="text-dark text-left">Prueba nuestra flexibilidad en cuanto al registro de notas.</p>
                  </div>
                </div>
                <div class="carousel-item justify-content-start">
                  <img class="d-block w-100" src="{{asset('/images/welcome/carousel7.jpg')}}" alt="Tercer slide">
                  <div class="carousel-caption d-none d-lg-block">
                    <h5 class="text-dark text-left">Seguimiento de notas.</h5>
                    <p class="text-dark text-left">Realiza proyecciones a futuro.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselWelcome" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next" href="#carouselWelcome" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
            </div>
        </div>
        </div>    
    </div>            
    <div class="col-lg-4">
        <div class="card contenido">
            <h5 class="h5">CITA CÉLEBRE</h5>
            <div class="card-body"><img src="{{asset('/images/welcome/equipo1.jpg')}}" width="100%"></div>
            <div class="carousel-caption"><p class="cita"><b><i>"La meta final de la verdadera educación es no sólo hacer que la gente haga lo que es correcto, sino que disfrute haciéndolo; no sólo formar personas trabajadoras, sino personas que amen el trabajo; no sólo individuos con conocimientos, sino con amor al conocimiento; no sólo seres puros, sino con amor a la pureza; no sólo personas justas, sino con hambre y sed de justicia"</i></p><p class="cita">(John Ruskin)</b></p></div>
        </div>
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
        <div class="card contenido">
            <div class="container">
              <h1 class="display-3">Bienvenido!</h1>
              <p class="text-justify">La plataforma presente fue orientada para uso particular; en consideración, cualquier uso dentro de la institución aún no ha sido aprobada, la presentación es de prueba y será tomado bajo su propia responsabilidad la inclusión de respaldo real. El equipo de trabajo agradece el uso que se le dará a este producto; continuando con la evolución del mismo esperamos sus sugerencias!. Gracias por su atención!</p>
              <p>
              <div class="accordion" id="secciones">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-block btn-warning collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Misión
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#secciones">
                    <div class="card-body">
                      <p class="text-justify">Forjar una Universidad transformadora comprometida a atraer y promover talento diverso y de clase mundial, creando un ambiente de alta colaboración que promueva el libre intercambio de ideas con el fin de impulsar la innovación, creatividad, investigación y alta capacidad de liderazgo para formar capital humano competitivo con valores éticos, morales y responsabilidad social.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-block btn-warning collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Visión
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#secciones">
                    <div class="card-body">
                      <p class="text-justify">Ser un referente de excelencia, con reconocimiento nacional e internacional, que promueva el desarrollo humano, científico y tecnológico cuyo liderazgo influya activamente en el bienestar de la sociedad.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-block btn-warning collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Filosofía
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#secciones">
                    <div class="card-body">
                      <p class="text-justify">Creemos en la formación universitaria como el resultado de un proceso integrado de enseñanza, investigación y extensión de la educación y la cultura en beneficio de la sociedad.
                      </p>
                      <p class="text-justify">Creemos en la libre designación de autoridades y del personal docente, así como en la libre administración de sus recursos.
                      </p>
                      <p class="text-justify">Creemos en la autonomía de gestión para la ejecución de las actividades académicas.
                      Creemos en la independencia ideológica de docente/estudiante y en la libre confrontación de ideas.
                      Creemos en la promoción de los valores de las personas en concordancia con su dignidad junto a su condición de seres humanos y respeto recíproco en el contexto social.
                      </p>
                      <p class="text-justify"> Creemos en el rigor científico de la enseñanza, incorporando el conocimiento, adelantos de la ciencia y la tecnología; el sentido crítico y la visión humanística. Para finalizar la formación integral de la persona, fomentando la solidaridad y el servicio a la sociedad.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            </div>
        </div>
        </div>
    </div>
    <br>
</div>
@endsection
