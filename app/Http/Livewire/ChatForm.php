<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{

	public $usuario;
	public $mensaje;

    protected $updatesQueryString = ['usuario'];

	public function mount()
	{
		$this->usuario = auth()->user()->name;
		$this->mensaje = "";

	}

    public function updated($field)
    {
        // Solo validamos el campo que genera el update
        $validatedData = $this->validateOnly($field, [
            'usuario' => 'required',
            'mensaje' => 'required',
        ]);
    }

    public function enviarMensaje()
    {                
        $validatedData = $this->validate([
            'usuario' => 'required',
            'mensaje' => 'required',
        ]);

        // Guardamos el mensaje en la BBDD
        \App\Chat::create([
            "usuario" => $this->usuario,
            "mensaje" => $this->mensaje
        ]);;

        $this->mensaje = null;

         event(new \App\Events\EnviarMensaje($this->usuario, $this->mensaje));

    	// $this->emit("mensajeRecibido", $datos);

    	
    }
      public function render()
    {
        return view('livewire.chat-form');
    }
}
