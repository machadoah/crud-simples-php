@extends('base')
@section('conteudo')
<dl>
    <dt>Nome</dt>
    <dd>{{ $aluno->nome }}</dd>

    <dt>Email</dt>
    <dd>{{ $aluno->email }}</dd>

    <dt>Telefone</dt>
    <dd>{{ $aluno->telefone }}</dd>
</dl>
<form action="/alunos/{{$aluno->id}}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="Confirmar">
<a href="/alunos">Voltar</a>
</form>
@endsection