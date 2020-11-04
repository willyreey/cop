@extends('template')
@section("meta")

    <meta name="description" content="Medicina interna, Medicina Pediátrica, Medicina en San Bernardino, Medicina en Caracas, Centro de Medicina en Caracas, Medicina en Caracas, Medicina COP, Consultas de medicina interna , Mejor doctor de Venezuela, Cardiologo en Caracas, Medicina interna en San Benardino,  Especialidades de la medicina interna.">

     <meta name="keywords" content="CENTRO, MEDICINA INTERNA,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, MEDICINA INTERNA, PIE Y MANOS, EMERGENCIAS, MEDICINA INTERNA, CIRUGIAS, EMERGENCIA, MEDICINA INTERNAS, MEDICOS, MEDICINA INTERNAS, CLINICA, MEDICINA INTERNA, PODOLOGICA, SAN BERNARDINO, CITAS, MEDICINA INTERNA, CONSULTORIOS, CITAS,MEDICINA INTERNA, SALA DE EMERGENCIA, MEDICINA INTERNA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, MEDICINA INTERNA,  MEDICOS, MEDICINA INTERNAS, QUIRURGICOS,  ESPECIALISTAS, MEDICINA INTERNA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, MEDICINA INTERNA, CARACAS, VENEZUELA, CLINICA, MEDICINA INTERNA, CARACAS, VENEZUELA, MEDICOS, MEDICINA INTERNAS, MEDICINA INTERNAS EN CARACAS VENEZUELA- CLINICA MEDICINA INTERNA, CARACAS,MEDICINA INTERNAS,MEDICOS, CIRUJANOS, MEDICINA INTERNAS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, PSICOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- MÉDICINA INTERNA - CLINICA  PODOLOGICO</title>
@endsection

@section("content")

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">MEDICINA INTERNA</h2>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/medicina-interna/national-cancer-institute-82BHTkmkDfU-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/medicina-interna/medicina.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/medicina-interna/medicina.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/medicina-interna/national-cancer-institute-82BHTkmkDfU-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            La medicina interna es una especialidad médica que atiende integralmente los problemas de salud en pacientes adultos, ingresados en un centro hospitalario o en consultas ambulatorias.​
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
                Medico Cardiologo <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Cardiologo <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Cardiologo <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Cardiologo <br>
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
       <label for="" class="text-justify"><b>Jesus Prin: </b>¿Hacen examen de la prostata?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen día, si..</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Elena Gutierrez: </b>¿Debo estar en ayunas para un examen de rutina?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen día, depende del examen.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Armando Paredes: </b>¿Hasta que hora trabaja el Juan Lopez?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>respuesta: </b>Buen dia, de 8:00am a 4:00pm.</label>
    </div>
</div>
</div>

<div class="p-1 w-100"></div> 

@endsection

@section("footer")
Medicina interna - Medicina Pediátrica - Medicina en San Bernardino - Medicina en Caracas - Centro de Medicina en Caracas - Medicina en Caracas - Medicina COP - Consultas de medicina interna  - Mejor doctor de Venezuela - Cardiologo en Caracas - Medicina interna en San Benardino -  Especialidades de la medicina interna.

@endsection