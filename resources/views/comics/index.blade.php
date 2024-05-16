@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">THUMB</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">SERIES</th>
                        <th scope="col">SALE DATE</th>
                        <th scope="col">TYPE</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td><img src="{{ $comic->thumb }}" alt="" style="width: 100px"></td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>


                        </tr>
                    @empty

                        <td scope="row" colspan="8">nothing to show</td>

                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>

    </div>
@endsection