@extends('layouts.layout')

@section('pageTitle', 'Inserimento Vestito')


@section('content')
    <h1>Insert your Product</h1>

    <form action="{{ route('dresses.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">

            <label for="brand">Brand:</label>
            <input type="text" name="brand" id="brand "placeholder="brand">

            <label for="type">Type:</label>
            <input type="text" name="type" id="type "placeholder="type">

            <label for="size">Size:</label>
            <input type="text" name="size" id="size "placeholder="size">

            <label for="price">Price:</label>
            <input type="float" name="price" id="price "placeholder="price">


            <input type="submit" value="Invia">

        </div>
    </form>
@endsection