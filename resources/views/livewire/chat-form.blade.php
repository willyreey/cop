<div class="row">

    <div style="margin: none;">
    	
    	<input type="text" readonly class="form-control-plaintext" id="usuario" name="usuario" wire:model="usuario" hidden="">
    	@error("nombre") <small class="text-danger">{{ $message }}</small> @enderror
    </div>



        <div class="col-10" style="margin: none;">  	
    	
    	<textarea onclick="limpiarFormulario()" class="form-control" name="mensaje" wire:model="mensaje" placeholder="Ecribe un Mensaje" ></textarea>
    	@error("mensaje") <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <button class="col-2 btn btn-sm btn-primary" wire:click="enviarMensaje">Enviar</button>

</div>




{{-- 	<script>
		window.livewire.on('mensajeEnviado', function() {
			//Mostramos el aviso
			$("#avisoSucces").fadeIn("slow");

			//ocultamos el aviso en 3 segundos
			setTimeout(function(){ $("#avisoSucces").fadeOut("slow"); }, 3000);
		});
	</script> --}}

    <style type="text/css">
        #usuario{
            font-family: Verdana;
            font-style: oblique;
            font-size: 25px;
        }
    </style>

    <script>
  function limpiarFormulario() {
    document.getElementById("mensajeEnviado").reset();
  }
</script>