<?php

namespace App\Http\Controllers;

use App\Models\Linguagem;
use Illuminate\Http\Request;

class LinguagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Linguagem::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Linguagem = Linguagem::create($request->all());
        return response($Linguagem, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function show($linguagem)
    {
        $Linguagem = Linguagem::find($linguagem);
        if(is_null($Linguagem)){
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        return response()->json($Linguagem::find($linguagem),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Linguagem $linguagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $linguagem)
    {
        $Linguagem = Linguagem::find($linguagem);
        if(is_null($Linguagem)){
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        $Linguagem->update($request->all());
        return response($Linguagem, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linguagem  $linguagem
     * @return \Illuminate\Http\Response
     */
    public function destroy($linguagem)
    {
        $Linguagem = Linguagem::find($linguagem);
        if(is_null($Linguagem)){
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        $Linguagem->delete();
        return response($Linguagem, 200);
    }
}
