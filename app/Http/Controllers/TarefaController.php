<?php

namespace App\Http\Controllers;

use App\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();

        return view('tarefas.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required'
        ]);
        $tarefa = new Tarefa([
            'nome' => $request->get('nome'),
            'pontos' => $request->get('pontos'),
            'data_entrega' => $request->get('data_entrega'),
            'tempo' => $request->get('tempo')
        ]);
        $tarefa->save();
        return redirect('/tarefas')->with('success', 'Tarefa adicionada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = Tarefa::find($id);

        return view('tarefas.edit', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $tarefa = Tarefa::find($id);
        $tarefa->nome = $request->get('nome');
        $tarefa->pontos = $request->get('pontos');
        $tarefa->data_entrega = $request->get('data_entrega');
        $tarefa->tempo = $request->get('tempo');
        $tarefa->save();

        return redirect('/tarefas')->with('success', 'Tarefa editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();

        return redirect('/tarefas')->with('success', 'Tarefa deletada');
    }
}
