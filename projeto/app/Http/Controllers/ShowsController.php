<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowFormResource;
use App\Models\Show;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function index(Request $request) {
        $shows = Show::query()->orderBy('name')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('shows.index', compact('shows', 'mensagem'));
    }

    public function create()
    {
        return view('shows.create');
    }

    public function store(ShowFormResource $request)
    {
        // dd($request->all());
        $show = Show::create($request->all());

        return redirect()
            ->route('listar_shows')
            ->with('mensagem', "Série '{$show->name}' incluida com sucesso!");
    }

    public function edit(Show $shows)
    {
        return view('shows.edit')->with('show', $shows);
    }

    public function update(Show $shows, ShowFormResource $request)
    {
        $shows->fill($request->all());
        $shows->save();

        return redirect()
            ->route('listar_shows')
            ->with('mensagem', "Série '{$shows->name}' atualizada com sucesso");

    }

    public function destroy (Show $shows)
    {
        $shows->delete();

        return redirect()
            ->route('listar_shows')
            ->with('mensagem', "Show '{$shows->name}' removida com sucesso");
    }
}
