@extends('template')

<title>DIRECTORIO MÉDICO</title>

@section("content")
<div class="row">
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 1</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 2</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 3</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 4</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
      <div class="col-12 border-top border-bottom text-center">
        <h3>DOCTOR 5</h3>
      </div>
      <div class="col-12 text-center">
        <p><b>Nº Telefono: </b> 0414 - 000 - 0000 / 0412 - 000 - 0000</p>
        <p><b>Direcccion: </b>Av. Santiago de León, entre Av. Roma y Bruselas, Qta. Yaya, Nº. 469, La California Norte, Caracas</p>
      </div>
    </div>
    <hr>

    <div class="border rounded" style="padding: 19px;">
      <form action="{{route('directorio')}}" method="POST">
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
    </div>

@endsection

@section("footer")

Servicio de Ambulancia - Servicio de Ambulancia en San Bernardino - Servicio de Ambulancia en Caracas - Cardiologia en Caracas - Servicio de Ambulancia COP.
@endsection