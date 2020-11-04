@extends('template')
@section("meta")

    <meta name="description" content="Fisiatría Médica, Fisiatría Pediátrica, Fisiatría en San Bernardino, Fisiatría en Caracas, Centro de Fisiatría en Caracas, Fisiatría en Caracas, Fisiatría COP, Doctores Fisiatras, Medicos Fisiatras, Mejor Fisiatra de Venezuela, Fisiatra en Caracas, Fisiatras en San Bernardino, Fisiatras Infantiles, Especialidad Fisiatría, Fisiatría Médica, Fisiatría Pediátrica, Fisiatría en San Bernardino, Fisiatría en Caracas, Centro de Fisiatría en Caracas, Fisiatría en Caracas, Fisiatría COP, Doctores Fisiatricos, Medicos Fisiatricos, Mejor Fisiatrico de Venezuela, Fisiatrico en Caracas, Fisiatricos en San Bernardino, Fisiatricos Infantiles, Especialidad Fisiatría.">

     <meta name="keywords" content="CENTRO, FISIATRICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, Fisiatría, PIE Y MANOS, EMERGENCIAS, FISIATRIA, CIRUGIAS, EMERGENCIA, FISIATRIAS, MEDICOS, FISIATRICOS, CLINICA, FISIATRIA, FISIATRIA, SAN BERNARDINO, CITAS, Fisiatría, CONSULTORIOS, CITAS,Fisiatría, SALA DE EMERGENCIA, Fisiatría, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, Fisiatría,  MEDICOS, FISIATRICOS, QUIRURGICOS,  ESPECIALISTAS, Fisiatría, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, Fisiatría, CARACAS, VENEZUELA, CLINICA, Fisiatría, CARACAS, VENEZUELA, MEDICOS, FISIATRICOS, FISIATRICOS EN CARACAS VENEZUELA- CLINICA FISIATRIA, CARACAS,FISIATRICOS,MEDICOS, CIRUJANOS, FISIATRICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, FISIATRIA, TRAUMA, QUIRURGICAS, FISIATRICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, FISIATRICO,  COP">

    <title>COP- CENTRO FISIATRICO SAN BERNARDINO, MEDICOS EN FISIATRIA - CLINICA  FISIATRICA</title>
@endsection
@section("content")

<div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO DE FISIATRIA SAN BERNARDINO</h2>
            </div>
        </div>
        <div class="p-2"></div>

<div class="card mb-3">
  <img src="{{ asset('img/fisiatria/fisiatria.png') }}" class="card-img-top" style="height: 400px;">
  <div class="card-body">
    <h5 class="card-title">Fisiatria</h5>
    <p class="card-text">La medicina física se ocupa de la prevención y el tratamiento de enfermedades o lesiones con métodos físicos, como el uso de ejercicios y máquinas. También se llama especialista en medicina física.</p>
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
                Medico Fisiatrico y Fisiatra <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Ortopedico y Fisiatra <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Ortopedico y Fisiatra <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Ortopedico y Fisiatra <br>
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
Podología Médica - Podología Pediátrica - Podología en San Bernardino - Podología en Caracas - Centro de Podología en Caracas - Podología en Caracas - Podología COP - Doctores Podologos - Medicos Podologos - Mejor Podologo de Venezuela - Podologo en Caracas - Podologos en San Bernardino - Podologos Infantiles - Especialidad Podología - Fisiatría Médica - Fisiatría Pediátrica - Fisiatría en San Bernardino - Fisiatría en Caracas - Centro de Fisiatría en Caracas - Fisiatría en Caracas - Fisiatría COP - Doctores Ortopedicos - Medicos Ortopedicos - Mejor Ortopedico de Venezuela - Ortopedico en Caracas - Ortopedicos en San Bernardino - Ortopedicos Infantiles - Especialidad Fisiatría.
@endsection