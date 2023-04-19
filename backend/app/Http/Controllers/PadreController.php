<?php

namespace App\Http\Controllers;

use App\Models\Padre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Padre::all();    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $padre = new Padre;
        $padre -> tipo_de_usuario = $request -> tipo_de_usuario;
        $padre -> nombre_completo = $request -> nombre_completo;
        $padre -> email = $request -> email;
        $padre -> password = $request -> password;
        $padre -> numero_de_telefono = $request -> numero_de_telefono;
        $padre -> domicilio = $request -> domicilio;
        $padre -> ciudad = $request -> ciudad;
        $padre -> estado = $request -> estado;
        $padre -> codigo_postal = $request -> codigo_postal;
        $padre -> numero_de_domicilio = $request -> numero_de_domicilio;
        $padre -> foto = $request -> foto;
        $padre -> direccion_de_trabajo = $request -> direccion_de_trabajo;
        $padre -> nombre_de_trabajo = $request -> nombre_de_trabajo;
        $padre -> texto_qr = $request -> texto_qr;
        $padre -> observaciones = $request -> observaciones;
        $padre -> save();

        return $padre;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function show(Padre $padre)
    {
        return $padre;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Padre $padre)
    {
        $padre = Padre::find($id);
        $padre -> tipo_de_usuario = $request -> tipo_de_usuario;
        $padre -> nombre_completo = $request -> nombre_completo;
        $padre -> email = $request -> email;
        $padre -> password = $request -> password;
        $padre -> numero_de_telefono = $request -> numero_de_telefono;
        $padre -> domicilio = $request -> domicilio;
        $padre -> ciudad = $request -> ciudad;
        $padre -> estado = $request -> estado;
        $padre -> codigo_postal = $request -> codigo_postal;
        $padre -> numero_de_domicilio = $request -> numero_de_domicilio;
        $padre -> foto = $request -> foto;
        $padre -> direccion_de_trabajo = $request -> direccion_de_trabajo;
        $padre -> nombre_de_trabajo = $request -> nombre_de_trabajo;
        $padre -> texto_qr = $request -> texto_qr;
        $padre -> observaciones = $request -> observaciones;
        $padre -> update();

        return $padre;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Padre $padre)
    {
        $padre = Padre::find($id);
        $padre -> delete();

        return [];
    }
}
