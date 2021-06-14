@extends('layouts.main')

@section('content')
    <div class="container text-center">
        <h1 class="mb-3">404</h1>

        <h2 class="mb-5">{{ $exceptions->getMessage() }}</h2>

        <p class="mb-5">Something went wrong! The resource you are looking for is not available.</p>
        
        <a href="{{route('home')}}">Back Home</a>
    </div>
@endsection