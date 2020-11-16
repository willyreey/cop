@extends('template')

     <title>AMBULANCIAS

</title>

@section("content")

<div class="row">
        <div class="col-12"><h1>AMBULANCIAS</h1></div>
      </div>
      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/ambulancia.jpg')}}"></div>
            <div class="p-2"></div>
            <div class="col-12"><img class="img-fluid" src="{{asset('img/servicios_medicos/ambulancia2.jpg')}}"></div>
          </div>
        </div>
        <div class="col"><img class="img-fluid" src="{{asset('img/servicios_medicos/ambulancia3.jpg')}}"></div>
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
  <form action="{{route('ambulancia')}}" method="POST">
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

Servicio de Ambulancia - Servicio de Ambulancia en San Bernardino - Servicio de Ambulancia en Caracas - Cardiologia en Caracas - Servicio de Ambulancia COP.
@endsection
