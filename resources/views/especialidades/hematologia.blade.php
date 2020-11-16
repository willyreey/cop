@extends('template')

    <meta name="description" content="CENTRO HEMATOLOGICO DE SAN BERNARDINO, SERVICIO MEDICO ESPECIALISTA EN HEMATOLOGÍA, EMERGENCIAS HEMATOLOGICAS, MEDICOS HEMATOLOGICOS CON AMPLIA TRAYECTORIA, CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES HEMATOLOGICAS, CLINICA HEMATOLOGICA EN SAN BERNARDINO, EXAMENES HEMATOLOGICOS 24 HORAS, CITAS DE HEMATOLOGÍA, CONSULTORIOS PARA CITAS DE HEMATOLOGÍA, SALA DE EMERGENCIA EN HEMATOLOGÍA , CENTRO MEDICO EN HEMATOLOGÍA, MEDICOS HEMATOLOGICOS QUIRURGICOS EN SAN BERNARDINO, ESPECIALISTAS EN HEMATOLOGÍA,  UNIDAD DE HEMATOLOGÍA EN CARACAS, CLINICA HEMATOLOGÍA EN CARACAS VENEZUELA, MEDICOS HEMATOLOGICOS EN CARACAS VENEZUELA, CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS, HEMATOLOGICOS EN CARACAS- MEDICOS  HEMATOLOGICOS EN CARACAS VENEZUELA, EMERGENCIA MEDICA PODOLOGICA, HEMATOLOGICOS EN SAN BENADINO CARACAS VENEZUALA, CENTRO PODOLOGICO, COP.">

     <meta name="keywords" content="CENTRO, HEMATOLOGICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, HEMATOLOGÍA, PIE Y MANOS, EMERGENCIAS, HEMATOLOGICA, CIRUGIAS, EMERGENCIA, HEMATOLOGICAS, MEDICOS, HEMATOLOGICOS, CLINICA, HEMATOLOGICA, PODOLOGICA, SAN BERNARDINO, CITAS, HEMATOLOGÍA, CONSULTORIOS, CITAS,HEMATOLOGÍA, SALA DE EMERGENCIA, HEMATOLOGÍA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, HEMATOLOGÍA,  MEDICOS, HEMATOLOGICOS, QUIRURGICOS,  ESPECIALISTAS, HEMATOLOGÍA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, HEMATOLOGÍA, CARACAS, VENEZUELA, CLINICA, HEMATOLOGÍA, CARACAS, VENEZUELA, MEDICOS, HEMATOLOGICOS, HEMATOLOGICOS EN CARACAS VENEZUELA- CLINICA HEMATOLOGICA, CARACAS,HEMATOLOGICOS,MEDICOS, CIRUJANOS, HEMATOLOGICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, HEMATOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO HEMATOLOGÍCO SAN BERNARDINO, MEDICOS HEMATOLOGOS - CLINICA  PODOLOGICO</title>


@section("content")

        <div class="row">
            <div class="col-12">
                <h4 class="text-center">CENTRO HEMATOLOGÍCO SAN BERNARDINO - HEMATOLOGÍA EN GENERAL</h4>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/hematologia/ali-yahya-G9Si5It7y_o-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/hematologia/h-shaw-XeylIhk5lDU-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/hematologia/li-lin-HoVri_7YoBY-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/hematologia/olga-guryanova-Nanf8oLglmg-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            La hematología  es la especialidad médica que se dedica al tratamiento de los pacientes con enfermedades de la sangre o hematológicas, su campo de actuación es el diagnóstico, tratamiento, estudio e investigación de la sangre y los órganos hematopoyéticos tanto sanos como enfermos.
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
                Medico Hematologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Hematologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Hematologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Hematologo <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>

<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
    <form action="{{route('hematologia')}}" method="POST">
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
CENTRO HEMATOLOGICO DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN HEMATOLOGÍA - EMERGENCIAS HEMATOLOGICAS - MEDICOS HEMATOLOGICOS CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES HEMATOLOGICAS - CLINICA HEMATOLOGICA EN SAN BERNARDINO - EXAMENES HEMATOLOGICOS 24 HORAS - CITAS DE HEMATOLOGÍA - CONSULTORIOS PARA CITAS DE HEMATOLOGÍA - SALA DE EMERGENCIA EN HEMATOLOGÍA  - CENTRO MEDICO EN HEMATOLOGÍA - MEDICOS HEMATOLOGICOS QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN HEMATOLOGÍA -  UNIDAD DE HEMATOLOGÍA EN CARACAS - CLINICA HEMATOLOGÍA EN CARACAS VENEZUELA - MEDICOS HEMATOLOGICOS EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - HEMATOLOGICOS EN CARACAS- MEDICOS  HEMATOLOGICOS EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - HEMATOLOGICOS EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.

@endsection