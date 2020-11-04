@extends('template')

<title>IMAGINOLOGIA</title>

@section("content")
        <div class="row">
            <div class="col-12">
                <h4 class="text-center">IMAGINOLOGIA SAN BERNARDINO - IMAGINOLOGIA EN GENERAL</h4>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/tomografia.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/rayosx.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/rayosx.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/tomografia.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6">
            <p class="text-justify">
            Este Servicio otorga atención rápida y oportuna cuenta con:<br>
            • Equipos de primer nivel para pacientes ambulatorios y hospitalizados.<br>
            • Profesionales y técnicos médicos<br>
            •Radiología Convencional, Intensificador de Imagen, Tomógrafo, Ultrasonido .
            </p>
        </div>
    </div>
<hr>
<div class="p-2"></div>
<div class="row">
<div class="card col-sm-12 col-md-3 cardDoc" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-DPEPYPBZpB8-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Mario Hernandez <br>
                Medico Anestesiologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Anestesiologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Anestesiologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Anestesiologo <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
</div>

<hr>

<div class="border rounded" style="padding: 19px;">
<form>
<div class="form-group">
<label for="exampleFormControlTextarea1"><b>Barra de preguntas y respuestas:</b></label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="overflow:auto;resize:none"></textarea>
</div>
<div class="form-group">
    <button type="button" onclick="return mensajepr()" class="btn btn-primary">ENVIAR</button>
</div>
</form>
<div class="p-2"></div>
<div class="row">
<div class="col-12 rounded border">
   <label for="" class="text-justify"><b>Alejandra Carpio: </b>Tiene servicio de APS?</label>
</div>
<div class="col-12 table-primary rounded border">
    <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
</div>
<div class="p-2"></div>
<div class="col-12 rounded border">
    <label for="" class="text-justify"><b>MAtias Hernandez: </b>Tienen servicio de emergencia?</label>
</div>
<div class="col-12 table-primary rounded border">
    <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
</div>
<div class="p-2"></div>
<div class="col-12 rounded border">
    <label for="" class="text-justify"><b>Rosario Perez: </b>Cual es el horario para hacer examenes?</label>
</div>
<div class="col-12 table-primary rounded border">
    <label for="" class="text-justify"><b>respuesta: </b>Buen dia, de 8:00am a 4:00pm.</label>
</div>
</div>
</div>
@endsection

@section("footer")
CENTRO IMAGINOLOGIA DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN IMAGINOLOGIA - EMERGENCIAS IMAGINOLOGIA - MEDICOS IMAGINOLOGIA CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES IMAGINOLOGIA - CLINICA IMAGINOLOGIA EN SAN BERNARDINO - EXAMENES IMAGINOLOGIA 24 HORAS - CITAS DE IMAGINOLOGIA - CONSULTORIOS PARA CITAS DE IMAGINOLOGIA - SALA DE EMERGENCIA EN IMAGINOLOGIA  - CENTRO MEDICO EN IMAGINOLOGIA - MEDICOS IMAGINOLOGIA QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN IMAGINOLOGIA -  UNIDAD DE IMAGINOLOGIA EN CARACAS - CLINICA CUIDADOS POSOPERATORIA EN CARACAS VENEZUELA - MEDICOS IMAGINOLOGIA EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - IMAGINOLOGIA EN CARACAS- MEDICOS  IMAGINOLOGIA EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - IMAGINOLOGIA EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.
@endsection
