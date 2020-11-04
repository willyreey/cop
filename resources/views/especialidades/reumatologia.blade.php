@extends('template')
@section("meta")

    <meta name="description" content="Reumatología Médica, Reumatología Pediátrica, Reumatología en San Bernardino, Reumatología en Caracas, Centro de Reumatología en Caracas, Reumatología en Caracas, Reumatología COP, Doctores Reumatologos, Medicos Reumatologos, Mejor Reumatologo de Venezuela, Reumatologo en Caracas, Reumatologos en San Bernardino, Reumatologos Infantiles, Especialidad Reumatología, Reumatología Médica, Reumatología Pediátrica, Reumatología en San Bernardino, Reumatología en Caracas, Centro de Reumatología en Caracas, Reumatología en Caracas, Reumatología COP, Doctores Reumatologos, Medicos Reumatologos, Mejor Reumatologo de Venezuela, Reumatologo en Caracas, Reumatologos en San Bernardino, Reumatologos Infantiles, Especialidad Reumatología.">

     <meta name="keywords" content="CENTRO, Reumatologo,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, Reumatología, PIE Y MANOS, EMERGENCIAS, Reumatología, CIRUGIAS, EMERGENCIA, ReumatologíaS, MEDICOS, ReumatologoS, CLINICA, Reumatología, Reumatología, SAN BERNARDINO, CITAS, Reumatología, CONSULTORIOS, CITAS,Reumatología, SALA DE EMERGENCIA, Reumatología, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, Reumatología,  MEDICOS, ReumatologoS, QUIRURGICOS,  ESPECIALISTAS, Reumatología, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, Reumatología, CARACAS, VENEZUELA, CLINICA, Reumatología, CARACAS, VENEZUELA, MEDICOS, ReumatologoS, ReumatologoS EN CARACAS VENEZUELA- CLINICA Reumatología, CARACAS,ReumatologoS,MEDICOS, CIRUJANOS, ReumatologoS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, Reumatología, TRAUMA, QUIRURGICAS, ReumatologoS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, Reumatologo,  COP">

    <title>COP- CENTRO REUMATOLOGO SAN BERNARDINO, MEDICOS EN REUMATOLOGÍA - CLINICA DE REUMATOLOGÍA</title>
@endsection
@section("content")

<div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO DE REUMATOLOGÍA SAN BERNARDINO</h2>
            </div>
        </div>
        <div class="p-2"></div>

<div class="card mb-3">
  <img src="{{ asset('img/reumatologia/reumatologia.jpg') }}" class="card-img-top" style="height: 400px;">
  <div class="card-body">
    <h5 class="card-title">Reumatología</h5>
    <p class="card-text">La Reumatología es la especialidad médica que se encarga de prevenir, diagnosticar y tratar las enfermedades musculoesqueléticas  y autoinmunes sistémicas. Se trata de una de las especialidades que más avances en diagnóstico y tratamiento ha experimentado en los últimos años.</p>
  </div>
</div>
  
    <div class="p-2"></div>
    <div class="p-2"></div>
    <div class="row">
        <div class="card col-12 col-sm-3 cardDoc">
          <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-DPEPYPBZpB8-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Mario Hernandez <br>
                Medico Reumatologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Reumatologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Reumatologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Reumatologo <br>
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
        <button type="button" onclick="return mensajepr()" class="btn btn-primary">ENVIAR</button>
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
Reumatología Médica - Reumatología Pediátrica - Reumatología en San Bernardino - Reumatología en Caracas - Centro de Reumatología en Caracas - Reumatología en Caracas - Reumatología COP - Doctores Reumatologos - Medicos Reumatologos - Mejor Podologo de Venezuela - Podologo en Caracas - Reumatologos en San Bernardino - Reumatologos Infantiles - Especialidad Reumatología - Reumatología Médica - Reumatología Pediátrica - Reumatología en San Bernardino - Reumatología en Caracas - Centro de Reumatología en Caracas - Reumatología en Caracas - Reumatología COP - Doctores Reumatologos - Medicos Reumatologos - Mejor Reumatologo de Venezuela - Reumatologo en Caracas - Reumatologos en San Bernardino - Reumatologos Infantiles - Especialidad Reumatología.
@endsection