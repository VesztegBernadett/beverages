<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    function index():View{
        $beverages = Beverage::all();
        return view("beverages.index",[
            "beverages"=>$beverages
        ]);
    }

    function show(){

    }

    function packaging(){
        
    }
}
