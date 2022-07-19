<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // c'est un object
    public function home()
    {
        $data = [
            "firstName" => "John",
            "lastName" => "Doe",
            "age" => 25
        ];
        
        // dd($data); // dump & die.

        // return $data; // die.

        return view("welcome",compact("data"));
    }

    // ajout d'un var dans la page a-propos.blade
    public function about()
    {
        $nom = "John Doe";
        return view("a-propos",compact("nom"));
                                 // [ "nom" => $nom ]
    }

    public function contact()
    {
        return view("contact");
    }
}
