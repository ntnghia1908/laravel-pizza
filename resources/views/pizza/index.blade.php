@extends('layouts.layout');

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        @foreach ($pizzas as $p)
        <div>
            {{ $p->name }} - {{$p->base}} - {{$p->type}} 
        </div>
        @endforeach
    </div>
</div>
@endsection
