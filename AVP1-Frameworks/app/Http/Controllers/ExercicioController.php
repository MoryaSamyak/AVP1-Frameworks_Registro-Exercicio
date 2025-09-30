<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Exercicio;

class ExercicioController extends Controller
{
    public function index()
    {
        $exercicios = Exercicio::where('user_id', Auth::id())->get();
        return view('exercicio.index', ['exercicios' => $exercicios]);
    }

    public function create()
    {
        return view('exercicio.create');
    }

    public function store(Request $request)
    {
        $request->validate
        ([
            'exercicio' => 'required|string|max:60|min:5',
            'duracao' => 'required|date_format:H:i',
            'calorias_gastas' => 'required|numeric|min:0',
            'data' => 'required|date'
        ]);

        $exercicio = new Exercicio();

        $exercicio->exercicio = $request->exercicio;
        $exercicio->duracao = $request->duracao;
        $exercicio->calorias_gastas = $request->calorias_gastas;
        $exercicio->data = $request->data;
        $exercicio->user_id = Auth::id();

        if ($exercicio->save())
            {
                return redirect()->route('exercicio.index')->with('success', 'Exercício adicionado com sucesso!');
        } else
         {
        return redirect()->back()->with('error', 'Falha ao salvar o exercício.');
        }

    }
}
