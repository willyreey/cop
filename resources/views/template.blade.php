<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @yield("meta")
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">

    
    @include('sweetalert::alert')


</head>
<body >

<div class="container shadow-lg p-3 mb-5 rounded" style="margin-top: 2%;">
{{-- OOO________O________________________________HEADER________________________O________________ --}}

<div class="row">
<div class="col-12 col-sm-8 imageWrapper">
    <img src="{{ asset('img/logo3.png') }}" alt="" class="img-fluid" style="height: 200px;"/>
    <p class="cornerLink col-12">COP. CENTRO ORTEPICO PODOLOGICO SAN BERNARDINO, HOSPITAL CLINICO, CIRUGIA Y HOSPITALIZACIÓN, EMERGENCIA 24 HORAS, SERVICIO DE AMBULANCIA</p>
</div>
<div class="col-12 col-sm-4">
        <img src="{{ asset('img/fachada2.png') }}" alt="" class="rounded img-fluid" style="height: 200px; width: 450px" />
</div>
</div>
{{-- OOO________O________________________________HEADER________________________O________________ --}}



{{-- _______________O_______________O_____NAVBAR_______________O_______________O_____ --}}

    <div class="p-1 w-100"></div>
    
    <nav class="navbar navbar-expand-sm">
  <a class="navbar-brand btn btn-light btn-lg" href="{{ route('registro') }}">Registrarse </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">●●●
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <form class="form-inline" action="/login" method="POST">
    {{ csrf_field() }}

      <input class="form-control mr-sm-2 btn-sm" type="text" id="correo" name="correo_p" placeholder="Correo Electronico" aria-label="Usuario">
      <input class="form-control mr-sm-2 btn-sm" type="password" id="password" name="pass" placeholder="Contraseña" aria-label="Contraseña">
      <ul class="navbar-nav mr-auto">
    <small id="passwordHelpBlock" class="form-text margin-left-1">
  <a class="mr-sm-2">¿Olvidó su contraseña?</a>
</small>

<button  class="btn btn-primary btn-sm" type="submit">INGRESAR</button>
 <div class="p-1 w-100"></div>
</ul>
      
    </form>

</ul>

    <form class="form-inline">
      <input class="form-control mr-sm-2 btn-sm" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success btn-sm" type="submit">BUSCAR</button>
    </form>
  </div>
</nav>

    <div class="p-1 w-100"></div>
    <nav class="navbar navbar-expand-xl navbar-light no-gutters" style="background-color: rgb(10 108 206);">
  <a class="navbar-brand" href="{{ route('principal') }}" style="color: white; font-size: 14px; margin-right: 50px; margin-left: 50px;">INICIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav justify-content-center">

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle LetrasNav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 14px">
          ESPECIALIDADES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-ite" href="{{ route('traumatologia') }}"><p class="fondo">Traumatología</p></a>
          <a class="dropdown-ite" href="{{ route('cirugia') }}"><p class="fondo">Cirugía en General</p></a>
          <a class="dropdown-ite" href="{{ route('ginecologia') }}"><p class="fondo">Ginecología</p></a>
          <a class="dropdown-ite"  href="{{ route('oncologia') }}"><p class="fondo">Oncología</p></a>
          <a class="dropdown-ite" href="{{ route('cardiologia') }}"><p class="fondo">Cardiología</p></a>
          <a class="dropdown-ite" href="{{ route('coloproctologia') }}"><p class="fondo">Coloproctología</p></a>
          <a class="dropdown-ite" href="{{ route('gastroenterologia') }}"><p class="fondo">Gastroenterología</p></a>
          <a class="dropdown-ite" href="{{ route('hematologia') }}"><p class="fondo">Hematología</p></a>
          <a class="dropdown-ite" href="{{ route('medicinainterna') }}"><p class="fondo">Medicina Interna</p></a>
          <!-- <a class="dropdown-ite" href="especialidades/optometrista.php"><p class="fondo">OPTOMETRIA</p></a> -->
          <a class="dropdown-ite" href="{{ route('pediatria') }}"><p class="fondo">Pediatría</p></a>
          <a class="dropdown-ite" href="{{ route('podologia') }}"><p class="fondo">Podología</p></a>
         <!--  <a class="dropdown-ite" href="especialidades/psicologia.php"><p class="fondo">PSICOLOGIA</p></a> -->
          <a class="dropdown-ite" href="{{ route('psiquiatria') }}"><p class="fondo">Psiquiatría</p></a>
          <a class="dropdown-ite" href="{{ route('neurofisiologia') }}"><p class="fondo">Neurofisiología</p></a>
          <a class="dropdown-ite" href="{{ route('urologia') }}"><p class="fondo">Urologia</p></a>
          <a class="dropdown-ite" href="{{ route('fisiatria_espe') }}"><p class="fondo">Fisiatría</p></a>
          <a class="dropdown-ite" href="{{ route('neurocirugia') }}"><p class="fondo">Neurocirugía</p></a>
          <a class="dropdown-ite" href="{{ route('nutricion') }}"><p class="fondo">Nutrición</p></a>
          <a class="dropdown-ite" href="{{ route('reumatologia') }}"><p class="fondo">Reumatología</p></a>
          <a class="dropdown-ite" href="{{ route('cirugia_plastica') }}"><p class="fondo">Cirugía plastica reconstructuiva</p></a>
        </div>
      </li>

    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle LetrasNav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 14px">
          SERVICIOS MÉDICOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-ite" href="{{ route('resonancias_rayosx') }}"><p class="fondo">Resonancias - Rayos X</p></a>
          <a class="dropdown-ite" href="{{ route('ambulatorio') }}"><p class="fondo">Ambulatorio</p></a>
          <a class="dropdown-ite" href="{{ route('mapa_sitio') }}"><p class="fondo">Mapa del sitio</p></a>
          <a class="dropdown-ite" href="{{ route('primeros_aux') }}"><p class="fondo">Primeros Auxilios</p></a>
          <a class="dropdown-ite" href="{{ route('quirofano') }}"><p class="fondo">Quirofanó</p></a>
          <a class="dropdown-ite" href="{{ route('reemplazos_art') }}"><p class="fondo">Reemplazos Articulares</p></a>
          <a class="dropdown-ite" href="{{ route('ambulancia') }}"><p class="fondo">Ambulancias</p></a>
          <a class="dropdown-ite" href="{{ route('emergencia24') }}"><p class="fondo">Emergencias 24 horas</p></a>
          <a class="dropdown-ite" href="{{ route('directorio') }}"><p class="fondo">Directorio Médico</p></a>
          <a class="dropdown-ite" href="{{ route('ecografia') }}"><p class="fondo">Ecografía</p></a>
          <a class="dropdown-ite" href="{{ route('analgesia') }}"><p class="fondo">Analgesia Postoperatorias</p></a>
          <a class="dropdown-ite" href="{{ route('cuidados_i') }}"><p class="fondo">Cuidados Intensivos e Intermedios</p></a>
          <a class="dropdown-ite" href="{{ route('imaginologia') }}"><p class="fondo">Imaginología</p></a>
          <a class="dropdown-ite" href="{{ route('fisiatria') }}"><p class="fondo">Fisiatria y Rehabilitación</p></a>
          <a class="dropdown-ite" href="{{ route('farmacia_u') }}"><p class="fondo">Farmacia y Unidosis</p></a>
          <a class="dropdown-ite" href="{{ route('anatomia') }}"><p class="fondo">Anatomia Patologica</p></a>
          <a class="dropdown-ite" href="{{ route('quimioterapia') }}"><p class="fondo">Quimioterapia</p></a>
      </li>
      
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" role="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 14px">
             APS
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

             <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Consultas Especializadas</a>
               <ul class="dropdown-menu">
                 <a class="dropdown-item" href="#">Traumatología y Ortopedia</a>
                 <a class="dropdown-item" href="#">Cardiología</a>
                 <a class="dropdown-item" href="#">Cirugía General</a>
                 <a class="dropdown-item" href="#">Cirugía Pediátrica</a>
                 <a class="dropdown-item" href="#">Endocrinología</a>
                 <a class="dropdown-item" href="#">Fisiatría y Rehabilitación</a>
                 <a class="dropdown-item" href="#">Gastroenterología</a>
                 <a class="dropdown-item" href="#">Ginecología</a>
                 <a class="dropdown-item" href="#">Hematología</a>
                 <a class="dropdown-item" href="#">Medicina Interna</a>
                 <a class="dropdown-item" href="#">Neurocirugia</a>
                 <a class="dropdown-item" href="#">Oncologia</a>
                 <a class="dropdown-item" href="#">Otorrinolaringología</a>
                 <a class="dropdown-item" href="#">Pediatría</a>
                 <a class="dropdown-item" href="#">Reumatología</a>
                 <a class="dropdown-item" href="#">Urología</a>
               </ul>
             </li>
            <li><a class="dropdown-item" href="{{ route('directorio_medico') }}">Directorio Médico</a></li>
            <li><a class="dropdown-item" href="{{ route('seguros') }}">Empresas Aseguradoras</a></li>
           </ul>
         </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle LetrasNav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 14px">
          LABORATORIO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-ite" href="{{ route('laboratorio_medico') }}"><p class="fondo">Laboratorio Clinico</p></a>
          <a class="dropdown-ite" href="{{ route('tipos_examenes') }}"><p class="fondo">Tipos de examenes</p></a>
          <a class="dropdown-ite" href="{{ route('tabla_valores') }}"><p class="fondo">Tabla de valores normales</p></a>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="{{ route('solicitud_citas') }}" style="color: white; font-size: 14px">SOLICITUD DE CITAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('quienes_somos') }}" style="color: white; font-size: 14px">¿QUIÉNES SOMOS?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contacto') }}" style="color: white; font-size: 14px">CONTÁCTENOS</a>
      </li>
      
    </ul>
  </div>
</nav>

{{-- _______________O_______________O_____NAVBAR_______________O_______________O_____ --}}

<img type="button" class="probando" src="{{asset('img/chat.png')}}">
<a href="https://api.whatsapp.com/send?phone=584122508629&text=Hola!%20en%20que%20podemos%20ayudarte?"><img class="probandoo" src="{{asset('img/whatsapp.png')}}"></a>


</section>


    <div class="p-1 w-100"></div>

    @yield("content")
    
    <div class="p-1 w-100"></div>

 {{-- ___________O_______________O_______SEGUROS___________O_______________O_______ --}}
<div class="containere">
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active" style="padding-left: 15px;">
  <div class="row">
    <div class="col-2 col-sm-1"></div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/cantv_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/pdvsa_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/tsj_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/dem_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/fonden_.png') }}" class="imagenseguros">
    </div>
    
  </div>
    </div>

    <div class="carousel-item" style="padding-left: 15px">
  <div class="row">
    <div class="col-2 col-sm-1"></div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/mercal_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/caracas_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/educacion_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/constitucion_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/movilnet_.png') }}" class="imagenseguros">
    </div>
  </div>
    </div>

    <div class="carousel-item" style="padding-left: 15px">
  <div class="row">
    <div class="col-2 col-sm-1"></div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/vumi_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/alo_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/atrio_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/horizonte_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/makler_.png') }}" class="imagenseguros">
    </div>

  </div>
    </div>

        <div class="carousel-item" style="padding-left: 15px">
  <div class="row">
    <div class="col-2 col-sm-1"></div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/banesco_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/corpoelec_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/previsora__.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/piramide_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/cultura_.png') }}" class="imagenseguros">
    </div>

  </div>
    </div>

            <div class="carousel-item" style="padding-left: 15px">
  <div class="row">
    <div class="col-2 col-sm-1"></div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/mapfre_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/venezuela_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/cnu_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/seniat_.png') }}" class="imagenseguros">
    </div>
    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/occidental_.png') }}" class="imagenseguros">
    </div>

  </div>
    </div>
            <div class="carousel-item" style="padding-left: 15px">

  <div class="row">
    <div class="col-2 col-sm-1"></div>
     <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/mercantil_.png') }}" class="imagenseguros">
    </div>

    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/bandes_.png') }}" class="imagenseguros">
    </div>

        <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/venezolana_.png') }}" class="imagenseguros">
    </div>

    <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/hispana_.png') }}" class="imagenseguros">
    </div>
        <div class="col-4 col-sm-2">
      <img src="{{ asset('./img/seguros/unes_.png') }}" class="imagenseguros">
    </div>

  </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

 {{-- ___________O_______________O_______SEGUROS___________O_______________O_______ --}}
<div class="p-1 w-100"></div>
{{-- ___________O___________________PIE DE PAGINA___________________O__________--}}    

    <footer class="container" style="background-color: rgb(10 108 206); color: white;">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-center"><small>
@yield("footer")

                        </small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-1"></div>
    <div class="row" style="margin-left: 20px;">
        <div class="col-6 col-sm-3"><a href="https://www.telavip.com.ve/" target="_blank"><img src="{{ asset('img/telavip.jpg') }}" alt="" class="img-fluid imgseguros"></a></div>
        <div class="col-6 col-sm-3"><a href="http://ascensoresbyt.com.ve/" target="_blank"><img src="{{asset ('img/banner_dispo.png') }}" alt="" class="img-fluid imgseguros"></a></div>
        <div class="col-6 col-sm-3"><img src="{{ asset('img/banner_dispo2.png') }}" alt="" class="img-fluid imgseguros"></div>
        <div class="col-6 col-sm-3"><img src="{{asset ('img/banner_dispo3.png') }}" alt="" class="img-fluid imgseguros"></div>
    </div>
<center><b>Pagina desarrollada por Telavip - 2020 ©</b></center>
    </footer>
    
    <div class="modal fade" id="exampleModalencuesta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario para entrevista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('postulacion.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          @csrf


        <h3>Datos Personales</h3>
        <hr>
        <div class="form-row">
          <div class="col-4">
          <label><b>Foto<b style="color:red">*</b></b></label>
          <input type="file" name="file" required>
          </div>
        </div>
        <div class="text-right">
        <b><b style="color:red">*</b> Campos Obligatorios</b>
        </div>
        <div class="p-2 w-100"></div>
          <div class="form-row">
             <div class="form-group col-md-6">
               <label><b>Nombre<b style="color:red">*</b></b></label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre" required>
             </div>
             <div class="form-group col-md-6">
               <label><b>Apellido<b style="color:red">*</b></b></label>
               <input type="text" class="form-control" name="apellido" placeholder="Ingrese su Apellido" required>
             </div>
        </div>

        <div class="p-2 w-100"></div>

        <div class="form-group">
             <label for="inputAddress"><b>Dirección de Habitación<b style="color:red">*</b></b></label>
             <input type="text" class="form-control" name="direccion" id="inputAddress" placeholder="Ingrese la direccion de su Habitación" required>
         </div>

         <div class="p-2 w-100"></div>

          <div class="form-row">
             <div class="form-group col-md-4">
               <label><b>Numero Telefonico<b style="color:red">*</b></b></label>
                <input type="number" class="form-control" name="numero_telefonico" placeholder="Ingrese Numero Telefonico" required>
             </div>
             <div class="form-group col-md-4">
               <label><b>Telefono de Habitación<b style="color:red">*</b></b></label>
               <input type="number" class="form-control" name="numero_habitacion" placeholder="Ingrese Telefono de Habitación" required>
             </div>
             <div class="form-group col-md-4">
               <label><b>Correo Electronico<b style="color:red">*</b></b></label>
               <input type="email" class="form-control" name="email" placeholder="Ingrese Correo Electronico" required>
             </div>
        </div>
        <h3>Experiencia Laboral</h3>
        <hr>

        <div class="p-2 w-100"></div>

        <div class="form-group">
             <label for="inputAddress"><b>Ingrese su ultima experiencia laboral</b></label>
             <textarea type="textarea" class="form-control" name="primera_experiencia" id="exampleFormControlTextarea1" rows="3" placeholder="Ingrese el nombre de la empresa - Cargo que desempeñaba - Motivo del despido - Cuanto tiempo duro en la empresa"></textarea>
         </div>

          <div class="form-group">
             <label for="inputAddress"><b>Ingrese otra experiencia laboral</b></label>
             <textarea type="textarea" class="form-control" name="segunda_experiencia" id="exampleFormControlTextarea1" rows="3" placeholder="Ingrese el nombre de la empresa - Cargo que desempeñaba - Motivo del despido - Cuanto tiempo duro en la empresa"></textarea>
         </div>

          <div class="p-2 w-100"></div>

        <div class="form-group">
             <label for="inputAddress"><b>Habilidades<b style="color:red">*</b></b></label>
             <input type="text" class="form-control" name="habilidades" id="inputAddress" placeholder="Escriba al menos 3 habilidades que posea." required>
         </div>

        
         <h3>Referencias Personales</h3>
        <hr>

        <div class="p-2 w-100"></div>

        <h4>Referencia 1<b style="color:red">*</b></h4>
        <hr>

                  <div class="form-row">
             <div class="form-group col-md-4">
               <label><b>Nombre:</b></label>
                <input type="text" class="form-control" name="ref_nombre" placeholder="Ingrese Nombre" required>
             </div>
             <div class="form-group col-md-4">
               <label><b>Apellido</b></label>
               <input type="text" class="form-control" name="ref_apellido" placeholder="Ingrese Apellido" required>
             </div>
             <div class="form-group col-md-4">
               <label><b>Telefono de habitación</b></label>
               <input type="number" class="form-control" name="ref_telefono" placeholder="Ingrese Telefono" required>
             </div>
        </div>
        <hr>
        <h4>Referencia 2<b style="color:red">*</b></h4>
        <hr>

                  <div class="form-row">
             <div class="form-group col-md-4">
               <label><b>Nombre:</b></label>
                <input type="text" class="form-control" name="ref_dos_nombre" placeholder="Ingrese Nombre">
             </div>
             <div class="form-group col-md-4">
               <label><b>Apellido</b></label>
               <input type="text" class="form-control" name="ref_dos_apellido" placeholder="Ingrese Apellido">
             </div>
             <div class="form-group col-md-4">
               <label><b>Telefono de habitación</b></label>
               <input type="number" class="form-control" name="ref_dos_telefono" placeholder="Ingrese Telefono">
             </div>
        </div>
        <hr>
        <h4>Referencia 3<b style="color:red">*</b></h4>
        <hr>

                  <div class="form-row">
             <div class="form-group col-md-4">
               <label><b>Nombre:</b></label>
                <input type="text" class="form-control" name="ref_tress_nombre" placeholder="Ingrese Nombre">
             </div>
             <div class="form-group col-md-4">
               <label><b>Apellido</b></label>
               <input type="text" class="form-control" name="ref_tress_apellido" placeholder="Ingrese Apellido">
             </div>
             <div class="form-group col-md-4">
               <label><b>Telefono de habitación</b></label>
               <input type="number" class="form-control" name="ref_tress_telefono" placeholder="Ingrese Telefono">
             </div>
        </div>

         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="Btnsubmit" type="submit" class="btn btn-primary">Enviar</button>
      </div>



        </form>
      </div>
      
    </div>
  </div>
</div>

<script>
  $("#Btnsubmit").click(function(){
    $(this).prop("disable", true); //deshabilitamos el boton
    $(this).html(
      `<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading... `
  );
  });
  
</script>

    <script src="{{ asset('js_u/cambio.js') }}"></script>
        <script src="{{ asset('js_u/validaciones.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<br>
<center>
<div id="sfcpw1k6chfkmgkf3ju85um29718wzxbc2z"></div>
<a href=http://www.ademails.com/estadisticas1060034607.htm>
<script type="text/javascript" language="JavaScript">
<!--
document.write("<img src=\"http://www.ademails.com/cgi-bin/contador.cgi?ID=1060034607");
document.write("&referer=");
document.write(escape(document.referrer));
document.write("\" border=0 alt=\"Estadisticas\">");
// -->
</script><noscript><img src=http://www.ademails.com/cgi-bin/contador.cgi?ID=1060034607 border=0 alt="Estadisticas"></noscript></a>


</center>

{{-- ___________O___________O__________PIE DE PAGINA___________O___________O__________
 --}}
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
