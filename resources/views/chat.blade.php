@extends('template')
@section("meta")
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>


    <title>Chat en Linea</title>
@endsection
@section("content")
<div style="position: absolute;" class="alert alert-success collapse" role="alert" id="avisoSucces">
  Mensaje Enviado
</div>

<div class="container border border-dark rounded">

<div data-spy="scroll" data-offset="0">
<div  class="row" style="height: 300px; background-color: white;">
@livewire("chat-list")
</div>
</div>
</div>

<div class="p-2 w-100"></div>
<div class="container">
@livewire("chat-form")
</div>


@endsection

@section("footer")

@endsection

