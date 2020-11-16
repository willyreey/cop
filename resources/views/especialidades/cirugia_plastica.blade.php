@extends('template')
@section("meta")

    <meta name="description" content="Cirugía Plastica Médica, Cirugía Plastica Pediátrica, Cirugía Plastica en San Bernardino, Cirugía Plastica en Caracas, Centro de Cirugía Plastica en Caracas, Cirugía Plastica en Caracas, Cirugía Plastica COP, Doctores Cirujanos plasticos, Medicos Cirujanos plasticos, Mejor Cirujanos plastico de Venezuela, Cirujanos plastico en Caracas, Cirujanos plasticos en San Bernardino, Cirujanos plasticos Infantiles, Especialidad Cirugía Plastica, Cirugía Plastica Médica, Cirugía Plastica Pediátrica, Cirugía Plastica en San Bernardino, Cirugía Plastica en Caracas, Centro de Cirugía Plastica en Caracas, Cirugía Plastica en Caracas, Cirugía Plastica COP, Doctores Cirujanos plasticos, Medicos Cirujanos plasticos, Mejor Cirujanos plastico de Venezuela, Cirujanos plastico en Caracas, Cirujanos plasticos en San Bernardino, Cirujanos plasticos Infantiles, Especialidad Cirugía Plastica.">

     <meta name="keywords" content="CENTRO, Cirujanos plastico,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, Cirugía Plastica, PIE Y MANOS, EMERGENCIAS, Cirugía Plastica, CIRUGIAS, EMERGENCIA, Cirugía PlasticaS, MEDICOS, Cirujanos plasticoS, CLINICA, Cirugía Plastica, Cirugía Plastica, SAN BERNARDINO, CITAS, Cirugía Plastica, CONSULTORIOS, CITAS,Cirugía Plastica, SALA DE EMERGENCIA, Cirugía Plastica, Cirugía Plastica,  MEDICOS, Cirujanos plasticoS, QUIRURGICOS,  ESPECIALISTAS, Cirugía Plastica, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, Cirugía Plastica, CARACAS, VENEZUELA, CLINICA, Cirugía Plastica, CARACAS, VENEZUELA, MEDICOS, Cirujanos plasticoS, Cirujanos plasticoS EN CARACAS VENEZUELA- CLINICA Cirugía Plastica, CARACAS,Cirujanos plasticoS,MEDICOS, CIRUJANOS, Cirujanos plasticoS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, Cirugía Plastica, TRAUMA, QUIRURGICAS, Cirujanos plasticoS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, Cirujanos plastico,  COP">

    <title>COP- CENTRO CIRUJANO PLASTICO SAN BERNARDINO, MEDICOS CIRUJANOS PLASTICANOS - CLINICA DE CIRUGÍA PLASTICA</title>
@endsection
@section("content")

<div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO CIRUJANO PLASTICO SAN BERNARDINO</h2>
            </div>
        </div>
        <div class="p-2"></div>

<div class="card mb-3">
  <img src="{{ asset('img/cirugia_plastica/cirugia_plastica.jpg') }}" class="card-img-top" style="height: 400px;">
  <div class="card-body">
    <h5 class="card-title">Cirugía Plastica</h5>
    <p class="card-text">La Cirugía Plástica es una especialidad quirúrgica que se ocupa de la corrección de todo proceso congénito, adquirido, tumoral o simplemente involutivo, que requiera reparación o reposición, o que afecte a la forma y/o función corporal. Sus técnicas están basadas en el transplante y la movilización de tejidos mediante injertos y colgajos o incluso implantes de material inerte.</p>
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
                Medico Cirujanos plastico <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Cirujanos plastico <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Cirujanos plastico <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-12 col-sm-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Cirujanos plastico <br>
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
Cirugía Plastica Médica - Cirugía Plastica Pediátrica - Cirugía Plastica en San Bernardino - Cirugía Plastica en Caracas - Centro de Cirugía Plastica en Caracas - Cirugía Plastica en Caracas - Cirugía Plastica COP - Doctores Cirujanos plasticos - Medicos Cirujanos plasticos - Mejor Podologo de Venezuela - Podologo en Caracas - Cirujanos plasticos en San Bernardino - Cirujanos plasticos Infantiles - Especialidad Cirugía Plastica - Cirugía Plastica Médica - Cirugía Plastica Pediátrica - Cirugía Plastica en San Bernardino - Cirugía Plastica en Caracas - Centro de Cirugía Plastica en Caracas - Cirugía Plastica en Caracas - Cirugía Plastica COP - Doctores Cirujanos plasticos - Medicos Cirujanos plasticos - Mejor Cirujanos plastico de Venezuela - Cirujanos plastico en Caracas - Cirujanos plasticos en San Bernardino - Cirujanos plasticos Infantiles - Especialidad Cirugía Plastica.
@endsection