<div style="width: 100%; height: 100%; overflow-y: scroll;">

                @foreach($mensajes as $mensaje)        
                <div>
                    
                    @if($mensaje[!="recibido"])
                        <div class="alert alert-warning" style="margin-right: 50px;">
                            <strong>{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                            <br><span class="text-muted">{{$mensaje["mensaje"]}}</span>
                        </div>
                    @else
                        <div class="alert alert-success" style="margin-left: 50px;">
                            <strong>{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                            <br><span class="text-muted">{{$mensaje["mensaje"]}}</span>
                        </div>
                    @endif
                    
                </div>        
            @endforeach

</div>
    <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
        
            var pusher = new Pusher('1e947625404abb361c2c', {
              cluster: 'mt1',
              forceTLS: true
            });

            var channel = pusher.subscribe('chat-channel');
            channel.bind('chat-event', function(data) {
              //alert(JSON.stringify(data));
              window.livewire.emit('mensajeRecibido', data);
            });
  </script>