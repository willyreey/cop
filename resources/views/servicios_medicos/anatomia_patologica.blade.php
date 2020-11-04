@extends('template')

<title>ANATOMIA-PATOLÓGICA</title>

@section("content")
<div class="row">
            <div class="col-12">
                <h4 class="text-center">ANATOMÍA PATOLÓGICA SAN BERNARDINO - ANATOMÍA PATOLÓGICA EN GENERAL</h4>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="./img/anatomia1.jpg" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="./img/anatomia2.jpg" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="./img/anatomia3.jpg" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="./img/anatomia4.jpg" alt=""></div>
            </div>
        </div>
        <div class="col-6">
            <p class="text-justify">
            Médicos Patólogos realizan todas  los exámenes necesarios para completar nuestro servicio al paciente, biopsias, cortes congelados, y otros estudios requeridos
            </p>
        </div>
    </div>
    <div class="p-2"></div>
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
CENTRO ANATOMÍA PATOLÓGICA DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN ANATOMÍA PATOLÓGICA - EMERGENCIAS ANATOMÍA PATOLÓGICA - MEDICOS ANATOMÍA PATOLÓGICA CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES ANATOMÍA PATOLÓGICA - CLINICA ANATOMÍA PATOLÓGICA EN SAN BERNARDINO - EXAMENES ANATOMÍA PATOLÓGICA 24 HORAS - CITAS DE ANATOMÍA PATOLÓGICA - CONSULTORIOS PARA CITAS DE ANATOMÍA PATOLÓGICA - SALA DE EMERGENCIA EN ANATOMÍA PATOLÓGICA  - CENTRO MEDICO EN ANATOMÍA PATOLÓGICA - MEDICOS ANATOMÍA PATOLÓGICA QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN ANATOMÍA PATOLÓGICA -  UNIDAD DE ANATOMÍA PATOLÓGICA EN CARACAS - CLINICA CUIDADOS POSOPERATORIA EN CARACAS VENEZUELA - MEDICOS ANATOMÍA PATOLÓGICA EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - ANATOMÍA PATOLÓGICA EN CARACAS- MEDICOS  ANATOMÍA PATOLÓGICA EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - ANATOMÍA PATOLÓGICA EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.
@endsection