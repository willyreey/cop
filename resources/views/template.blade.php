<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">

    


</head>
<body>
<div class="container shadow-lg p-3 mb-5 rounded" style="margin-top: 2%;">
{{-- OOO________O________________________________HEADER________________________O________________ --}}

<div class="row">
<div class="col-8 imageWrapper">
    <img src="{{ asset('img/logo3.png') }}" alt="" class="img-fluid" />
    <p class="cornerLink col-12">COP. CENTRO ORTEPICO PODOLOGICO SAN BERNARDINO, HOSPITAL CLINICO, CIRUGIA Y HOSPITALIZACIÓN, EMERGENCIA 24 HORAS, SERVICIO DE AMBULANCIA</p>
</div>
<div class="col-4">
    <img src="{{ asset('img/fachada.png') }}" alt="" class="img-fluid" />
</div>
</div>
{{-- OOO________O________________________________HEADER________________________O________________ --}}



{{-- _______________O_______________O_____NAVBAR PARA REGISTRO_______________O_______________O_____ --}}

    <div class="p-1 w-100"></div>
    
    <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand btn btn-light btn-lg" href="./usuario/registrar.php">Registrar </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">●●●
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <form class="form-inline" action="../cop-new/usuario/api/login.php" method="POST">
      <input class="form-control mr-sm-2 btn-sm" type="search" name="nombre" placeholder="Usuario" aria-label="Usuario">
      <input class="form-control mr-sm-2 btn-sm" type="search" name="password" placeholder="Contraseña" aria-label="Contraseña">
      <ul class="navbar-nav mr-auto">
    <small id="passwordHelpBlock" class="form-text margin-left-1">
  <a class="mr-sm-2">¿Olvidó su contraseña?</a>
</small>

<button class="btn btn-primary btn-sm" type="submit">INGRESAR</button>
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
{{-- _______________O_______________O_____NAVBAR PARA REGISTRO_______________O_______________O_____ --}}

{{-- _______________O_______________O_____NAVBAR_______________O_______________O_____ --}}
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
          <a class="dropdown-ite"><p class="fondo">Fisiatría</p></a>
          <a class="dropdown-ite"><p class="fondo">Neurocirugía</p></a>
          <a class="dropdown-ite"><p class="fondo">Nutrición</p></a>
          <a class="dropdown-ite"><p class="fondo">Reumatología</p></a>
          <a class="dropdown-ite"><p class="fondo">Cirugía plastica reconstructuiva</p></a>
        </div>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 14px">
          SERVICIOS MÉDICOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item h6" href="servicios_medicos/resonancias_rayosx.php">RESONANCIAS - RAYOS X</a>
          <a class="dropdown-item h6" href="servicios_medicos/ambulatorio.php">AMBULATORIO</a>
          <a class="dropdown-item h6" href="servicios_medicos/mapa_del_sitio.php">MAPA DEL SITIO</a>
          <a class="dropdown-item h6" href="servicios_medicos/primeros_auxilios.php">PRIMEROS AUXILIOS</a>
          <a class="dropdown-item h6" href="servicios_medicos/quirofano.php">QUIROFANO</a>
          <a class="dropdown-item h6" href="servicios_medicos/reemplazos_articulares.php">REEMPLAZOS ARTICULARES</a>
          <a class="dropdown-item h6" href="servicios_medicos/ambulancia.php">AMBULANCIAS</a>
          <a class="dropdown-item h6" href="servicios_medicos/emergencia24.php">EMERGENCIA 24 HORAS</a>
          <a class="dropdown-item h6" href="servicios_medicos/directorio.php">DIRECTORIO MEDICO</a>
          <a class="dropdown-item h6" href="servicios_medicos/ecografia.php">ECOGRAFIA</a>
          <a class="dropdown-item h6" href="servicios_medicos/analgesia_postoperatorias.php">ANALGESIA POSTOPERATORIAS</a>
          <a class="dropdown-item h6" href="servicios_medicos/cuidados_intensivos.php">CUIDADOS INTENSIVOS E INTERMEDIOS</a>
          <a class="dropdown-item h6" href="servicios_medicos/imaginologia.php">IMAGINOLOGIA</a>
          <a class="dropdown-item h6" href="servicios_medicos/fisitria.php">FISIATRIA Y REHABILITACION</a>
          <a class="dropdown-item h6" href="servicios_medicos/farmacia_unidosis.php">FARMACIA Y UNIDOSIS</a>
          <a class="dropdown-item h6" href="servicios_medicos/anatomia_patologica.php">ANATOMIA PATOLOGICA</a>
          <a class="dropdown-item h6" href="servicios_medicos/quimioterapia.php">QUIMIOTERAPIA</a>
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
            <li><a class="dropdown-item" href="#">Directorio Médico</a></li>
            <li><a class="dropdown-item" href="#">Empresas Aseguradoras</a></li>
           </ul>
         </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 14px">
          LABORATORIO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item h6" href="{{ route('laboratorio_medico') }}">LABORATORIO CLINICO</a>
          <a class="dropdown-item h6" href="{{ route('tipos_examenes') }}">TIPOS DE EXAMENES</a>
          <a class="dropdown-item h6" href="{{ route('tabla_valores') }}">TABLA DE VALORES NORMALES</a>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="{{ route('solicitud_citas') }}" style="color: white; font-size: 14px">SOLICITUD DE CITAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('quienes_somos') }}" style="color: white; font-size: 14px">¿QUIENES SOMOS?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contacto') }}" style="color: white; font-size: 14px">CONTACTENOS</a>
      </li>
      
    </ul>
  </div>
</nav>

{{-- _______________O_______________O_____NAVBAR_______________O_______________O_____ --}}

<img type="button" class="probando" src="{{asset('img/chat.png')}}">
<a href="https://api.whatsapp.com/send?phone=584241604709&text=Hola!%20Quiero%20generar%20mas%20ventas!"><img class="probandoo" src="{{asset('img/whatsapp.png')}}"></a>


</section>


    <div class="p-1 w-100"></div>

    @yield("content")
    
    <div class="p-1 w-100"></div>

 {{-- ___________O_______________O_______SEGUROS___________O_______________O_______ --}}

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active" style="height: 70px;">
  <div class="row row-cols-3 row-cols-sm-6 row-cols-md-6 row-cols-lg-6">
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/cantv_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/pdvsa_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/tsj_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/dem_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/fonden_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/mercantil_.png') }}">
    </div>
  </div>
    </div>

    <div class="carousel-item" style="height: 70px;">
  <div class="row row-cols-3 row-cols-sm-6 row-cols-md-6 row-cols-lg-6">
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/mercal_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/caracas_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/educacion_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/constitucion_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/movilnet_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/bandes_.png') }}">
    </div>
  </div>
    </div>

    <div class="carousel-item" style="height: 70px;">
  <div class="row row-cols-1 row-cols-sm-6 row-cols-md-2 row-cols-lg-6">
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/vumi_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/alo_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/atrio_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/horizonte_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/makler_.png') }}">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/venezolana_.png') }}">
    </div>
  </div>
    </div>

        <div class="carousel-item" style="height: 70px;">
  <div class="row row-cols-1 row-cols-sm-6 row-cols-md-2 row-cols-lg-6">
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/banesco_.png') }}" style="height: 60px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/corpoelec_.png') }}" style="height: 60px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/previsora__.png') }}" style="height: 50px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/piramide_.png') }}" style="height: 60px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/cultura_.png') }}" style="height: 60px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/hispana_.png') }}" style="height: 60px; width: 90px;">
    </div>
  </div>
    </div>

            <div class="carousel-item" style="height: 70px;">
  <div class="row row-cols-1 row-cols-sm-6 row-cols-md-2 row-cols-lg-6">
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/mapfre_.png') }}" style="height: 40px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/venezuela_.png') }}" style="height: 40px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/cnu_.png') }}" style="height: 50px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/seniat_.png') }}" style="height: 40px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/occidental_.png') }}" style="height: 40px; width: 90px;">
    </div>
    <div class="col-sm">
      <img src="{{ asset('./img/seguros/unes_.png') }}" style="height: 40px; width: 90px;">
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

 {{-- ___________O_______________O_______SEGUROS___________O_______________O_______ --}}

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
    <div class="p-2"></div>
    <div class="row">
        <div class="col-3"><a href="https://www.telavip.com.ve/" target="_blank"><img src="{{ asset('img/telavip.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-3"><a href="http://ascensoresbyt.com.ve/" target="_blank"><img src="{{asset ('img/byt.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-3"><img src="{{ asset('img/limpieza.jpg') }}" alt="" class="img-fluid"></div>
        <div class="col-3"><img src="{{asset ('img/mat-medico.jpg') }}" alt="" class="img-fluid"></div>
    </div>
<center><b>Pagina desarrollada por Telavip - 2020 ©</b></center>
    </footer>

     <div class="text-center mt-2">
        <a href=http://www.ademails.com/estadisticas1060034463.htm>
        <script type="text/javascript" language="JavaScript">
        <!--
        document.write("<img src=\"http://www.ademails.com/cgi-bin/contador.cgi?ID=1060034463");
        document.write("&referer=");
        document.write(escape(document.referrer));
        document.write("\" border=0 alt=\"Estadisticas\">");
        // -->
        </script><noscript><img src=http://www.ademails.com/cgi-bin/contador.cgi?ID=1060034463 border=0 alt="Estadisticas"></noscript></a>


    </div>
{{-- ___________O___________O__________PIE DE PAGINA___________O___________O__________
 --}}
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
