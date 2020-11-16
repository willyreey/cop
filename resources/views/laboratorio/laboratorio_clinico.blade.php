@extends('template')

    <meta name="keywords" content="Centro, ortopedico, podologico, cop, traumatologia, hospitalizacion, cilinca, policlinica, laboratorio, examenes, laboratorio, servicios medicos, paramedicos, las 24 horas, atencion, primaria, emergencia, laboratorios, integrales, examen,  laboratirios , caracas , venezuela citas, consultas, consultorio,s medicos cirujanos, internistas, expecialedades, expesialista, trauma, primeros auxilios,  ambulacias las 24 horas. quirofanos ,tecnoilogia , cirujanos, expecializaciones medicas, farmacia, farmacos, medicinas, medicamentos, materiales e insumos medicos">


<title>LABORATORIO CLINICO PARA EXAMENES MEDICOS EN SAN BERNARDINO- LABORATORIO CLINICA PODOLOGICO</title>
@section("content")


<div class="row">
            <div class="col-12">
                <h4 class="text-center">COP LABORATORIO CLINICO - EXAMENES DE LABORATORIOS - PRUEBAS MEDICAS EN SAN BERNARDINO - EMERGENCIA 24 HORAS - COP.</h4>
            </div>
        </div>

        <div class="p-2"></div>

    <div class="row">
        <div class="col-3">
            <div class="row"><div class="col-12"><img class="img-fluid" src="{{ asset('img/laboratorio/laboratorio1.jpg') }}" alt=""></div></div>
            <div class="p-2"></div>
            <div class="row"><div class="col-12"><img class="img-fluid" src="{{ asset('img/laboratorio/laboratorio2.jpg') }}" alt=""></div></div>
        </div>
        <div class="col-3">
            <div class="row"><div class="col-12"><img class="img-fluid" src="{{ asset('img/laboratorio/laboratorio3.jpg') }}" alt=""></div></div>
            <div class="p-2"></div>
            <div class="row"><div class="col-12"><img class="img-fluid" src="{{ asset('img/laboratorio/laboratorio4.jpg') }}" alt=""></div></div>
        </div>
        <div class="col-6">
           <li> Cuenta con un equipo profesional integrado por bioanalistas, moderna tecnologia, en donde se realizan examenes de forma eficiente y segura.</li>

            <li>Controles interno y externos que garantizan al paciente la calidad.</li>

            <li>Realizacion de pruebas especiales con asociacion a laboratorios de alto nivel cientifico.</li>
        </div>
    </div>
    <div class="p-2"></div>

    <style>

        .scroll{
            background: white;
            overflow-y: scroll;
            height: 250px;
        }
      
        .preguntas{
            background: skyblue;
            margin-top: 20px;
            border-radius: 5px;
        }

        .scroll::-webkit-scrollbar {
      width: 7px;
    }

  .scroll::-webkit-scrollbar-track {
    background-color: rgba(0, 0, 0, 0.4);
    border-radius: 7px;
  }
  
  .scroll::-webkit-scrollbar-thumb {
    background-color: rgb(219, 217, 217);
    border-radius: 10px;
  }
      
      </style>

    <div class="border rounded" style="padding: 19px;">
        <form action="{{route('laboratorio_medico')}}" method="POST">
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

@endsection

@section("footer")
Centro ortopedico podologico en san bernardino - COP - Traumatologia - Hospitalizacion - Laboratorio - Servicios Medicos - Ambulatorio - Servicios medicos y paramedicos las 24 horas - Atencion primaria y de emergencia - Laboratorios integrales - Examen de laboratirios en caracas - Venezuela - Citas y consultorios medicos - Expecialedades de medicinas traumas - Primeros auxilios con ambulacias las 24 horas - Contamos con quirofanos de alta tecnoilogia y cirujanos con amplia trayectoria y expecializaciones medicas - Farmacia - Medicamentos - Farmacos - Materiales e insumos medicos
@endsection