@extends('template')

<title>MAPA DEL SITIO</title>

@section("content")

<h1>MAPA DEL SITIO</h1>
      <div class="container">
  <div class="row">
    <div class="card col-sm" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/laboratorio.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">El laboratorio es un lugar dotado de los medios necesarios para realizar investigaciones, experimentos, prácticas y trabajos de carácter científico, tecnológico o técnico; está equipado con instrumentos de medida o equipos con los que se realizan experimentos.</p>
  </div>
</div>
<div class="card col-sm" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/tomografia.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Tomografía es el proceso de obtención de imágenes por secciones. Un aparato usado en tomografía es llamado tomógrafo, mientras que la imagen producida es un tomograma.</p>
  </div>
</div>
<div class="card col-sm" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/resonancia.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Es un examen imagenológico que utiliza imanes y ondas de radio potentes para crear imágenes del cuerpo. No se emplea radiación ionizante (rayos X).</p>
  </div>
</div>
</div>
<hr>
  <div class="container">
  <div class="row">
    <div class="card col-sm" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/emergencia.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Departamento de atención primaria o sección de un hospital que ofrece un tratamiento inicial de pacientes con un amplio espectro de enfermedades y lesiones, algunas de las cuales pueden ser potencialmente mortales y requieren atención inmediata.</p>
  </div>
</div>
<div class="card col-sm" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/ambulancia.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Una ambulancia es un vehículo destinado al transporte de personas enfermas o heridas, hacia, desde o entre lugares de tratamiento.</p>
  </div>
</div>
<div class="card col-sm" style="width: 18rem;">
  <img src="{{asset('img/servicios_medicos/hospitalizacion.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Ingreso de una persona enferma o herida en un hospital para su examen, diagnóstico, tratamiento y curación por parte del personal médico.</p>
  </div>
</div>
</div>

<br>
    <br>
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>

    <br>
    <br>

    <div class="alert alert-info" role="alert">
      <p>NOTA. SI  USTED  QUIERE REALIZARCE ALGUN TIPO DE EXAMEN QUE NO LO TENGAMOS EN LA LISTA, NO DUDE EN SOLICITARLO QUE LE CONTESTAREMOS
      A LA MENSAJERIA DE SU PERFIL DE USUARIO</p>
      <p>NOTA. USTED RECIVIRA LOS RESULTADOS POR SU USUARIO EN NUESTRO PORTAL,  EN UN ARCHIVO ADJUNTO O POR TEXTO</p>
    </div>
    <!--<b>
    </b> -->
    <!-- <br>
    <br> -->
    <div class="p-1 w-100"></div>
    <hr>


    <div class="border rounded" style="padding: 19px;">
      <form action="{{route('mapa_sitio')}}" method="POST">
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