@extends('template')
@section("meta")

    <meta name="description" content="Nutrición Médica, Nutrición Pediátrica, Nutrición en San Bernardino, Nutrición en Caracas, Centro de Nutrición en Caracas, Nutrición en Caracas, Nutrición COP, Doctores Nutricionistas, Medicos Nutricionistas, Mejor Nutricionista de Venezuela, Nutricionista en Caracas, Nutricionistas en San Bernardino, Nutricionistas Infantiles, Especialidad Nutrición, Nutrición Médica, Nutrición Pediátrica, Nutrición en San Bernardino, Nutrición en Caracas, Centro de Nutrición en Caracas, Nutrición en Caracas, Nutrición COP, Doctores Nutricionistas, Medicos Nutricionistas, Mejor Nutricionista de Venezuela, Nutricionista en Caracas, Nutricionistas en San Bernardino, Nutricionistas Infantiles, Especialidad Nutrición.">

     <meta name="keywords" content="CENTRO, Nutricionista,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, Nutrición, PIE Y MANOS, EMERGENCIAS, Nutrición, CIRUGIAS, EMERGENCIA, NutriciónS, MEDICOS, NutricionistaS, CLINICA, Nutrición, Nutrición, SAN BERNARDINO, CITAS, Nutrición, CONSULTORIOS, CITAS,Nutrición, SALA DE EMERGENCIA, Nutrición, NutricionistaS, QUIRURGICOS,  ESPECIALISTAS, Nutrición, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, Nutrición, CARACAS, VENEZUELA, CLINICA, Nutrición, CARACAS, VENEZUELA, MEDICOS, NutricionistaS, NutricionistaS EN CARACAS VENEZUELA- CLINICA Nutrición, CARACAS,NutricionistaS,MEDICOS, CIRUJANOS, NutricionistaS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, Nutrición, TRAUMA, QUIRURGICAS, NutricionistaS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, Nutricionista,  COP">

    <title>COP- CENTRO NUTRCIONISTA SAN BERNARDINO, MEDICOS EN Nutrición - CLINICA DE NUTRICIÓN</title>
@endsection
@section("content")

<div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO DE NUTRICIÓN SAN BERNARDINO</h2>
            </div>
        </div>
        <div class="p-2"></div>

<div class="card mb-3">
  <img src="{{ asset('img/nutricion/nutricion.jpg') }}" class="card-img-top" style="height: 400px;">
  <div class="card-body">
    <h5 class="card-title">Nutrición</h5>
    <p class="card-text">Tratamiento basado en la nutrición. Incluye comprobar el estado nutricional de una persona y dar los alimentos o nutrientes apropiados para tratar afecciones tales como las causadas por la diabetes, la cardiopatía y el cáncer. Puede abarcar cambios sencillos en el régimen alimentario de una persona, o alimentación intravenosa o con sonda. La terapia nutricional médica puede ayudar a que los pacientes se recuperen más rápido y pasen menos tiempo en el hospital. También se llama terapia nutricional.</p>
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
                Medico Nutricionista <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Nutricionista <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Nutricionista <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Nutricionista <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>

<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
    <form action="{{route('coloproctologia')}}" method="POST">
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
</div>

<div class="p-1 w-100"></div>

@endsection

@section("footer")
Nutrición Médica - Nutrición Pediátrica - Nutrición en San Bernardino - Nutrición en Caracas - Centro de Nutrición en Caracas - Nutrición en Caracas - Nutrición COP - Doctores Nutricionistas - Medicos Nutricionistas - Mejor Podologo de Venezuela - Podologo en Caracas - Nutricionistas en San Bernardino - Nutricionistas Infantiles - Especialidad Nutrición - Nutrición Médica - Nutrición Pediátrica - Nutrición en San Bernardino - Nutrición en Caracas - Centro de Nutrición en Caracas - Nutrición en Caracas - Nutrición COP - Doctores Nutricionistas - Medicos Nutricionistas - Mejor Nutricionista de Venezuela - Nutricionista en Caracas - Nutricionistas en San Bernardino - Nutricionistas Infantiles - Especialidad Nutrición.
@endsection