<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function utama()
    {

        view()->share(
            [

            ]
        );
        return view("v_input");
    }

    public function input(Request $request)
    {
        $tmp = "$request->nm_book $request->author";
        dd($tmp);
        return redirect()->route("nm_book", $tmp);
    }

    public function book($tmp)
    {
        view()->share(
            [
                "tmp" => $tmp
            ]

        );
        return view("v_bookhasil");
    }

}
