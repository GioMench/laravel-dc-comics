@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Comic</h1>

        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="comic title" value="{{$comic->title}}" />
                <small id="titleHelper" class="form-text text-muted">Type title of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea for="description" class="form-control" name="description" id="description" rows="7">{{$comic->description}} </textarea >
                <small id="descriptionHelper" class="form-text text-muted">Type storyline of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="comic thumb" value="{{$comic->thumb}}"/>
                <small id="thumbHelper" class="form-text text-muted">Insert thumb of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="comic price" value="{{$comic->price}}"/>
                <small id="priceHelper" class="form-text text-muted">Type price of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="comic series" value="{{$comic->series}}"/>
                <small id="seriesHelper" class="form-text text-muted">Type series of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="comic type" value="{{$comic->type}}"/>
                <small id="typeHelper" class="form-text text-muted">Type the type of new Comic</small>
            </div>

            <button type="submit" class="btn btn-primary">
                Save
            </button>


        </form>
    </div>
@endsection
