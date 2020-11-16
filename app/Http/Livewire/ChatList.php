<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;
use App\Chat as Chats;

class ChatList extends Component
{

	public $usuario;
    public $mensajes;
    protected $ultimoId;


	protected $listeners = ['mensajeRecibido', 'cambioUsuario'];

		public function mount()
	{
		
		$ultimoId = 0;
        $this->mensajes = [];                       
        
        $this->usuario = auth()->user()->name;

	}

public function mensajeRecibido($data)
    {                
        if($this->usuario != "")
        {
            // El contenido de la Push
            //$data = \json_decode(\json_encode($data));
            
            $mensajes = \App\Chat::orderBy("created_at", "desc")->take(5)->get();
            //$this->mensajes = [];            

            foreach($mensajes as $mensaje)
            {
                if($this->ultimoId < $mensaje->id)
                {
                    $this->ultimoId = $mensaje->id;
                    
                    $item = [
                        "id" => $mensaje->id,
                        "usuario" => $mensaje->usuario,
                        "mensaje" => $mensaje->mensaje,
                        "recibido" => ($mensaje->usuario != $this->usuario),
                        "fecha" => $mensaje->created_at->diffForHumans()
                    ];
    
                    array_unshift($this->mensajes, $item);                
                    //array_push($this->mensajes, $item);                
                }
                
            }

            if(count($this->mensajes) > 5)
            {
                array_pop($this->mensajes);
            }
        }

    }

	


    public function render()
    {
        return view('livewire.chat-list');
    }
}
