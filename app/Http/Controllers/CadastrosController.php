<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCadastrosRequest;
use App\Http\Resources\CadastrosResource;
use App\Models\Cadastros;
use Illuminate\Http\Response;

class CadastrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cadastros = Cadastros::paginate();
        return CadastrosResource::collection($cadastros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCadastrosRequest $request)
    {
        $data = $request->validated();
        $cadastro = Cadastros::create($data);
        return new CadastrosResource($cadastro);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cadastro = Cadastros::findOrFail($id);
        return new CadastrosResource($cadastro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCadastrosRequest $request, string $id)
    {
        $cadastro = Cadastros::findOrFail($id);
        $data = $request->validated();
        $cadastro->update($data);
        return new CadastrosResource($cadastro);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cadastros::findOrFail($id)->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
