<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index () {
        return view('index');
    }

    function pizza() {
        return view('pizza');
    }

    function insert(Request $req){
        //validation
        $validation = $req->validate([
            "username"=>"required",
            "pizza_name"=>"required",
            "toppings"=>"required",
            "sauce"=>"required",
            "price"=>"required"
        ]);

        if($validation){
            return back()->with("success","Shvngbe svng Oqa ie..");
        }
        else
        return back()->withErrors($validation);
    }
}
