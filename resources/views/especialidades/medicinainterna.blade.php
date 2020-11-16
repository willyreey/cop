@extends('template')

    <meta name="description" content="Medicina interna, Medicina Pediátrica, Medicina en San Bernardino, Medicina en Caracas, Centro de Medicina en Caracas, Medicina en Caracas, Medicina COP, Consultas de medicina interna , Mejor doctor de Venezuela, Cardiologo en Caracas, Medicina interna en San Benardino,  Especialidades de la medicina interna.">

     <meta name="keywords" content="CENTRO, MEDICINA INTERNA,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, MEDICINA INTERNA, PIE Y MANOS, EMERGENCIAS, MEDICINA INTERNA, CIRUGIAS, EMERGENCIA, MEDICINA INTERNAS, MEDICOS, MEDICINA INTERNAS, CLINICA, MEDICINA INTERNA, PODOLOGICA, SAN BERNARDINO, CITAS, MEDICINA INTERNA, CONSULTORIOS, CITAS,MEDICINA INTERNA, SALA DE EMERGENCIA, MEDICINA INTERNA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, MEDICINA INTERNA,  MEDICOS, MEDICINA INTERNAS, QUIRURGICOS,  ESPECIALISTAS, MEDICINA INTERNA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, MEDICINA INTERNA, CARACAS, VENEZUELA, CLINICA, MEDICINA INTERNA, CARACAS, VENEZUELA, MEDICOS, MEDICINA INTERNAS, MEDICINA INTERNAS EN CARACAS VENEZUELA- CLINICA MEDICINA INTERNA, CARACAS,MEDICINA INTERNAS,MEDICOS, CIRUJANOS, MEDICINA INTERNAS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, PSICOLOGICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- MÉDICINA INTERNA - CLINICA  PODOLOGICO</title>


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
    <form action="{{route('medicinainterna')}}" method="POST">
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
Medicina interna - Medicina Pediátrica - Medicina en San Bernardino - Medicina en Caracas - Centro de Medicina en Caracas - Medicina en Caracas - Medicina COP - Consultas de medicina interna  - Mejor doctor de Venezuela - Cardiologo en Caracas - Medicina interna en San Benardino -  Especialidades de la medicina interna.

@endsection