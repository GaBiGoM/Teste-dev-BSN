<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Vaga::with('linguagem')->get(), 200);
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
        $Vaga = Vaga::create($request->all());
        return response($Vaga, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function show($vaga)
    {
        $Vaga = Vaga::find($vaga);
        if(is_null($Vaga)){
            return response()->json(['message' => 'Vaga Not Found'], 404);
        }
        return response()->json($Vaga::find($vaga),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vaga)
    {
        $vaga = Vaga::find($vaga);
        if(is_null($vaga)){
            return response()->json(['message' => 'Vaga Not Found'], 404);
        }
        $input = $request->all();
        $vaga->fill($input)->save();
        return response($vaga, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function destroy( $vaga)
    {
        $Vaga = Vaga::find($vaga);
        if(is_null($Vaga)){
            return response()->json(['message' => 'Vaga Not Found'], 404);
        }
        $Vaga->delete();
        return response($Vaga, 200);
    }
}
