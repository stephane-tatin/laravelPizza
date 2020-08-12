@extends('layouts.app')


@section("content")
<div class="wrapper pizza-index">
    <h1>PIzza Order</h1>
    @foreach($pizzas as $pizza)

    <div class="pizza-item">
        <img src="img/sPizza.png" alt="pizza">
        <h4><a href="{{ route('pizzas.show', $pizza->id) }}"> {{ $pizza->name}} </a>
    </div>
    </h4>

    @endforeach

</div>

@endsection