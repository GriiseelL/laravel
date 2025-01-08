<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function first($tmp=null)
    {
        view()->share( [
            "tmp" => $tmp
        ]

        );
        return view("v_nameclass");
    }

    public function input(Request $request)
    {
        $tmp = "my name is $request->nama and my class is $request->kelas";
        return redirect()->route("data", $tmp);
    }
    public function biodata($tmp)
    {
        view()->share(
            [
                "tmp" => $tmp
            ]

        );
        return view("v_hasilname");
    }

}
