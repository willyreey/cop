@extends('template')

<title>ANALGESIA-POSTOPERATORIA</title>

@section("content")
<div class="row">
            <div class="col-12">
                <h4 class="text-center">ANALGESIA POSTOPERATORIA SAN BERNARDINO - ANALGESIA POSTOPERATORIA EN GENERAL</h4>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/analgesia.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/analgesia.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/posoperatoria.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/posoperatoria.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6">
            <p class="text-justify">
             El dolor postoperatorio puede ser muy intenso según la cirugía. Hay cirugías que provocan un dolor postoperatorio leve como la cirugía de mama, dolor moderado como la laparoscopia o intenso como la cirugía hepática, torácica o la prótesis de rodilla. El dolor leve e incluso el moderado es controlado fácilmente con analgésicos antiinflamatorios no esteroidales ( AINEs). <br>El dolor intenso es un verdadero reto para el anestesiólogo puesto que hay trabajos que demuestran que un buen control del dolor mejora el estado funcional y la recuperación del paciente.<br>
            El Departamento de Anestesiología cuenta con  7 médicos anestesiólogos  , que no se limitan a la evaluaciones pre anestésicas y al acto quirúrgico , sino que también proponen la Analgesia postoperatoria, S.A.P.<br>
            Los beneficios el S.A. P. van desde la disminución o ausencia total del dolor postoperatorio, hasta la mas rápida recuperación, y menor numero de complicaciones en el postoperatorio inmediato.
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
        <div class="card col-sm-12 col-md-3 cardDoc " style="width: 18rem;">
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
CENTRO ANALGESIA POSOPERATORIA DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN ANALGESIA POSOPERATORIA - EMERGENCIAS ANALGESIA POSOPERATORIAS - MEDICOS ANALGESIA POSOPERATORIAS CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES ANALGESIA POSOPERATORIAS - CLINICA ANALGESIA POSOPERATORIA EN SAN BERNARDINO - EXAMENES ANALGESIA POSOPERATORIAS 24 HORAS - CITAS DE ANALGESIA POSOPERATORIA - CONSULTORIOS PARA CITAS DE ANALGESIA POSOPERATORIA - SALA DE EMERGENCIA EN ANALGESIA POSOPERATORIA  - CENTRO MEDICO EN ANALGESIA POSOPERATORIA - MEDICOS ANALGESIA POSOPERATORIAS QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN ANALGESIA POSOPERATORIA -  UNIDAD DE ANALGESIA POSOPERATORIA EN CARACAS - CLINICA ANALGESIA POSOPERATORIA EN CARACAS VENEZUELA - MEDICOS ANALGESIA POSOPERATORIAS EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - ANALGESIA POSOPERATORIAS EN CARACAS- MEDICOS  ANALGESIA POSOPERATORIAS EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - ANALGESIA POSOPERATORIAS EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.
@endsection