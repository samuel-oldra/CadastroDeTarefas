@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td colspan="2">Ações</td>
            </tr>
            </thead>
            <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{$tarefa->id}}</td>
                    <td>{{$tarefa->nome}}</td>
                    <td><a href="{{ route('tarefas.edit',$tarefa->id)}}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{ route('tarefas.destroy', $tarefa->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection