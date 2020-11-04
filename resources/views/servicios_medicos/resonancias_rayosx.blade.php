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
<div class="row">
<hr>

<div class="border rounded" style="padding: 19px;">
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Barra de preguntas y respuestas:</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="overflow:auto;resize:none"></textarea>
  </div>
    <div class="form-group">
        <button type="button" onclick="return mensajepr()" class="btn btn-primary">ENVIAR</button>
  </div>
</form>
<div class="p-2"></div>
<div class="row">
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Alejandro Montilla: </b>¿Donde puedo reservar una consulta?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen día, en nuestra seccion de ''Solicitud de citas''.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Genesis Oviedo: </b>¿Hacen placas de tobillos?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Naileth Belisario: </b>¿Hacen plascas las 24 horas?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>respuesta: </b>Buen dia, si.</label>
    </div>
</div>
</div>
</div>

@endsection

@section("footer")
Resonancia Mangnética Caracas - Resonancia Física - Resonancia Mangnética San Bernardino - Resonancia Mangnética Venezuela - Resonancia Mangnética San Benardino - Resonancia Mangnética COP - Rayos X Caracas - Rayos X San Bernardino - Rayos X Venezuela - Rayos X San Benardino - Rayo X COP.
@endsection
