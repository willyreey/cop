<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostulacionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $nombre;
     public $pdf;
     public $name;
     public $apellido;
     public $direccion;
     public $numero_telefonico;
     public $numero_habitacion;
     public $email;
     public $primera_experiencia;
     public $segunda_experiencia;
     public $habilidades;
     public $ref_nombre;
     public $ref_apellido;
     public $ref_telefono;
     public $ref_dos_nombre;
     public $ref_dos_apellido;
     public $ref_dos_telefono;
     public $ref_tress_nombre;
     public $ref_tress_apellido;
     public $ref_tress_telefono;
    public function __construct($name, $nombre, $apellido, $direccion, $numero_telefonico, $numero_habitacion, $email, $primera_experiencia, $segunda_experiencia, $habilidades, $ref_nombre, $ref_apellido, $ref_telefono, $ref_dos_nombre, $ref_dos_apellido, $ref_dos_telefono, $ref_tress_nombre, $ref_tress_apellido, $ref_tress_telefono, $pdf)
    {
        $this->pdf = $pdf;
        $this->nombre = $nombre;
        $this->name = $name;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->numero_telefonico = $numero_telefonico;
        $this->numero_habitacion = $numero_habitacion;
        $this->email = $email;
        $this->primera_experiencia = $primera_experiencia;
        $this->segunda_experiencia = $segunda_experiencia;
        $this->habilidades = $habilidades;
        $this->ref_nombre = $ref_nombre;
        $this->ref_apellido = $ref_apellido;
        $this->ref_telefono = $ref_telefono;
        $this->ref_dos_nombre = $ref_dos_nombre;
        $this->ref_dos_apellido = $ref_dos_apellido;
        $this->ref_dos_telefono = $ref_dos_telefono;
        $this->ref_tress_nombre = $ref_tress_nombre;
        $this->ref_tress_apellido = $ref_tress_apellido;
        $this->ref_tress_telefono = $ref_tress_telefono;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email')
                    ->subject('Curriculum Vitae')->attachData($this->pdf, 'curriculum.pdf', ['mime' => 
   'application/pdf']);    }
}
