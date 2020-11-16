@extends('template')

<title>RESONANCIAS - RAYOS X</title>

@section("content")

<div class="p-1 w-100"></div>
    <h3>RESONANCIAS - RAYOS X - COP - CENTRO ORTOPEDICO PODOLOGICO</h3>
    <hr>
    <section>
        <div class="container">
  <div class="row">
    <div class="col">
      
      <div class="card " style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/rayosx.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
            <h5 class="card-title">RAYOS X</h5>
        <p class="card-text">La denominación rayos X designa a una radiación electromagnética, invisible para el ojo humano, capaz de atravesar cuerpos opacos y de imprimir las películas fotográficas.Los rayos X tienen una serie de propiedades que son: Poder penetrante: Atraviesan la materia.</p>
  </div>
</div>
      
    </div>
    <div class="col">
      
      <div class="card" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/tomografia.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
        <h5 class="card-title">TOMOGRAFIA</h5>
        <p class="card-text">Tomografía es el proceso de obtención de imágenes por secciones. Un aparato usado en tomografía es llamado tomógrafo, mientras que la imagen producida es un tomograma. Este método es usado en medicina, arqueología, biología, geofísica, oceanografía, ciencia de los materiales y otras ciencias. En la mayoría de los casos se basa en un procedimiento matemático llamado reconstrucción tomográfica.</p>
  </div>
</div>
      
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/resonancia.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
        <h5 class="card-title">RESONANCIA MAGNETICA</h5>
        <p class="card-text">Es un examen imagenológico que utiliza imanes y ondas de radio potentes para crear imágenes del cuerpo. No se emplea radiación ionizante (rayos X).</p>
  </div>
</div>
    </div>
  </div>
  
  <div class="p-1 w-100"></div>
<!--<b>
</b>
<br>
<br>-->
</section>

<div class="p-1 w-100"></div>
<hr>

<div class="border rounded" style="padding: 19px;">
  <form action="{{route('resonancias_rayosx')}}" method="POST">
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
