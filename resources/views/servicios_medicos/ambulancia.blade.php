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
        <label for="" class="text-justify"><b>Mario Caseres: </b>El servicio de ambulancia esta disponible?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Jorge Hernandez: </b>Hasta donde abarca el servicio de ambulancia?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, en toda la gran Caracas.</label>
    </div>
    <div class="p-2"></div>
</div>
</div>
<div class="p-1 w-100"></div>

@endsection

@section("footer")

Servicio de Ambulancia - Servicio de Ambulancia en San Bernardino - Servicio de Ambulancia en Caracas - Cardiologia en Caracas - Servicio de Ambulancia COP.
@endsection
