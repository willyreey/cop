

<div class="border rounded" style="padding: 19px">

    <form action="{{route('traumatologia')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="exampleFormControlTextarea1"><b>Barra de preguntas y respuestas:</b></label>
        <textarea class="form-control" rows="3" style="overflow:auto;resize:none" name="pregunta"></textarea>
      </div>
      <div class="form-group">
        <input type="checkbox"> Acepto los Términos y Condiciones
      </div>
        <div class="form-group">
            <button type="submit"  class="btn btn-primary">ENVIAR</button>
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
<br>
