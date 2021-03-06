@extends('template')

    <meta name="description" content="Podología Médica, Podología Pediátrica, Podología en San Bernardino, Podología en Caracas, Centro de Podología en Caracas, Podología en Caracas, Podología COP, Doctores Podologos, Medicos Podologos, Mejor Podologo de Venezuela, Podologo en Caracas, Podologos en San Bernardino, Podologos Infantiles, Especialidad Podología, Ortopedía Médica, Ortopedía Pediátrica, Ortopedía en San Bernardino, Ortopedía en Caracas, Centro de Ortopedía en Caracas, Ortopedía en Caracas, Ortopedía COP, Doctores Ortopedicos, Medicos Ortopedicos, Mejor Ortopedico de Venezuela, Ortopedico en Caracas, Ortopedicos en San Bernardino, Ortopedicos Infantiles, Especialidad Ortopedía.">

     <meta name="keywords" content="CENTRO, PODOLOGICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, PODOLOGÍA, PIE Y MANOS, EMERGENCIAS, PODOLOGICA, CIRUGIAS, EMERGENCIA, PODOLOGICAS, MEDICOS, PODOLOGICOS, CLINICA, PODOLOGICA, PODOLOGICA, SAN BERNARDINO, CITAS, PODOLOGÍA, CONSULTORIOS, CITAS,PODOLOGÍA, SALA DE EMERGENCIA, PODOLOGÍA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, PODOLOGÍA,  MEDICOS, PODOLOGICOS, QUIRURGICOS,  ESPECIALISTAS, PODOLOGÍA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, PODOLOGÍA, CARACAS, VENEZUELA, CLINICA, PODOLOGÍA, CARACAS, VENEZUELA, MEDICOS, PODOLOGICOS, PODOLOGICOS EN CARACAS VENEZUELA- CLINICA PODOLOGICA, CARACAS,PODOLOGICOS,MEDICOS, CIRUJANOS, PODOLOGICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, PODOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO PODOLOGICO SAN BERNARDINO, MEDICOS EN PODOLOGÍA - CLINICA  PODOLOGICO</title>

@section("content")

<div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO ORTOPEDICO Y PODOLOGICO SAN BERNARDINO</h2>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/podologia/ali-yahya-YGkEFQqgI94-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/podologia/national-cancer-institute-701-FJcjLAQ-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/podologia/national-cancer-institute-gO-iULv-qbU-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/podologia/national-cancer-institute-oM3o8sWsOOk-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            La podología es una rama de la medicina que tiene por objeto el estudio, diagnóstico y tratamiento de las enfermedades y alteraciones que afectan el pie.
            </p>
        </div>
    </div>
    <div class="p-2"></div>
    <div class="p-2"></div>
    <div class="row">
        <div class="card col-sm-12 col-md-3 cardDoc">
          <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-DPEPYPBZpB8-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Mario Hernandez <br>
                Medico Ortopedico y Podologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Ortopedico y Podologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Ortopedico y Podologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Ortopedico y Podologo <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>


<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
    <form action="{{route('podologia')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="exampleFormControlTextarea1"><b>Barra de preguntas y respuestas:</b></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="overflow:auto;resize:none" name="pregunta"></textarea>
      </div>
      <div class="form-group">
    <input type="checkbox"> Acepto los Términos y Condiciones
  </div>
    <div class="form-group">
           @guest
        @if (Route::has('register'))
            <button class="btn btn-primary" disabled style="margin-right: 10px">ENVIAR</button><b>Debe estar <a href="{{ route('register') }}">Registrado</a> para poder realizar un comentario</b>
        @endif
    


                            
         @else
            <button type="submit" class="btn btn-primary">ENVIAR</button>

     @endguest
        
  </div>

  <div class="scroll col-lg-12">
        
    @forelse ($sql as $dato)
    <div class="preguntas">  
      <b style="margin-left: 10px">{{ $dato->usuario }}: </b>{{$dato->pregunta}} <br>    
    </div>
  
    @empty
    <center>
        <br><br><br>
        <b class="no-comments">No hay comentarios</b>
        <style>
            .scroll:hover{
                filter: blur(1px);
                transition: 0.7s;
            }
        </style>
    </center>
  
  @endforelse

    <div class="p-2"></div>

</div>
</form>
</div>

<div class="p-1 w-100"></div>

@endsection

@section("footer")
Podología Médica - Podología Pediátrica - Podología en San Bernardino - Podología en Caracas - Centro de Podología en Caracas - Podología en Caracas - Podología COP - Doctores Podologos - Medicos Podologos - Mejor Podologo de Venezuela - Podologo en Caracas - Podologos en San Bernardino - Podologos Infantiles - Especialidad Podología - Ortopedía Médica - Ortopedía Pediátrica - Ortopedía en San Bernardino - Ortopedía en Caracas - Centro de Ortopedía en Caracas - Ortopedía en Caracas - Ortopedía COP - Doctores Ortopedicos - Medicos Ortopedicos - Mejor Ortopedico de Venezuela - Ortopedico en Caracas - Ortopedicos en San Bernardino - Ortopedicos Infantiles - Especialidad Ortopedía.
@endsection