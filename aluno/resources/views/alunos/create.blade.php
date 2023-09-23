@extends('base')
@section('conteudo')

<form action="/alunos" method="post">
    @csrf
    <p>Nome: <input type="text" name="nome"></p>
    <p>Email: <input type="email" name="email"></p>
    <p>Telefone: <input type="text" name="telefone"></p>
    <p>
        <input type="submit" value="Enviar">
        <a href="/computadores">Voltar</a>  
    </p>
</form>

@endsection