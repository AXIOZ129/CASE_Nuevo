<?php

namespace App\Http\Controllers;

use App\Models\Padre;
use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginAdmin(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $condicion = Administrador::where('email', $data['email']) -> where('password', $data['password']) -> first();

        if ($condicion) {
            return response($condicion, 200);
        }

        return response(['message' => 'Error, favor de verificar los datos'], 404);
    }

    public function loginGuardian(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $condicion = Guardian::where('email', $data['email']) -> where('password', $data['password']) -> first();

        if ($condicion) {
            return response($condicion, 200);
        }

        return response(['message' => 'Error, favor de verificar los datos'], 404);
    }

    public function loginPadre(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $condicion = Padre::where('email', $data['email']) -> where('password', $data['password']) -> first();

        if ($condicion) {
            return response($condicion, 200);
        }

        return response(['message' => 'Error, favor de verificar los datos'], 404);
    }
}
