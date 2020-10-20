@extends('template')

    <meta name="description" content="CENTRO PSICOLOGICO DE SAN BERNARDINO, SERVICIO MEDICO ESPECIALISTA EN PSICOLOGÍA, EMERGENCIAS PSICOLOGICAS, MEDICOS PSICOLOGICOS CON AMPLIA TRAYECTORIA, CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES PSICOLOGICAS, CLINICA PSICOLOGICA EN SAN BERNARDINO, EXAMENES PSICOLOGICOS 24 HORAS, CITAS DE PSICOLOGÍA, CONSULTORIOS PARA CITAS DE PSICOLOGÍA, SALA DE EMERGENCIA EN PSICOLOGÍA , CENTRO MEDICO EN PSICOLOGÍA, MEDICOS PSICOLOGICOS QUIRURGICOS EN SAN BERNARDINO, ESPECIALISTAS EN PSICOLOGÍA,  UNIDAD DE PSICOLOGÍA EN CARACAS, CLINICA PSICOLOGÍA EN CARACAS VENEZUELA, MEDICOS PSICOLOGICOS EN CARACAS VENEZUELA, CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS, PSICOLOGICOS EN CARACAS- MEDICOS  PSICOLOGICOS EN CARACAS VENEZUELA, EMERGENCIA MEDICA PODOLOGICA, PSICOLOGICOS EN SAN BENADINO CARACAS VENEZUALA, CENTRO PODOLOGICO, COP.">

    <meta name="keywords" content="CENTRO, PSICOLOGICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, PSICOLOGÍA, PIE Y MANOS, EMERGENCIAS, PSICOLOGICA, CIRUGIAS, EMERGENCIA, PSICOLOGICAS, MEDICOS, PSICOLOGICOS, CLINICA, PSICOLOGICA, PODOLOGICA, SAN BERNARDINO, CITAS, PSICOLOGÍA, CONSULTORIOS, CITAS,PSICOLOGÍA, SALA DE EMERGENCIA, PSICOLOGÍA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, PSICOLOGÍA,  MEDICOS, PSICOLOGICOS, QUIRURGICOS,  ESPECIALISTAS, PSICOLOGÍA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, PSICOLOGÍA, CARACAS, VENEZUELA, CLINICA, PSICOLOGÍA, CARACAS, VENEZUELA, MEDICOS, PSICOLOGICOS, PSICOLOGICOS EN CARACAS VENEZUELA- CLINICA PSICOLOGICA, CARACAS,PSICOLOGICOS,MEDICOS, CIRUJANOS, PSICOLOGICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, PSICOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO DE PSICOLOGÍA SAN BERNARDINO, MEDICOS EN PSICOLOGÍA - CLINICA  PODOLOGICO</title>


@section("content")

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO PSICOLÓGICO SAN BERNARDINO - PSICOLOGÍA EN GENERAL</h2>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/psicologia/2019123011585267508.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/psicologia/dependenciapsicologica.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/psicologia/psicologopsicologa.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/psicologia/unnamed.png')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            Ciencia que estudia los procesos mentales, las sensaciones, las percepciones y el comportamiento del ser humano, en relación con el medio ambiente físico y social que lo rodea.
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
                Medico Psicólogo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Psicólogo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Psicólogo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Psicólogo <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>

<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Barra de preguntas y respuestas:</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="overflow:auto;resize:none"></textarea>
  </div>
  <div class="form-group">
    <input type="checkbox"> Acepto los Términos y Condiciones
  </div>
    <div class="form-group">
        <button type="button" class="btn btn-primary">ENVIAR</button>
  </div>
</form>
<div class="p-2"></div>
<div class="row">
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Cesar Chavarria: </b>¿Donde puedo reservar una consulta?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen día, en nuestra seccion de ''Solicitud de citas''.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Genesis Oviedo: </b>¿Hacen placas de tobillos?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Naileth Belisario: </b>¿Cual es el horario de las consultas?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>respuesta: </b>Buen dia, de 8:00am a 4:00pm.</label>
    </div>
</div>
</div>

<div class="p-1 w-100"></div>

@endsection

@section("footer")
CENTRO PSICOLOGICO DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN PSICOLOGÍA - EMERGENCIAS PSICOLOGICAS - MEDICOS PSICOLOGICOS CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES PSICOLOGICAS - CLINICA PSICOLOGICA EN SAN BERNARDINO - EXAMENES PSICOLOGICOS 24 HORAS - CITAS DE PSICOLOGÍA - CONSULTORIOS PARA CITAS DE PSICOLOGÍA - SALA DE EMERGENCIA EN PSICOLOGÍA  - CENTRO MEDICO EN PSICOLOGÍA - MEDICOS PSICOLOGICOS QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN PSICOLOGÍA -  UNIDAD DE PSICOLOGÍA EN CARACAS - CLINICA PSICOLOGÍA EN CARACAS VENEZUELA - MEDICOS PSICOLOGICOS EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - PSICOLOGICOS EN CARACAS- MEDICOS  PSICOLOGICOS EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - PSICOLOGICOS EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.
@endsection
