<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Administrador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $administrador = new Administrador;
        $administrador -> tipo_de_usuario = $request -> tipo_de_usuario;
        $administrador -> nombre_completo = $request -> nombre_completo;
        $administrador -> email = $request -> email;
        $administrador -> password = $request -> password;
        $administrador -> numero_de_telefono = $request -> numero_de_telefono;
        $administrador -> domicilio = $request -> domicilio;
        $administrador -> ciudad = $request -> ciudad;
        $administrador -> estado = $request -> estado;
        $administrador -> codigo_postal = $request -> codigo_postal;
        $administrador -> numero_de_domicilio = $request -> numero_de_domicilio;
        $administrador -> observaciones = $request -> observaciones;
        $administrador -> estatus = $request -> estatus;
        $administrador -> save();

        return $administrador;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        return $administrador;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $administrador = Administrador::find($id);
        $administrador -> tipo_de_usuario = $request -> tipo_de_usuario;
        $administrador -> nombre_completo = $request -> nombre_completo;
        $administrador -> email = $request -> email;
        $administrador -> password = $request -> password;
        $administrador -> numero_de_telefono = $request -> numero_de_telefono;
        $administrador -> domicilio = $request -> domicilio;
        $administrador -> ciudad = $request -> ciudad;
        $administrador -> estado = $request -> estado;
        $administrador -> codigo_postal = $request -> codigo_postal;
        $administrador -> numero_de_domicilio = $request -> numero_de_domicilio;
        $administrador -> observaciones = $request -> observaciones;
        $administrador -> estatus = $request -> estatus;
        $administrador -> update();

        return $administrador;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrador = Administrador::find($id);
        $administrador -> delete();

        return [];
    }
}
