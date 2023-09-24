@extends('base')
@section('conteudo')
<form action="/alunos/{{$aluno->id}}" method="post">
    @csrf
    @method('PUT')
    <p>Nome: <input type="text" name="nome" value="{{empty(old('nome')) ? $aluno->nome : old('nome')}}"></p>
    @if($errors->has('nome'))
        <p style="color:red;">{{$errors->first('nome')}}</p>
    @endif

    <p>Email: <input type="email" name="email" value="{{empty(old('email')) ? $aluno->email : old('email')}}"></p>
    @if($errors->has('email'))
        <p style="color:red;">{{$errors->first('email')}}</p>
    @endif


    <p>Telefone: <input type="text" name="telefone" value="{{empty(old('telefone')) ? $aluno->telefone : old('telefone')}}"></p>
    @if($errors->has('telefone'))
        <p style="color:red;">{{$errors->first('telefone')}}</p>
    @endif

    <p>
        <input type="submit" value="Enviar">
        <a href="/alunos">Voltar</a>
    </p>
</form>
@endsection