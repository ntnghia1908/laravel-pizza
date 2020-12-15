<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
       $pizzas = Pizza::all();
    //    $pizzas = Pizza::orderBy('name')->get();
    //    $pizzas = Pizza::where('type', 'hawaiian')->get();
    
        return view('pizza.index',['pizzas'=>$pizzas,
                'name'=>request('name'),
                'age'=>request('age')]);
    }

    public function show($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizza.show',['pizza'=>$pizza]);
    }

    public function create() {
        return view('pizza.create');
    }
}
