@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Lista de Tarefas
        </div>
        <div class="card-body">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br/>
            @endif
            <a href="{{ route('tarefas.create')}}" class="btn btn-primary">Adicionar</a>
            <br/><br/>
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
        </div>
    </div>
@endsection