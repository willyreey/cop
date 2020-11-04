<!DOCTYPE html>
<html lang="es">
<head>
<style>
    #myModal{
    background: rgb(60,218,255);
background: linear-gradient(90deg, rgba(60,218,255,1) 0%, rgba(74,74,156,1) 46%, rgba(15,205,244,1) 100%);

    }
</style>
    <!-- Modal -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    @include('sweetalert::alert')
<form action="/activar_c" method="POST">
   
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none; ">
<div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content"  style="height:200px; top:150px;">
    <div class="modal-header">
            <center>
        <h4 class="modal-title">ACTIVACIÓN DE CUENTA</h4>
        </center>
</div>
{{ csrf_field() }}

        <center>
        <label>Cédula:</label>
        <input type="text" id="cedula"  placeholder="Ingrese la Cédula " name="cedula">
        <button type="submit" style="margin: 5px;"   class="btn btn-primary">Activar</button>
        </center>
    </div>
</form>
      </div></div></div></div><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
 $(function(){
  $("#myModal").modal();
 });
</script>
<script src="{{asset ('js_u/validaciones.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>