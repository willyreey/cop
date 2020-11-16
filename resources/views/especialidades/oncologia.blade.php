@extends('template')
    <meta name="description" content="CENTRO ONCOLOGICO DE SAN BERNARDINO, SERVICIO MEDICO ESPECIALISTA EN ONCOLOGÍA, EMERGENCIAS ONCOLOGICAS, MEDICOS ONCOLOGICOS CON AMPLIA TRAYECTORIA, CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES ONCOLOGICAS, CLINICA ONCOLOGICA EN SAN BERNARDINO, EXAMENES ONCOLOGICOS 24 HORAS, CITAS DE ONCOLOGÍA, CONSULTORIOS PARA CITAS DE ONCOLOGÍA, SALA DE EMERGENCIA EN ONCOLOGÍA , CENTRO MEDICO EN ONCOLOGÍA, MEDICOS ONCOLOGICOS QUIRURGICOS EN SAN BERNARDINO, ESPECIALISTAS EN ONCOLOGÍA,  UNIDAD DE ONCOLOGÍA EN CARACAS, CLINICA ONCOLOGÍA EN CARACAS VENEZUELA, MEDICOS ONCOLOGICOS EN CARACAS VENEZUELA, CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS, ONCOLOGICOS EN CARACAS- MEDICOS  ONCOLOGICOS EN CARACAS VENEZUELA, EMERGENCIA MEDICA PODOLOGICA, ONCOLOGICOS EN SAN BENADINO CARACAS VENEZUALA, CENTRO PODOLOGICO, COP.">

     <meta name="keywords" content="CENTRO, ONCOLOGICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, ONCOLOGÍA, PIE Y MANOS, EMERGENCIAS, ONCOLOGICA, CIRUGIAS, EMERGENCIA, ONCOLOGICAS, MEDICOS, ONCOLOGICOS, CLINICA, ONCOLOGICA, PODOLOGICA, SAN BERNARDINO, CITAS, ONCOLOGÍA, CONSULTORIOS, CITAS,ONCOLOGÍA, SALA DE EMERGENCIA, ONCOLOGÍA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, ONCOLOGÍA,  MEDICOS, ONCOLOGICOS, QUIRURGICOS,  ESPECIALISTAS, ONCOLOGÍA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, ONCOLOGÍA, CARACAS, VENEZUELA, CLINICA, ONCOLOGÍA, CARACAS, VENEZUELA, MEDICOS, ONCOLOGICOS, ONCOLOGICOS EN CARACAS VENEZUELA- CLINICA ONCOLOGICA, CARACAS,ONCOLOGICOS,MEDICOS, CIRUJANOS, ONCOLOGICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, ONCOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO ONCOLÓGICO SAN BERNARDINO, MEDICOS EN ONCOLOGÍA - CLINICA  PODOLOGICO</title>

@section("content")

<div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO ONCOLÓGICO SAN BERNARDINO - ONCOLOGÍA EN GENERAL</h2>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid img-thumbnail" src="{{asset('img/oncologia/cdc-_N7I1JyPYJw-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid img-thumbnail" src="{{asset('img/oncologia/national-cancer-institute-GcrSgHDrniY-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid img-thumbnail" src="{{asset('img/oncologia/lucas-vasques-9vnACvX2748-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid img-thumbnail" src="{{asset('img/oncologia/national-cancer-institute-HMQtSQZHPZU-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            La oncología es la rama de la medicina que estudia y trata las neoplasias, con especial atención a los tumores malignos o cáncer.
            </p>
            <p class="h5">
            Los oncólogos que atienden a pacientes se conocen como oncólogos clínicos, para distinguirlos de aquellos que realizan investigación relacionada con el cáncer, pero sin contacto directo con el paciente.
            </p>
        </div>
    </div>

    <div class="p-2"></div>
    <div class="row">
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-DPEPYPBZpB8-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Mario Hernandez <br>
                Medico Oncologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Oncologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Oncologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Oncologo <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>


<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
<form action="{{route('oncologia')}}" method="POST">

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
<div class="p-2"></div>

</div>

<div class="p-1 w-100"></div>

@endsection

@section("footer")

CENTRO ONCOLOGICO DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN ONCOLOGÍA - EMERGENCIAS ONCOLOGICAS - MEDICOS ONCOLOGICOS CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES ONCOLOGICAS - CLINICA ONCOLOGICA EN SAN BERNARDINO - EXAMENES ONCOLOGICOS 24 HORAS - CITAS DE ONCOLOGÍA - CONSULTORIOS PARA CITAS DE ONCOLOGÍA - SALA DE EMERGENCIA EN ONCOLOGÍA  - CENTRO MEDICO EN ONCOLOGÍA - MEDICOS ONCOLOGICOS QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN ONCOLOGÍA -  UNIDAD DE ONCOLOGÍA EN CARACAS - CLINICA ONCOLOGÍA EN CARACAS VENEZUELA - MEDICOS ONCOLOGICOS EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - ONCOLOGICOS EN CARACAS- MEDICOS  ONCOLOGICOS EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - ONCOLOGICOS EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.

@endsection
