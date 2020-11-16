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
    <form action="{{route('analgesia')}}" method="POST">
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
@endsection

@section("footer")

Servicio de Ambulancia - Servicio de Ambulancia en San Bernardino - Servicio de Ambulancia en Caracas - Cardiologia en Caracas - Servicio de Ambulancia COP.
@endsection