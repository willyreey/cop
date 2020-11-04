@extends('template')

     <title>FARMACIA Y UNIDOSIS</title>

@section("content")
<div class="row">
            <div class="col-12">
                <h4 class="text-center">FARMACIA Y UNIDOSIS SAN BERNARDINO - FARMACIA Y UNIDOSIS EN GENERAL</h4>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/primeros2.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/ambulancia.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/analgesia.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/primeros2.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6">
            <p class="text-justify">
            • La Farmacia del C.O.P y  Unidosis,  se encuentran bajo la Dirección de un Farmaceuta Regente, y de auxiliares de farmacia.<br>
            • Contamos con la Unidosis y la Unidad de mezclas,  que es el manejo de dosis únicas preparadas en estrictas condiciones de higiene, lo que permite un mejor manejo y economía de los tratamientos indicados.<br>
            • La Unidosis puede incluso preparar las medicinas de manera personalizada, para el posterior tratamiento a domicilio , con un costo inferior a una Farmacia Comercial, y sin sobrantes de medicamentos.

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
CENTRO FARMACIA Y UNIDOSIS DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN FARMACIA Y UNIDOSIS - EMERGENCIAS FARMACIA Y UNIDOSIS - MEDICOS FARMACIA Y UNIDOSIS CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES FARMACIA Y UNIDOSIS - CLINICA FARMACIA Y UNIDOSIS EN SAN BERNARDINO - EXAMENES FARMACIA Y UNIDOSIS 24 HORAS - CITAS DE FARMACIA Y UNIDOSIS - CONSULTORIOS PARA CITAS DE FARMACIA Y UNIDOSIS - SALA DE EMERGENCIA EN FARMACIA Y UNIDOSIS  - CENTRO MEDICO EN FARMACIA Y UNIDOSIS - MEDICOS FARMACIA Y UNIDOSIS QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN FARMACIA Y UNIDOSIS -  UNIDAD DE FARMACIA Y UNIDOSIS EN CARACAS - CLINICA CUIDADOS POSOPERATORIA EN CARACAS VENEZUELA - MEDICOS FARMACIA Y UNIDOSIS EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - FARMACIA Y UNIDOSIS EN CARACAS- MEDICOS  FARMACIA Y UNIDOSIS EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - FARMACIA Y UNIDOSIS EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.
@endsection