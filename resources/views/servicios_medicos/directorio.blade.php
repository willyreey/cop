@extends('template')

<title>DIRECTORIO MÉDICO</title>

@section("content")
<div class="row">
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 1</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 2</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 3</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 4</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 5</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
    </div>
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
     <label for="" class="text-justify"><b>Juan Magan: </b>Tiene servicio de APS?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Mario Lopez: </b>Tienen servicio de emergencia?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Tyrone Gonzalez: </b>Cual es el horario para hacer examenes?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>respuesta: </b>Buen dia, de 8:00am a 4:00pm.</label>
    </div>
</div>
</div>

@endsection

@section("footer")

Servicio de Ambulancia - Servicio de Ambulancia en San Bernardino - Servicio de Ambulancia en Caracas - Cardiologia en Caracas - Servicio de Ambulancia COP.
@endsection