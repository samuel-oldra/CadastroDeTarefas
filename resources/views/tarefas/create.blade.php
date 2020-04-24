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
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome"/>
                </div>
                <div class="form-group">
                    <label for="pontos">Pontos:</label>
                    <input type="number" class="form-control" name="pontos"/>
                </div>
                <div class="form-group">
                    <label for="data_entrega">Data de Entrega:</label>
                    <input type="date" class="form-control" name="data_entrega"/>
                </div>
                <div class="form-group">
                    <label for="tempo">Tempo (horas):</label>
                    <input type="number" step="0.1" class="form-control" name="tempo"/>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
                <a href="{{ route('tarefas.index')}}" class="btn btn-danger">Voltar</a>
            </form>
        </div>
    </div>
@endsection