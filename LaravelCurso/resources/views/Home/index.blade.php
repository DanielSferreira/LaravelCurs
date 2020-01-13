<?php use Illuminate\Support\Facades\DB;?>
@extends('padrao')

@section('titulo','Index')

@section('conteudo')
  <h1>sou apenas um teste</h1>
  <h3>

<?php 
var_dump($faltas);
?>

  @foreach($faltas as $falta)
      <p>{{$falta->Data}}</p>

   @endforeach
  </h3>
@endsection
</body>
</html>