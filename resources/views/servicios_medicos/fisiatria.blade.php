@extends('template')

     <title>FISITRIA</title>

@section("content")

<div class="row">
            <div class="col-12">
                <h4 class="text-center">FISIATRIA Y REHABILITACIÓN SAN BERNARDINO - FISIATRIA Y REHABILITACIÓN EN GENERAL</h4>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/img6.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/reemplazo3.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/reemplazo4.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/img6.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6">
            <p class="text-justify">
            • Ubicada en un agradable espacio, con vista panorámica sobre la ciudad, se encuentra esta unidad cuya función es la recuperación  precoz con el mínimo de secuelas de los pacientes con lesiones traumáticas, degenerativas, inflamatorias, neurológicas y musculo esqueléticas. Contamos con un equipo formado por médicos fisiatras y fisioterapeutas.<br>
            • Disponemos de un espacio gimnasio para ejercicios terapéuticos,  y con equipos de tens, electroterapia, ultrasonido, laser, estimulación de corrientes alternas, termoterapia , baño de parafina, entre otros.<br>
            • El servicio funciona de lunes a viernes en los horarios comprendidos entre 7 am y 5 pm. Atención personalizada y muy buena relación calidad precio.
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
                Medico Traumatologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Traumatologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Traumatologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Traumatologo <br>
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
CENTRO FISIATRIA Y REHABILITACIÓN DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN FISIATRIA Y REHABILITACIÓN - EMERGENCIAS FISIATRIA Y REHABILITACIÓN - MEDICOS FISIATRIA Y REHABILITACIÓN CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES FISIATRIA Y REHABILITACIÓN - CLINICA FISIATRIA Y REHABILITACIÓN EN SAN BERNARDINO - EXAMENES FISIATRIA Y REHABILITACIÓN 24 HORAS - CITAS DE FISIATRIA Y REHABILITACIÓN - CONSULTORIOS PARA CITAS DE FISIATRIA Y REHABILITACIÓN - SALA DE EMERGENCIA EN FISIATRIA Y REHABILITACIÓN  - CENTRO MEDICO EN FISIATRIA Y REHABILITACIÓN - MEDICOS FISIATRIA Y REHABILITACIÓN QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN FISIATRIA Y REHABILITACIÓN -  UNIDAD DE FISIATRIA Y REHABILITACIÓN EN CARACAS - CLINICA CUIDADOS POSOPERATORIA EN CARACAS VENEZUELA - MEDICOS FISIATRIA Y REHABILITACIÓN EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - FISIATRIA Y REHABILITACIÓN EN CARACAS- MEDICOS  FISIATRIA Y REHABILITACIÓN EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - FISIATRIA Y REHABILITACIÓN EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.
@endsection