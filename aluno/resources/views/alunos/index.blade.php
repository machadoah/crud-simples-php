@extends('base')
@section('conteudo')
    <h1>Alunos Legais 😌</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td><a href="/alunos/{{$aluno->id}}/edit">Editar</a></td>
                    <td><a href="/alunos/{{$aluno->id}}">Excluir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $alunos->links() }}
    

<br>

    <a href="/alunos/create">New</a>
@endsection