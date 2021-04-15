<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DireccionModel;
use App\Http\Requests\DireccionRequest;
class DireccionController extends Controller
{
    //
    public function DirForm(Request $request){

        $ventas=DireccionModel::create($request->all());
        return redirect('usuario');
    }

}
