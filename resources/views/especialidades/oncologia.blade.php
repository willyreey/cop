@extends('template')
@section("meta")

    <meta name="description" content="CENTRO ONCOLOGICO DE SAN BERNARDINO, SERVICIO MEDICO ESPECIALISTA EN ONCOLOGÍA, EMERGENCIAS ONCOLOGICAS, MEDICOS ONCOLOGICOS CON AMPLIA TRAYECTORIA, CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES ONCOLOGICAS, CLINICA ONCOLOGICA EN SAN BERNARDINO, EXAMENES ONCOLOGICOS 24 HORAS, CITAS DE ONCOLOGÍA, CONSULTORIOS PARA CITAS DE ONCOLOGÍA, SALA DE EMERGENCIA EN ONCOLOGÍA , CENTRO MEDICO EN ONCOLOGÍA, MEDICOS ONCOLOGICOS QUIRURGICOS EN SAN BERNARDINO, ESPECIALISTAS EN ONCOLOGÍA,  UNIDAD DE ONCOLOGÍA EN CARACAS, CLINICA ONCOLOGÍA EN CARACAS VENEZUELA, MEDICOS ONCOLOGICOS EN CARACAS VENEZUELA, CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS, ONCOLOGICOS EN CARACAS- MEDICOS  ONCOLOGICOS EN CARACAS VENEZUELA, EMERGENCIA MEDICA PODOLOGICA, ONCOLOGICOS EN SAN BENADINO CARACAS VENEZUALA, CENTRO PODOLOGICO, COP.">

     <meta name="keywords" content="CENTRO, ONCOLOGICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, ONCOLOGÍA, PIE Y MANOS, EMERGENCIAS, ONCOLOGICA, CIRUGIAS, EMERGENCIA, ONCOLOGICAS, MEDICOS, ONCOLOGICOS, CLINICA, ONCOLOGICA, PODOLOGICA, SAN BERNARDINO, CITAS, ONCOLOGÍA, CONSULTORIOS, CITAS,ONCOLOGÍA, SALA DE EMERGENCIA, ONCOLOGÍA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, ONCOLOGÍA,  MEDICOS, ONCOLOGICOS, QUIRURGICOS,  ESPECIALISTAS, ONCOLOGÍA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, ONCOLOGÍA, CARACAS, VENEZUELA, CLINICA, ONCOLOGÍA, CARACAS, VENEZUELA, MEDICOS, ONCOLOGICOS, ONCOLOGICOS EN CARACAS VENEZUELA- CLINICA ONCOLOGICA, CARACAS,ONCOLOGICOS,MEDICOS, CIRUJANOS, ONCOLOGICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, ONCOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO ONCOLÓGICO SAN BERNARDINO, MEDICOS EN ONCOLOGÍA - CLINICA  PODOLOGICO</title>
@endsection
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
      <label for="" class="text-justify"><b>Juan Perez: </b>¿Trabajan con Uniseguros?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen día, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Gabriel Vasquez: </b>¿Donde estan ubicados?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Av. Eraso, Centro Ortopédico Podológico, San Bernardino, Caracas.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Natacha Lopez: </b>¿En que horario son las consultas?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, de 8:00am a 4:00pm.</label>
    </div>
</div>
</div>

<div class="p-1 w-100"></div>

@endsection

@section("footer")

Centro Oncologico De San Bernardino - Servicio Medico Especialista En Oncología - Emergencias Oncologicas - Medicos Oncologicos Con Amplia Trayectoria - Contamos Con Hospilaizacion Para Pacientes Con Afeciones Oncologicas - Clinica Oncologica En San Bernardino - Examenes Oncologicos 24 Horas - Citas De Oncología - Consultorios Para Citas De Oncología - Sala De Emergencia En Oncología - Centro Medico En Oncología - Medicos Oncologicos Quirurgicos En San Bernardino - Especialistas En Oncología - Unidad De Oncología En Caracas - Clinica Oncología En Caracas Venezuela - Medicos Oncologicos En Caracas Venezuela - Clinica Podologica Y Ortopedicas En Caracas - Oncologicos En Caracas- Medicos Oncologicos En Caracas Venezuela - Emergencia Medica Podologica - Oncologicos En San Benadino Caracas Venezuala - Centro Podologico - Cop.

@endsection
