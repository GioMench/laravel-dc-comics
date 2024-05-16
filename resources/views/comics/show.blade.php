@extends('layouts.app')

@section('content')
  
    <section class="container d-flex justify-content-around p-5">
        <div>
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="..." style="height: 450px; width: 350px;">
        </div>

        <div class="px-5">
            <h2>{{ $comic->title}}</h2>
            <p class="fw-lighter">{{ $comic->description }}</p>
            <div>
                <span><strong>Serie:</strong> {{ $comic->series}}</span>
                <span class="px-5"><strong>Type:</strong> {{ $comic->type}}</span>
            </div>
            <div style="font-size: 13px" class="py-2">
                <span><strong>Sale date:</strong> {{ $comic->sale_date}}</span>
                <span class="px-5"><strong>Price:</strong> {{ $comic->price}}</span>
            </div>

        </div>


    </section>
@endsection
