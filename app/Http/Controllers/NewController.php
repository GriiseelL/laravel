<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function first()
    {

        view()->share(
            [
                "data" => "first experience"
            ]
        );

        return view("first");
    }
}
