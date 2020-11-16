@extends('template')

<title>QUIROFANO</title>

@section("content")
<h1>QUIROFANO</h1>

    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/quirofano.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/quirofano2.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/quirofano3.jpg')}}" alt=""></div>
            </div>
            <div class="p-2"></div>
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/quirofano4.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="col-6">
            <p class="text-justify">El quirófano es aquella sala que se halla en sanatorios, hospitales o centros de atención médica y que está especialmente acondicionada para la práctica de operaciones quirúrgicas a aquellos pacientes que así lo demanden.</p>
        </div>
    </div>
    <div class="p-2"></div>
 <div class="row">
    <div class="card col-sm cardDoc" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/doctor.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Mario Hernandez - Cirujano</p>
  </div>
</div>
<div class="card col-sm cardDoc" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/doctor2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Jose Garcia - Terapeuta</p>
  </div>
</div>
<div class="card col-sm cardDoc" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/doctor3.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Maria Perez - Medico General</p>
  </div>
</div>
</div>
<div class="p-2"></div>
<div class="alert alert-info" role="alert">
  <p>NOTA. SI  USTED  QUIERE REALIZARCE ALGUN TIPO DE EXAMEN QUE NO LO TENGAMOS EN LA LISTA, NO DUDE EN SOLICITARLO QUE LE CONTESTAREMOS
  A LA MENSAJERIA DE SU PERFIL DE USUARIO</p>
  <p>NOTA. USTED RECIVIRA LOS RESULTADOS POR SU USUARIO EN NUESTRO PORTAL,  EN UN ARCHIVO ADJUNTO O POR TEXTO</p>
</div>
<!--<b>
</b>
<br>
<br>-->
</section>


<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
  <form action="{{route('quirofano')}}" method="POST">
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