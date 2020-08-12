@extends('layouts.app')


@section("content")
<div class="wrapper create-pizza">
    
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
    @csrf
        <label for="name">your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">choose pizza your type:</label>
        <select name="type" id="type">
            <option value="hawai">Hawai</option>
            <option value="margarita">Margarita</option>
            <option value="bbq">Bbq</option>
        </select>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin and crispy">Thin and crispy</option>
        </select>
        <fieldset>
            <label>Extra Topping</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Muschrooms<br /> 
            <input type="checkbox" name="toppings[]" value="salami">Salami<br />
            <input type="checkbox" name="toppings[]" value="pepper">Peppers<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza">

        {{ $_POST["mydata"] ?? null }}
    </form>
</div>
@endsection