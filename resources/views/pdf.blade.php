<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
  </head>

  <body>

    <img src="./storage/{{ $nombre }}" style="height:200px; width: 200px; ">
    <h3>Datos Personales</h3>
    <hr>
    <p><b>Nombre:</b></p> <p>{{ $name }}</p>
    <p><b>Apellido:</b></p> <p>{{ $apellido }}</p>
    <p><b>Direccion:</b></p> <p>{{ $direccion }}</p>
    <p><b>Numero Telefonico:</b></p> <p>{{ $numero_telefonico }}</p>
    <p><b>Numero de Habitación:</b></p> <p>{{ $numero_habitacion }}</p>
    <p><b>Correo:</b></p> <p>{{ $email }}</p>
    <h3>Experiencia Laboral</h3>
    <hr>
    <p><b>Primera Experiencia Laboral:</b></p> <p>{{ $primera_experiencia }}</p>
    <p><b>Segunda Experiencia Laboral:</b></p> <p>{{ $segunda_experiencia }}</p>
    <p><b>Habilidades:</b></p> <p>{{ $habilidades }}</p>
    <h3>Referencias Personales</h3>
    <hr>
    <h4>Referencia 1</h4>
    <hr>
    <p><b>Nombre:</b></p> <p>{{ $ref_nombre }}</p>
    <p><b>Apellido:</b></p> <p>{{ $ref_apellido }}</p>
    <p><b>Telefono:</b></p> <p>{{ $ref_telefono }}</p>
    <h4>Referencia 2</h4>
    <hr>
    <p><b>Nombre:</b></p> <p>{{ $ref_dos_nombre }}</p>
    <p><b>Apellido:</b></p> <p>{{ $ref_dos_apellido }}</p>
    <p><b>Telefono:</b></p> <p>{{ $ref_dos_telefono }}</p>
    <h4>Referencia 3</h4>
    <hr>
    <p><b>Nombre:</b></p> <p>{{ $ref_tress_nombre }}</p>
    <p><b>Apellido:</b></p> <p>{{ $ref_tress_apellido }}</p>
    <p><b>Telefono:</b></p> <p>{{ $ref_tress_telefono }}</p>


   


  
  </body>
</html>