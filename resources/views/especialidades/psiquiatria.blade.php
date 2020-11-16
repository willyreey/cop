@extends('template')

    <meta name="description" content="CENTRO PSIQUIATRICO DE SAN BERNARDINO, SERVICIO MEDICO ESPECIALISTA EN PSIQUIATRIA, EMERGENCIAS PSIQUIATRICAS, MEDICOS PSIQUIATRICOS CON AMPLIA TRAYECTORIA, CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES PSIQUIATRICAS, CLINICA PSIQUIATRICA EN SAN BERNARDINO, EXAMENES PSIQUIATRICOS 24 HORAS, CITAS DE PSIQUIATRIA, CONSULTORIOS PARA CITAS DE PSIQUIATRIA, SALA DE EMERGENCIA EN PSIQUIATRIA , CENTRO MEDICO EN PSIQUIATRIA, MEDICOS PSIQUIATRICOS QUIRURGICOS EN SAN BERNARDINO, ESPECIALISTAS EN PSIQUIATRIA,  UNIDAD DE PSIQUIATRIA EN CARACAS, CLINICA PSIQUIATRIA EN CARACAS VENEZUELA, MEDICOS PSIQUIATRICOS EN CARACAS VENEZUELA, CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS, PSIQUIATRICOS EN CARACAS- MEDICOS  PSIQUIATRICOS EN CARACAS VENEZUELA, EMERGENCIA MEDICA PODOLOGICA, PSIQUIATRICOS EN SAN BENADINO CARACAS VENEZUALA, CENTRO PODOLOGICO, COP.">

    <meta name="keywords" content="CENTRO, PSIQUIATRICO,SAN BERNADINO, SERVICIO, MEDICO, ESPECIALISTA, PSIQUIATRÍA, PIE Y MANOS, EMERGENCIAS, PSIQUIATRICA, CIRUGIAS, EMERGENCIA, PSIQUIATRICAS, MEDICOS, PSIQUIATRICOS, CLINICA, PSIQUIATRICA, PODOLOGICA, SAN BERNARDINO, CITAS, PSIQUIATRIA, CONSULTORIOS, CITAS,PSIQUIATRÍA, SALA DE EMERGENCIA, PSIQUIATRIA, SALA DE YESO Y PROTESIS, CENTRO, MEDICO, PSIQUIATRIA,  MEDICOS, PSIQUIATRICOS, QUIRURGICOS,  ESPECIALISTAS, PSIQUIATRÍA, CIRUGIA, COLUMNA, PIES, MANOS, BRAZOS, RODILLAS, UNIDAD, PSIQUIATRIA, CARACAS, VENEZUELA, CLINICA, PSIQUIATRIA, CARACAS, VENEZUELA, MEDICOS, PSIQUIATRICOS, PSIQUIATRICOS EN CARACAS VENEZUELA- CLINICA PSIQUIATRICA, CARACAS,PSIQUIATRICOS,MEDICOS, CIRUJANOS, PSIQUIATRICOS, CARACAS - VENEZUELA, EMERGENCIA, MEDICA, PODOLOGICA, TRAUMA, QUIRURGICAS, PSIQUIATRICOS, SAN BENADINO, CARACAS, VENEZUALA , CENTRO, PODOLOGICO,  COP">

    <title>COP- CENTRO DE PSIQUIATRÍA SAN BERNARDINO, MEDICOS EN PSIQUIATRÍA - CLINICA  PODOLOGICO</title>


@section("content")

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">CENTRO PSIQUIATRICO SAN BERNARDINO - PSIQUIATRÍA EN GENERAL</h2>
            </div>
        </div>
        <div class="p-2"></div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/psiquiatria/20180724161236-1.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{ asset('img/psiquiatria/psiquiatra.jpg') }}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{ asset('img/psiquiatria/psiquiatria-geriatrica-1024x683.jpg') }}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{ asset('img/psiquiatria/Saúde-do-idoso-scaled.jpg') }}" alt=""></div>
            </div>
        </div>
        <div class="col-6 align-self-center">
            <p class="text-justify h5">
            Parte de la medicina que se ocupa del estudio, el diagnóstico, el tratamiento y la prevención de las enfermedades mentales de carácter orgánico y no orgánico.
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
                Medico Psiquiátrico <br>
                10 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/ashkan-forouzani-IXSgwfBGnCg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Jose Garcia <br>
                Medico Psiquiátrico <br>
                8 años de experiencia <br>
                Horario: 8:00am a 2:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/national-cancer-institute-kooSjlL8LnQ-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Juan Lopez <br>
                Medico Psiquiátrico <br>
                14 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
        <div class="card col-sm-12 col-md-3 cardDoc">
            <img class="card-img-top" src="{{asset('img/doctores/foto-garage-ag-FSkgvcrRZmg-unsplash.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center">
                Roberto Perez <br>
                Medico Psiquiátrico <br>
                20 años de experiencia <br>
                Horario: 8:00am a 4:00pm</p>
            </div>
        </div>
    </div>
</section>


<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
    <form action="{{route('psiquiatria')}}" method="POST">
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
CENTRO PSIQUIATRICO DE SAN BERNARDINO - SERVICIO MEDICO ESPECIALISTA EN PSIQUIATRIA - EMERGENCIAS PSIQUIATRICAS - MEDICOS PSIQUIATRICOS CON AMPLIA TRAYECTORIA - CONTAMOS CON HOSPILAIZACION PARA PACIENTES CON AFECIONES PSIQUIATRICAS - CLINICA PSIQUIATRICA EN SAN BERNARDINO - EXAMENES PSIQUIATRICOS 24 HORAS - CITAS DE PSIQUIATRIA - CONSULTORIOS PARA CITAS DE PSIQUIATRIA - SALA DE EMERGENCIA EN PSIQUIATRIA  - CENTRO MEDICO EN PSIQUIATRIA - MEDICOS PSIQUIATRICOS QUIRURGICOS EN SAN BERNARDINO - ESPECIALISTAS EN PSIQUIATRIA -  UNIDAD DE PSIQUIATRIA EN CARACAS - CLINICA PSIQUIATRIA EN CARACAS VENEZUELA - MEDICOS PSIQUIATRICOS EN CARACAS VENEZUELA - CLINICA PODOLOGICA Y ORTOPEDICAS EN CARACAS - PSIQUIATRICOS EN CARACAS- MEDICOS  PSIQUIATRICOS EN CARACAS VENEZUELA - EMERGENCIA MEDICA PODOLOGICA - PSIQUIATRICOS EN SAN BENADINO CARACAS VENEZUALA - CENTRO PODOLOGICO - COP.
@endsection