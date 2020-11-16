@extends('template')

    <meta name="description" content="Cirugía Médica, Cirugía Pediátrica, Cirugía en San Bernardino, Cirujanos en Caracas, Centro de Cirujanos en Caracas, Cirugía en Caracas, Cirugía COP, Doctores Cirujanos, Medicos Cirujanos, Mejor Cirujano de Venezuela, Cirujano en Caracas, Cirujia Plastica, Cirugía General, Cirugía de Emergencia, Cirugía Quirúrgica.">

     <meta name="keywords" content="CENTRO, PSICOLOGICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, PSICOLOGÍA, PIE Y MANOS, EMERGENCIAS, PSICOLOGICA, CIRUGIAS, EMERGENCIA, PSICOLOGICAS, MEDICOS, PSICOLOGICOS, CLINICA, PSICOLOGICA, PODOLOGICA, SAN BERNARDINO, CITAS, PSICOLOGÍA, CONSULTORIOS, CITAS,PSICOLOGÍA, SALA DE EMERGENCIA, PSICOLOGÍA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, PSICOLOGÍA,  MEDICOS, PSICOLOGICOS, QUIRURGICOS,  ESPECIALISTAS, PSICOLOGÍA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, PSICOLOGÍA, CARACAS, VENEZUELA, CLINICA, PSICOLOGÍA, CARACAS, VENEZUELA, MEDICOS, PSICOLOGICOS, PSICOLOGICOS EN CARACAS VENEZUELA- CLINICA PSICOLOGICA, CARACAS,PSICOLOGICOS,MEDICOS, CIRUJANOS, PSICOLOGICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, PSICOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO CIRUJANO SAN BERNARDINO, CIRUGÍA EN GENERAL - CLINICA  PODOLOGICO</title>

@section("content")

 <div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO CIRUJANO SAN BERNARDINO - CIRUGÍA EN GENERAL</h2>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/cirugia/austin-distel-7bMdiIqz_J4-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/cirugia/austrian-national-library-ciMJn3mD5u8-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/cirugia/h-shaw-hOfBn4jQEyo-unsplash.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/cirugia/piron-guillaume-y6aFH6ZhI7s-unsplash.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            Es una especialidad médica que utiliza técnicas manuales e instrumentales operativas en un paciente, con el objetivo de investigar o tratar enfermedades o lesiones.
            </p>
        </div>
    </div>
    <div class="p-2"></div>
    <div class="p-2"></div>
    <div class="row">
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-DPEPYPBZpB8-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Mario Hernandez <br>
                Medico Cirujano <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Cirujano <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Cirujano <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Cirujano <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>

<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
<form action="{{route('cirugia')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Barra de preguntas y respuestas:</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="overflow:auto;resize:none" name="pregunta"></textarea>
  </div>
  <div class="form-group">
    <input type="checkbox"> Acepto los Términos y Condiciones
  </div>
    <div class="form-group">
           @guest
        @if (Route::has('register'))
            <button class="btn btn-primary" disabled style="margin-right: 10px">ENVIAR</button><b>Debe estar <a href="{{ route('register') }}">Registrado</a> para poder realizar un comentario</b>
        @endif
    


                            
         @else
            <button type="submit" class="btn btn-primary">ENVIAR</button>

     @endguest
        
  </div>

  <div class="scroll col-lg-12">
        
    @forelse ($sql as $dato)
    <div class="preguntas">  
      <b style="margin-left: 10px">{{ $dato->usuario }}: </b>{{$dato->pregunta}} <br>    
    </div>
  
    @empty
    <center>
        <br><br><br>
        <b class="no-comments">No hay comentarios</b>
        <style>
            .scroll:hover{
                filter: blur(1px);
                transition: 0.7s;
            }
        </style>
    </center>
  
  @endforelse

    <div class="p-2"></div>

</div>
</form>

<div class="p-1 w-100"></div>

@endsection

@section("footer")
Cirugía Médica - Cirugía Pediátrica - Cirugía en San Bernardino - Cirujanos en Caracas - Centro de Cirujanos en Caracas - Cirugía en Caracas - Cirugía COP - Doctores Cirujanos - Medicos Cirujanos - Mejor Cirujano de Venezuela - Cirujano en Caracas - Cirujia Plastica - Cirugía General - Cirugía de Emergencia - Cirugía Quirúrgica.

@endsection
