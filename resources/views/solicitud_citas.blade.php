@extends('template')

    <meta name="description" content="COP, CITAS MEDICAS, CONSULTORIOS DE CITAS, CITAS O CONSULTAS MEDICAS  PODOLOGICO SAN BERNARDINO, CONSULTORIOS PARA CITAS MEDICAS CENTRO ORTOPEDICO PODOLOGICO SAN BERNARDINO, CONSULTAS MEDICAS EN CARACAS, CONSULTORIOS MEDICO EN VENEZUELA">
    <meta name="keywords" content="COP, CITAS, MEDICAS, CONSULTORIOS, CITAS, CITAS, CONSULTAS, MEDICAS,  PODOLOGICO, SAN BERNARDINO, CONSULTORIOS, CENTRO, ORTOPEDICO, PODOLOGICO, CONSULTAS MEDICAS, CARACAS, CONSULTORIOS, VENEZUELA.">
        <title>COP - CITAS MEDICAS – CONSULTORIOS DE CITAS – CITAS O CONSULTAS MEDICAS  PODOLOGICO SAN BERNARDINO.</title>
@section("content")

       <div class="card">
            <div class="card-header">
                <div class="col-12 text-center"><h3>CITAS MEDICAS – CONSULTORIOS DE CITAS – CITAS O CONSULTAS MEDICAS </h3></div>
            </div>
            <div class="card-body">
                <form action="lib/cargar_cita.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-2"><b>TIPO DE PACIENTE: </b></div>
                        <div class="form-group col-md-10">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            POR PRIMERA VEZ
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            RUTINARIOS
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            EVENTUAL
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            PERMANENTE
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            MENSUAL
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-100"></div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1"><b>Primer Nombre:</b></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el Nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1"><b>Primer Apellido:</b></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el Primer Apellido">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1"><b>Segundo Apellido:</b></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el Segundo Apellido">
                        </div>
                    </div>

                     <div class="p-2"></div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1"><b>Telefono de Habitacion:</b></label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su numero de Habitacion">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1"><b>Telefono celular:</b></label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su numero de Telefono">
                        </div>
                    </div>




                   
                    <div class="p-2 w-100"></div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1"><b>Fecha de Nacimiento:</b></label>
                            <input type="date" class="form-control" id="fechaN" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1"><b>Documento de identidad:</b></label>
                             
                            <div class="input-group mb-2">
                             <div class="input-group-prepend">
                               <select id="inputState" class="form-control">
                                 <option selected disabled>...</option>
                                 <option>V-</option>
                                 <option>E-</option>
                                 <option>P-</option>
                                 <option>J-</option>
                                 </select>
                             </div>
                              <input type="text" class="form-control" placeholder="Ingrese el Numero del Documento">
                             </div>
                         
                        </div>
                    </div>
                    <div class="p-2 w-100"></div>

                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1"><b>Tipo de especialidad:</b></label>
                        <select id="inputState" class="form-control">
                         <option selected>Seleccione...</option>
                         <option>TRAUMATOLOGIA</option>
                         <option>ONCOLOGIA</option>
                         <option>CARDIOLOGIA</option>
                         <option>CIRUGIA</option>
                         <option>COLOPROCTOLOGO</option>
                         <option>ECOGRAFIA</option>
                         <option>GASTROENTEROLOGO</option>
                         <option>GINECOLOGIA</option>
                         <option>HEMATOLOGIA</option>
                         <option>MEDICINA INTERNA</option>
                         <option>OPTOMETRISTA</option>
                         <option>PEDIATRIA</option>
                         <option>PODOLOGIA</option>
                         <option>PSICOLOGIA</option>
                         <option>PSIQUIATRIA</option>
                         <option>QUIROFANO</option>

                        </select>
                        </div>
                    </div>

<div class="p-2 w-100"></div>

                    <button type="button" class="btn btn-primary btn-lg btn-block">Solicitar Cita</button>
                </form>
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
        <button type="button" class="btn btn-primary">ENVIAR</button>
  </div>
</form>
<div class="p-2"></div>
<div class="row">
    <div class="col-12 rounded border">
        <<label for="" class="text-justify"><b>Alejandra Carpio: </b>Tiene servicio de APS?</label>
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

CENTRO ORTOPÉDICO PODOLÓGICO EN SAN BERNARDINO - COP - TRAUMATOLOGÍA - HOSPITALIZACIÓN - LABORATORIO - SERVICIOS MÉDICOS - AMBULATORIO - SERVICIOS MÉDICOS Y PARAMÉDICOS LAS 24 HORAS - ATENCIÓN PRIMARIA Y DE EMERGENCIA - LABORATORIOS INTEGRALES - EXAMEN DE LABORATORIOS EN CARACAS - VENEZUELA - CITAS Y CONSULTORIOS MÉDICOS - ESPECIALIDADES DE MEDICINAS TRAUMAS - PRIMEROS AUXILIOS CON AMBULANCIAS LAS 24 HORAS - CONTAMOS CON QUIRÓFANOS DE ALTA TECNOLOGÍA Y CIRUJANOS CON AMPLIA TRAYECTORIA Y ESPECIALIZACIONES MEDICAS - FARMACIA - MEDICAMENTOS - FÁRMACOS - MATERIALES E INSUMOS MÉDICOS - MÉDICOS TRAUMATÓLOGOS - MÉDICOS ONCÓLOGOS - MÉDICOS ONCÓLOGOS - MÉDICOS CARDIÓLOGOS - MÉDICOS COLOPROCTOLOGOS - MÉDICOS GASTROENTERÓLOGOS - MÉDICOS GINECÓLOGOS - MÉDICOS HEMATÓLOGOS - MÉDICOS OPTETRAS - MÉDICOS PODÓLOGOS - MÉDICOS URÓLOGOS - PODOLÓGICO - CONSULTAS MEDICAS - CARACAS - CONSULTORIOS - VENEZUELA - CITAS DE CARDIOLOGÍA - CITAS DE UROLOGÍA - CITAS DE TRAUMATOLOGÍA - CITAS DE PODOLOGÍA - CITAS DE ONTOLOGÍA - CITAS DE COLÓPROCTOLOGÍA - CITAS DE GASTROENTEROLOGÍA - CITAS DE GINECOLOGÍA - CITAS DE HEMATOLÓGICA - CITAS DE PEDIATRÍA - CITAS DE PSICOLOGÍA - CITAS DE PSIQUIATRÍA

@endsection
