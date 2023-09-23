@extends('base')
@section('conteudo')
<form action="/alunos/{{$aluno->id}}" method="post">
    @csrf
    @method('PUT')
    <p>Nome: <input type="text" name="nome" value="{{$aluno->nome}}"></p>
    <p>Email: <input type="email" name="email" value="{{$aluno->email}}"></p>
    <p>Telefone: <input type="text" name="telefone" value="{{$aluno->telefone}}"></p>
    <p>
        <input type="submit" value="Enviar">
        <a href="/alunos">Voltar</a>
    </p>
</form>
@endsection