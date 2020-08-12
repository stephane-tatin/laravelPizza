<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        
        $pizzas = Pizza::all();

        return view('pizzas.index', [
            "pizzas" => $pizzas
        ]);
    }

 

    public function create() {


        return view('pizzas.create');
    }

    public function show($id) {

        $pizza = Pizza::findorFail($id);

        return view('pizzas.show', [
            "pizza" => $pizza
        ]);
    }

    public function store() {

        $pizza = new Pizza();

        $pizza->name = request("name");
        $pizza->type = request("type");
        $pizza->base = request("base");
        $pizza->price = 15;
        $pizza->toppings = json_encode(request("toppings"));

        



        $pizza->save();

        return redirect("/")->with("mssg", "Thanks for your order");
    }
}
