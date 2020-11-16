@extends('template')

    <meta name="description" content="CENTRO GINECOLOGICO DE SAN BERNARDINO, SERVICIO MEDICO ESPECIALISTA EN GINECOLOGÍA, EMERGENCIAS GINECOLOGICAS, MEDICOS GINECOLOGICOS CON AMPLIA TRAYECTORIA, CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES GINECOLOGICAS, CLINICA GINECOLOGICA EN SAN BERNARDINO, EXAMENES GINECOLOGICOS 24 HORAS, CITAS DE GINECOLOGÍA, CONSULTORIOS PARA CITAS DE GINECOLOGÍA, SALA DE EMERGENCIA EN GINECOLOGÍA , CENTRO MEDICO EN GINECOLOGÍA, MEDICOS GINECOLOGICOS QUIRURGICOS EN SAN BERNARDINO, ESPECIALISTAS EN GINECOLOGÍA,  UNIDAD DE GINECOLOGÍA EN CARACAS, CLINICA GINECOLOGÍA EN CARACAS VENEZUELA, MEDICOS GINECOLOGICOS EN CARACAS VENEZUELA, CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS, GINECOLOGICOS EN CARACAS- MEDICOS  GINECOLOGICOS EN CARACAS VENEZUELA, EMERGENCIA MEDICA PODOLOGICA, GINECOLOGICOS EN SAN BENADINO CARACAS VENEZUALA, CENTRO PODOLOGICO, COP.">

     <meta name="keywords" content="CENTRO, GINECOLOGICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, GINECOLOGÍA, PIE Y MANOS, EMERGENCIAS, GINECOLOGICA, CIRUGIAS, EMERGENCIA, GINECOLOGICAS, MEDICOS, GINECOLOGICOS, CLINICA, GINECOLOGICA, PODOLOGICA, SAN BERNARDINO, CITAS, GINECOLOGÍA, CONSULTORIOS, CITAS,GINECOLOGÍA, SALA DE EMERGENCIA, GINECOLOGÍA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, GINECOLOGÍA,  MEDICOS, GINECOLOGICOS, QUIRURGICOS,  ESPECIALISTAS, GINECOLOGÍA, CIRUGIA, COLUMNA, PIES, MANOS, VAGINAS, RODILLAS, UNIDAD, GINECOLOGÍA, CARACAS, VENEZUELA, CLINICA, GINECOLOGÍA, CARACAS, VENEZUELA, MEDICOS, GINECOLOGICOS, GINECOLOGICOS EN CARACAS VENEZUELA- CLINICA GINECOLOGICA, CARACAS,GINECOLOGICOS,MEDICOS, CIRUJANOS, GINECOLOGICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, GINECOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO GINECOLOGICO SAN BERNARDINO, MEDICOS EN GINECOLOGÍA - CLINICA  PODOLOGICO</title>


@section("content")

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO GINECOLOGICO SAN BERNARDINO - GINECOLOGÍA EN GENERAL</h2>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/ginecologia/hh-e-VeF3uWcH4L4-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/ginecologia/ibrahim-boran-zsKFQs2kDpM-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/ginecologia/natanael-melchor-KRM15m2k6o8-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/ginecologia/olga-kononenko-QQ_Rvwe0u_w-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            Ginecología que significa literalmente ciencia de la mujer y en medicina hace referencia a la especialidad médica y quirúrgica que estudia el sistema reproductor femenino.
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
                Medico Ginecologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Ginecologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Ginecologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Ginecologo <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>

<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
<form action="{{route('ginecologia')}}" method="POST">
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


<div class="p-1 w-100"></div>

@endsection

@section("footer")
CENTRO GINECOLOGICO DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN GINECOLOGÍA - EMERGENCIAS GINECOLOGICAS - MEDICOS GINECOLOGICOS CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES GINECOLOGICAS - CLINICA GINECOLOGICA EN SAN BERNARDINO - EXAMENES GINECOLOGICOS 24 HORAS - CITAS DE GINECOLOGÍA - CONSULTORIOS PARA CITAS DE GINECOLOGÍA - SALA DE EMERGENCIA EN GINECOLOGÍA  - CENTRO MEDICO EN GINECOLOGÍA - MEDICOS GINECOLOGICOS QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN GINECOLOGÍA -  UNIDAD DE GINECOLOGÍA EN CARACAS - CLINICA GINECOLOGÍA EN CARACAS VENEZUELA - MEDICOS GINECOLOGICOS EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - GINECOLOGICOS EN CARACAS- MEDICOS  GINECOLOGICOS EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - GINECOLOGICOS EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.

@endsection
