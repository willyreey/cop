@extends('template')

@section("meta")


    <title>COP- DIRECTORIO MEDICO - CLINICA  PODOLOGICO</title>

@endsection

@section("content")

<h1>Directorio medico</h1>
<div class="p-2 w-100"></div>

            <div class="card-body">
            <div class="row" style="text-align:right">
                    <div class="form-group col-11 col-sm-4"><b>¿En que especialidad busca su medico?</b></div>
                        <div class="form-group col-12 col-sm-6">
                            <select onchange="directorio();" class="form-control" name="tipo_u" id="seleccion">
                            <option value="0">Seleccione Especialidad</option>
                            <option value="1">Traumatología</option>
                            <option value="2">Cirugía en General</option>
                            <option value="3">Ginecología</option>
                            <option value="4">Oncología</option>
                            <option value="5">Cardiología</option>
                            <option value="6">Coloproctología</option>
                            <option value="7">Gastroenterología</option>
                            <option value="8">Hematología</option>
                            <option value="9">Medicina Interna</option>
                            <option value="10">Pediatría</option>
                            <option value="11">Podología</option>
                            <option value="12">Psiquiatría</option>
                            <option value="13">Neurofisiología</option>
                            <option value="14">Urologia</option>
                            <option value="15">Fisiatría</option>
                            <option value="16">Neurocirugía</option>
                            <option value="17">Nutrición</option>
                            <option value="18">Reumatología</option>
                            <option value="19">Cirugía plastica reconstructuiva</option>
                            </select>
                        </div>
                    </div>
            </div>

<div id="f1" style="display: none;">
<table class="table table-striped table-info">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Horario</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Luis Miguel</td>
      <td>Gomez Mata</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Arenas</td>
      <td>Dorth</td>
      <td>-</td>
      <td>-</td>
    </tr>
            <tr>
      <td>Tony</td>
      <td>Bello Wardini</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Jose Raul</td>
      <td>Carvajal</td>
      <td>-</td>
      <td>-</td>
    </tr>
                    <tr>
      <td>Juan Carlos</td>
      <td>Galindez</td>
      <td>-</td>
      <td>-</td>
    </tr>
     <tr>
      <td>Jenifer</td>
      <td>Harb</td>
      <td>-</td>
      <td>-</td>
    </tr>
     <tr>
      <td>Jesus</td>
      <td>Ramirez</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Manuel</td>
      <td>Sotelo</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Rosa</td>
      <td>Torrealba</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Jose Luis</td>
      <td>Tricerri</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>

<div id="f2" style="display: none;">
<table class="table table-striped table-info">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Horario</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Katyana</td>
      <td>Alvarez R.</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Nahir</td>
      <td>Castillo</td>
      <td>-</td>
      <td>-</td>
    </tr>
            <tr>
      <td>Gustin</td>
      <td>Hernandez</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Simon</td>
      <td>Nacad</td>
      <td>-</td>
      <td>-</td>
    </tr>

  </tbody>
</table>
</div>

<div id="f3" style="display: none;">
<table class="table table-striped table-info">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Horario</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Francisco</td>
      <td>Pestana</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Jose Emilio</td>
      <td>Pérez Herrera</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>

<div id="f4" style="display: none;">
<table class="table table-striped table-info">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Horario</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Migbelia</td>
      <td>Acosta</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>

<div id="f5" style="display: none;">
<table class="table table-striped table-info">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Horario</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Teresa</td>
      <td>Melendez</td>
      <td>-</td>
      <td>-</td>
    </tr>
        <tr>
      <td>Nestor</td>
      <td>Dacosta</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>

<div id="f6" style="display: none;">
<table class="table table-striped table-info">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Horario</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Katyana</td>
      <td>Alvarez R.</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Nahir</td>
      <td>Castillo</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>

<div id="f7" style="display: none;">
<table class="table table-striped table-info">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Horario</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Daniel</td>
      <td>Briceño</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Ramón</td>
      <td>Castillo</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>

<script type="text/javascript">
function directorio(){
    var seleccion = document.getElementById("seleccion").value;
    if(seleccion == 1){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "block";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";



    }
    else

    if(seleccion == 2){ 
        document.getElementById("f2").style.display = "block";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";


    }
    else

    if(seleccion == 3){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "block";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
        else

    if(seleccion == 4){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "block";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";


    }
    else

    if(seleccion == 5){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "block";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
        else

    if(seleccion == 6){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "block";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";


    }
    else

    if(seleccion == 7){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "block";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
        else

    if(seleccion == 8){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "block";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";


    }
    else

    if(seleccion == 9){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "block";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
        else

    if(seleccion == 10){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "block";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";


    }
    else

    if(seleccion == 11){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "block";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
    else

    if(seleccion == 12){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "block";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
        else

    if(seleccion == 13){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "block";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
            else

    if(seleccion == 14){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "block";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
            else

    if(seleccion == 15){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "nonr";
        document.getElementById("f15").style.display = "block";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
            else

    if(seleccion == 16){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "block";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
            else

    if(seleccion == 17){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "block";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "none";
    }
    if(seleccion == 18){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "block";
        document.getElementById("f19").style.display = "none";
    }
            else

    if(seleccion == 19){ 
        document.getElementById("f2").style.display = "none";
        document.getElementById("f1").style.display = "none";
        document.getElementById("f3").style.display = "none";
        document.getElementById("f4").style.display = "none";
        document.getElementById("f5").style.display = "none";
        document.getElementById("f6").style.display = "none";
        document.getElementById("f7").style.display = "none";
        document.getElementById("f8").style.display = "none";
        document.getElementById("f9").style.display = "none";
        document.getElementById("f10").style.display = "none";
        document.getElementById("f11").style.display = "none";
        document.getElementById("f12").style.display = "none";
        document.getElementById("f13").style.display = "none";
        document.getElementById("f14").style.display = "none";
        document.getElementById("f15").style.display = "none";
        document.getElementById("f16").style.display = "none";
        document.getElementById("f17").style.display = "none";
        document.getElementById("f18").style.display = "none";
        document.getElementById("f19").style.display = "block";
    }
};
</script>

@endsection


@section("footer")


@endsection


      

    
   
    
        
          
    
        
     
  
  
       
    
        
 
  
  
  
  
  
