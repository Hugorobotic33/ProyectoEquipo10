<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VentaRequest;

use App\VentaModel;

class VentaController extends Controller
{
    //

    public function VentaForm(Request $request){

        $ventas=VentaModel::create($request->all());
        return redirect('usuario');
    }
}
