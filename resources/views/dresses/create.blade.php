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

                <input type="text" name="brand" id="brand "placeholder="Brand">

                <input type="text" name="type" id="type "placeholder="Tipologia">

                <input type="text" name="size" id="size "placeholder="Taglia">

                <input type="float" name="price" id="price "placeholder="Prezzo">


                <input type="submit" value="Invia">
            </div>
        </form>
    </section>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h5>Errori nell'inserimento</h5>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
@endsection