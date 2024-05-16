@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Comic</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="comic title" />
                <small id="titleHelper" class="form-text text-muted">Type title of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea for="description" class="form-control" name="description" id="description" rows="7"></textarea>
                <small id="descriptionHelper" class="form-text text-muted">Type storyline of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="comic thumb" />
                <small id="thumbHelper" class="form-text text-muted">Insert thumb of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="comic price" />
                <small id="priceHelper" class="form-text text-muted">Type price of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="comic series" />
                <small id="seriesHelper" class="form-text text-muted">Type series of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="sale" class="form-label">sale date</label>
                <input type="text" class="form-control" name="sale" id="sale" aria-describedby="saleHelper"
                    placeholder="comic sale" />
                <small id="saleHelper" class="form-text text-muted">Type sale of new Comic</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type date</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="comic type" />
                <small id="typeHelper" class="form-text text-muted">Type the type of new Comic</small>
            </div>

            <button type="submit" class="btn btn-primary">
                Create
            </button>


        </form>
    </div>
@endsection
