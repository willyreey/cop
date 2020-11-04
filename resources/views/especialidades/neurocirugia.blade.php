@extends('template')
@section("meta")

    <meta name="description" content="Neurocirugía Médica, Neurocirugía Pediátrica, Neurocirugía en San Bernardino, Neurocirugía en Caracas, Centro de Neurocirugía en Caracas, Neurocirugía en Caracas, Neurocirugía COP, Doctores Neurocirujanos, Medicos Neurocirujanos, Mejor Neurocirujano de Venezuela, Neurocirujano en Caracas, Neurocirujanos en San Bernardino, Neurocirujanos Infantiles, Especialidad Neurocirugía, Neurocirugía Médica, Neurocirugía Pediátrica, Neurocirugía en San Bernardino, Neurocirugía en Caracas, Centro de Neurocirugía en Caracas, Neurocirugía en Caracas, Neurocirugía COP, Doctores Neurocirujanos, Medicos Neurocirujanos, Mejor Neurocirujano de Venezuela, Neurocirujano en Caracas, Neurocirujanos en San Bernardino, Neurocirujanos Infantiles, Especialidad Neurocirugía.">

     <meta name="keywords" content="CENTRO, Neurocirujano,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, Neurocirugía, PIE Y MANOS, EMERGENCIAS, Neurocirugía, CIRUGIAS, EMERGENCIA, NeurocirugíaS, MEDICOS, NeurocirujanoS, CLINICA, Neurocirugía, Neurocirugía, SAN BERNARDINO, CITAS, Neurocirugía, CONSULTORIOS, CITAS,Neurocirugía, SALA DE EMERGENCIA, Neurocirugía, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, Neurocirugía,  MEDICOS, NeurocirujanoS, QUIRURGICOS,  ESPECIALISTAS, Neurocirugía, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, Neurocirugía, CARACAS, VENEZUELA, CLINICA, Neurocirugía, CARACAS, VENEZUELA, MEDICOS, NeurocirujanoS, NeurocirujanoS EN CARACAS VENEZUELA- CLINICA Neurocirugía, CARACAS,NeurocirujanoS,MEDICOS, CIRUJANOS, NeurocirujanoS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, Neurocirugía, TRAUMA, QUIRURGICAS, NeurocirujanoS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, Neurocirujano,  COP">

    <title>COP- CENTRO NEUROCIRUJANO SAN BERNARDINO, MEDICOS EN NEUROCIRUGÍA - CLINICA DE NEUROCIRUGÍA</title>
@endsection
@section("content")

<div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO DE NEUROCIRUGIA SAN BERNARDINO</h2>
            </div>
        </div>
        <div class="p-2"></div>

<div class="card mb-3">
  <img src="{{ asset('img/neurocirugia/neurocirugía.jpg') }}" class="card-img-top" style="height: 400px;">
  <div class="card-body">
    <h5 class="card-title">Neurocirugía</h5>
    <p class="card-text">La cirugía neurológica abarca el tratamiento quirúrgico, no quirúrgico y estereotáctico de pacientes adultos y pediátricos. Pacientes con enfermedades del sistema nervioso, tanto del cerebro como de las meninges, la base del cráneo y de sus vasos sanguíneos, incluyendo el tratamiento quirúrgico y endovascular de procesos patológicos de los vasos intra y extracraneales que irrigan al cerebro y a la médula espinal. Lesiones de la glándula pituitaria; ciertas lesiones de la médula espinal, de las meninges y de la columna vertebral, incluyendo los que pueden requerir el tratamiento mediante fusión, instrumentación o técnicas endovasculares y desórdenes de los nervios craneales y espinales, todo a lo largo de su distribución.</p>
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
                Medico Neurocirujano <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Neurocirujano <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Neurocirujano <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Neurocirujano <br>
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
Neurocirugía Médica - Neurocirugía Pediátrica - Neurocirugía en San Bernardino - Neurocirugía en Caracas - Centro de Neurocirugía en Caracas - Neurocirugía en Caracas - Neurocirugía COP - Doctores Neurocirujanos - Medicos Neurocirujanos - Mejor Podologo de Venezuela - Podologo en Caracas - Neurocirujanos en San Bernardino - Neurocirujanos Infantiles - Especialidad Neurocirugía - Neurocirugía Médica - Neurocirugía Pediátrica - Neurocirugía en San Bernardino - Neurocirugía en Caracas - Centro de Neurocirugía en Caracas - Neurocirugía en Caracas - Neurocirugía COP - Doctores Neurocirujanos - Medicos Neurocirujanos - Mejor Neurocirujano de Venezuela - Neurocirujano en Caracas - Neurocirujanos en San Bernardino - Neurocirujanos Infantiles - Especialidad Neurocirugía.
@endsection