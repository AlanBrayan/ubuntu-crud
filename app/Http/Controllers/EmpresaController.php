<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('empresa.create', compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empresas = new Empresa;
        $empresas->nombre = $request->input('nombre');
        $empresas->save();
        return redirect(url('empresas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresas = Empresa::find($id);
        return view('empresa.edit', compact('empresas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empresas = Empresa::find($id);
        $empresas->nombre = $request->input('nombre');
        $empresas->save();
        return redirect (url('empresas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empresas = Empresa::find($id);
        $empresas->delete();
        return redirect(url('empresas'));
    }
}
