@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="mb-5">
            <span class="badge bg-primary me-3"> {{ $comic->type }}</span>
            Price: {{ $comic->price }}
        </div>

        <div class="row mb-5">
            <div class="col-md-3">
                <img class="img-fluid" src="{{$comic->image}}" alt="{{ $comic->title}}">
            </div>
            <div class="col-md-9">
                {!! $comic->description !!}
            </div>
        </div>
        <a href="{{ route('comics.index')}}">Back to Archive</a>
    </div>
@endsection