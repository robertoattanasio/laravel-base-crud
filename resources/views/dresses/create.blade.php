@extends('layouts.layout')

@section('pageTitle', 'Inserimento Vestito')


@section('content')
    <section class="title">
        <h1>Inserisci il tuo prodotto</h1>
    </section>


    <section class="insertItem_form">
        <form action="{{ route('dresses.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">

                <input type="text" name="brand" id="brand "placeholder="brand">

                <input type="text" name="type" id="type "placeholder="type">

                <input type="text" name="size" id="size "placeholder="size">

                <input type="float" name="price" id="price "placeholder="price">


                <input type="submit" value="Invia">

            </div>
        </form>
    </section>
@endsection