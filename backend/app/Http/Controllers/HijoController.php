<?php

namespace App\Http\Controllers;

use App\Models\Hijo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hijo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hijo = new Hijo;
        $hijo -> nombre_completo = $request -> nombre_completo;
        $hijo -> tipo_de_sangre = $request -> tipo_de_sangre;
        $hijo -> turno = $request -> turno;
        $hijo -> grupo = $request -> grupo;
        $hijo -> numero_de_seguro_social = $request -> numero_de_seguro_social;
        $hijo -> padre_id = $request -> padre_id;
        $hijo -> alergias = $request -> alergias;
        $hijo -> observaciones = $request -> observaciones;
        $hijo -> estatus = $request -> estatus;
        $hijo -> save();

        return $hijo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function show(Hijo $hijo)
    {
        return $hijo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Hijo $hijo)
    {
        $hijo = Hijo::find($id);
        $hijo -> nombre_completo = $request -> nombre_completo;
        $hijo -> tipo_de_sangre = $request -> tipo_de_sangre;
        $hijo -> turno = $request -> turno;
        $hijo -> grupo = $request -> grupo;
        $hijo -> numero_de_seguro_social = $request -> numero_de_seguro_social;
        $hijo -> padre_id = $request -> padre_id;
        $hijo -> alergias = $request -> alergias;
        $hijo -> observaciones = $request -> observaciones;
        $hijo -> estatus = $request -> estatus;
        $hijo -> update();

        return $hijo;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Hijo $hijo)
    {
        $hijo = Hijo::find($id);
        $hijo -> delete();

        return [];
    }
}
