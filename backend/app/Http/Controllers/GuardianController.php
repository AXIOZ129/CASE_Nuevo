<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Guardian::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guardian = new Guardian;
        $guardian -> tipo_de_usuario = $request -> tipo_de_usuario;
        $guardian -> nombre_completo = $request -> nombre_completo;
        $guardian -> email = $request -> email;
        $guardian -> password = $request -> password;
        $guardian -> numero_de_telefono = $request -> numero_de_telefono;
        $guardian -> domicilio = $request -> domicilio;
        $guardian -> ciudad = $request -> ciudad;
        $guardian -> estado = $request -> estado;
        $guardian -> codigo_postal = $request -> codigo_postal;
        $guardian -> numero_de_domicilio = $request -> numero_de_domicilio;
        $guardian -> observaciones = $request -> observaciones;
        $guardian -> estatus = $request -> estatus;
        $guardian -> hora_de_ingreso = $request -> hora_de_ingreso;
        $guardian -> hora_de_salida = $request -> hora_de_salida;
        $guardian -> save();

        return $guardian;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        return $guardian;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Guardian $guardian)
    {
        $guardian = Guardian::find($id);
        $guardian -> tipo_de_usuario = $request -> tipo_de_usuario;
        $guardian -> nombre_completo = $request -> nombre_completo;
        $guardian -> email = $request -> email;
        $guardian -> password = $request -> password;
        $guardian -> numero_de_telefono = $request -> numero_de_telefono;
        $guardian -> domicilio = $request -> domicilio;
        $guardian -> ciudad = $request -> ciudad;
        $guardian -> estado = $request -> estado;
        $guardian -> codigo_postal = $request -> codigo_postal;
        $guardian -> numero_de_domicilio = $request -> numero_de_domicilio;
        $guardian -> observaciones = $request -> observaciones;
        $guardian -> estatus = $request -> estatus;
        $guardian -> hora_de_ingreso = $request -> hora_de_ingreso;
        $guardian -> hora_de_salida = $request -> hora_de_salida;
        $guardian -> update();

        return $guardian;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Guardian $guardian)
    {
        $guardian = Guardian::find($id);
        $guardian -> delete();

        return [];
    }
}
