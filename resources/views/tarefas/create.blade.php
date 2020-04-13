@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Adicionar Tarefa
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form method="post" action="{{ route('tarefas.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome"/>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
                <a href="{{ route('tarefas.index')}}" class="btn btn-danger">Voltar</a>
            </form>
        </div>
    </div>
@endsection