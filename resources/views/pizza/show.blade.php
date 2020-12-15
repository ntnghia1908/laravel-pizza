@extends('layouts.layout');

@section('content')
<div class="wrapper pizza-detail">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <a href="/pizza" class="back">Back to all pizzas</a>
</div>
@endsection
