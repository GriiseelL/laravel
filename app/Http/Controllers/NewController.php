<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function first($hitung=null)
    {
        view()->share(
            [
                // "data" => "first experience"
                "hitung" => $hitung
            ]
        );

        return view("v_first");
    }

    public function hitungdata(Request $request)
    {
        $hitung = $request->panjang + $request->lebar;
        return redirect()->route("first", $hitung);
    }
}
