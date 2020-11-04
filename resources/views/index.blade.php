@extends('template')

    <meta name="description" content="centro ortopedico podologico en san benardino, cop, traumatologia, hospitalizacion, laboratorio, servicios medicos, ambulatorio, servicios medicos y paramedicos las 24 horas, atencion primaria y de emergencia, laboratorios integrales, examen de laboratirios en caracas, venzuela, citas y consultorios medicos, expecialedades de medicinas traumas, primeros auxilios con ambulacias las 24 horas. contamos con quirofanos de alta tecnoilogia y cirujanos con amplia trayectoria y expecializaciones medicas, ademas de farmacia, medicamentos, farmacos, materiales e insumos medicos">
    <meta name="keywords" content="Centro, ortopedico, podologico, cop, traumatologia, hospitalizacion, cilinca, policlinica, laboratorio, examenes, laboratorio, servicios medicos, paramedicos, las 24 horas, atencion, primaria, emergencia, laboratorios, integrales, examen,  laboratirios , caracas , venezuela citas, consultas, consultorio,s medicos cirujanos, internistas, expecialedades, expesialista, trauma, primeros auxilios,  ambulacias las 24 horas. quirofanos ,tecnoilogia , cirujanos, expecializaciones medicas, farmacia, farmacos, medicinas, medicamentos, materiales e insumos medicos">
    <title>CENTRO ORTOPEDICO PODOLOGICO SAN BERNARDINO- COP- PODOLOGICO- CLINICA- HOSPITALIZACION- CIRUGIA- TRAUMATOLOGIA</title>

      

@section("content")

    <div class="row">
          @include('sweetalert::alert')
        <div class="col-sm-12 col-md-6 col-lg-4 img-mostrar6">
            <a href="{{ route('emergencia24') }}">
        <img src="{{asset('img/img6.jpg')}}" class="card-img img-fluid" id="desenfocar6"></a>
            <div class="middle">
                <div class="text">ATENCION RAPIDA Y EFICAZ - ATENCION DE CALIDAD - EMERGENCIA 24 HORAS - COP</div>
            
            </div>

<div class="col-12"><p class="text-center" style="font-size: 14px; margin-top: 8px;" ><b>EMERGENCIAS MEDICAS Y PRIMEROS AUXILIOS</b></p></div>
        </div>

{{-- _______________o________________________O_____________________________________o__ --}}
                <div class="col-sm-12 col-md-6 col-lg-4 img-mostrar2">
            <a href="{{ route('traumatologia') }}">
            <img src="{{asset('img/img2.jpg')}}" class="card-img img-fluid" id="desenfocar2"></a>
            <div class="middle">
                <div class="text">ESPACIALISTAS EN TRAUMATOLOGIA - EMERGENCIAS TRAUMATOLOGICAS - MEDICOS TRAUMATOLOGOS - COP</div>
                            </div>
            <div class="col-12"><p class="text-center" style="font-size: 14px; margin-top: 8px;" ><b>TRAUMATOLOGIA  Y ORTOPEDIA</b></p></div>
        </div>
        {{-- _______________o________________________O_____________________________________o__ --}}

        <div class="col-sm-12 col-md-6 col-lg-4 img-mostrar3">
            <a href="{{ route('resonancias_rayosx') }}">
        <img src="{{asset('img/img3.jpg')}}" class="card-img img-fluid" id="desenfocar3">
            <div class="middle">
                <div class="text">RESONANCIA FISICA - RAYOS X SAN BERNARDINO - RESONANCIA MAGNETICA - COP</div>
            </div>
            </a>
            <div class="col-12"><p class="text-center" style="font-size: 14px; margin-top: 8px;" ><b>RESONANCIA MAGNETICA - RAYOS X</b></p></div>
          </div>
{{-- _______________o________________________O_____________________________________o__ --}}
        <div class="col-sm-12 col-md-6 col-lg-4 img-mostrar">
            <a href="{{ route('ambulatorio') }}">
        <img src="{{asset('img/img1.jpg')}}" class="card-img img-fluid"></a>
              <div class="middle">
                <div class="text">HOSPITALIZACION CLINICA - SALAS DE HOSPITALIZACION - HOZPITALIZACION SAN BERNARDINO - COP</div>
            </div>  
            <div class="col-12"><p class="text-center" style="font-size: 14px; margin-top: 8px;"><b>SALAS DE HOSPITALIZACION</b></p></div>
        </div>



{{-- _______________o________________________O_____________________________________o__ --}}

        
        <div class="col-sm-12 col-md-6 col-lg-4 img-mostrar4">
            <a href="{{ route('laboratorio_medico') }}">
        <img src="{{asset('img/img4.jpg')}}" class="card-img img-fluid" id="desenfocar4">
            <div class="middle">
                <div class="text">EXAMENES DE LABORATORIO - EQUIPOS DE ALTA GAMA - LABORATORIOS INTEGRALES - COP</div>
            </div>
            </a>
            <div class="col-12"><p class="text-center" style="font-size: 14px; margin-top: 8px;" ><b>LABORATORIOS  Y EXAMENES MEDICOS</b></p></div>
        </div>

{{-- _______________o________________________O_____________________________________o__ --}}

        <div class="col-sm-12 col-md-6 col-lg-4 img-mostrar5">
            <a href="{{ route('quirofano') }}">
        <img src="{{asset('img/img5.jpg')}}" class="card-img img-fluid" id="desenfocar5">
            <div class="middle">
                <div class="text">QUIROFANOS CON EQUIPOS DE ALTA GAMA</div>
            </div>
            </a>
            <div class="col-12"><p class="text-center" style="font-size: 14px; margin-top: 8px;" ><b>QUIROFANOS PARA CIRUGIAS - COP</b></p></div>
        </div>
        
</div>
{{-- _______________o________________________O_____________________________________o__ --}}


    <div class="p-1 w-100"></div>
    <div class="container">
 <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalencuesta">¿Desea trabajar con nosotros? Haga click aqui para mas informacion.</button>
</div>
<div class="p-1 w-100"></div>


@endsection

@section("footer")
Centro ortopédico podológico San Bernardino - cop - Traumatología - Hospitalizacion - Laboratorio - Servicios médicos - Ambulatorio - Servicios médicos y paramédicos las 24 horas - Atención primaria y de emergencia - Laboratorios integrales - Examen de laboratorios en Caracas - Venezuela - Citas y consultorios médicos - Especialidades de medicina traumas - Primeros auxilios con ambulancias las 24 horas - Contamos con quirófanos de alta tecnología y cirujanos con amplia trayectoria y especializaciones médicas - Farmacia - Medicamentos - Fármacos - Materiales e insumos médicos - Médicos traumatólogos - Médicos oncólogos - Médicos cardiólogos - Médicos coloproctologos - Médicos gastroenterólogos - Médicos ginecólogos - Médicos hematólogos - Médicos optetras - Médicos podólogos - Médicos urólogos - Podológico - Consultas médicas - Caracas - Consultorios - Venezuela - Citas de cardiología - Citas de urología - Citas de traumatología - Citas de podología - Citas de ontología - Citas de colocroptología - Citas de gastroenterología - Citas de ginecología - Citas de hematología - Citas de pediatría - Citas de psicología - Citas de psiquiatría

@endsection



<script src="{{ asset('js_u/validaciones.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
