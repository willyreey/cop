@extends('template')
<title>EMERGENCIA 24 HORAS</title>

@section("content")
<div class="row">
        <div class="col-12"><h1>EMERGENCIA 24 HORAS</h1></div>
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
<div class="p-1 w-100"></div>
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
        <label for="" class="text-justify"><b>Juan Carpio: </b>Tiene servicio de APS?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Matias Hernandez: </b>Tienen servicio de emergencia?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Rosa Torres: </b>Cual es el horario para hacer examenes?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>respuesta: </b>Buen dia, de 8:00am a 4:00pm.</label>
    </div>
</div>
</div>

  @endsection

@section("footer")
Emergencia 24 horas - Emergencia 24 horas Caracas - Emergencia 24 horas San Bernardino - Emergencia 24 horas Venezuela - Emergencia 24 horas San Benardino - Emergencia 24 horas COP.
@endsection