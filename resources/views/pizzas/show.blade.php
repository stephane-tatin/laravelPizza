@extends('layouts.app')


@section("content")
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }} </h1>
    <p class="type">type is {{ $pizza->type }}</p>
    <p class="base">base is {{ $pizza->base }}</p>
    <p class="extra-toppings"> 
     <?php $toppings = json_decode($pizza->toppings); ?>
    <ul>
        @foreach($toppings as $topping) 
        <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}"   method="POST">
        @csrf
        @method("DELETE")
        <button>Complete Order</button>
     </form>
    
    <a class="back" href="/pizzas">Back to all pizzas</a>
</div>
@endsection