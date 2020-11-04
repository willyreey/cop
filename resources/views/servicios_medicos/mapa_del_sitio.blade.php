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
        <label for="" class="text-justify"><b>Alejandra Carpio: </b>Tiene servicio de APS?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>MAtias Hernandez: </b>Tienen servicio de emergencia?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>Respuesta: </b>Buen dia, si.</label>
    </div>
    <div class="p-2"></div>
    <div class="col-12 rounded border">
        <label for="" class="text-justify"><b>Rosario Perez: </b>Cual es el horario para hacer examenes?</label>
    </div>
    <div class="col-12 table-primary rounded border">
        <label for="" class="text-justify"><b>respuesta: </b>Buen dia, de 8:00am a 4:00pm.</label>
    </div>
</div>
</div>

@endsection

@section("footer")
Centro ortopedico podologico en san bernardino - COP - Traumatologia - Hospitalizacion - Laboratorio - Servicios Medicos - Ambulatorio - Servicios medicos y paramedicos las 24 horas - Atencion primaria y de emergencia - Laboratorios integrales - Examen de laboratirios en caracas - Venezuela - Citas y consultorios medicos - Expecialedades de medicinas traumas - Primeros auxilios con ambulacias las 24 horas - Contamos con quirofanos de alta tecnoilogia y cirujanos con amplia trayectoria y expecializaciones medicas - Farmacia - Medicamentos - Farmacos - Materiales e insumos medicos.
@endsection