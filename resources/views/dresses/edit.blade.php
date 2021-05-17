@extends('layouts.layout')

@section('pageTitle', 'Modifica del Prodotto')


@section('content')
    <section class="title">
        <h1>Modifica il prodotto</h1>
    </section>

    <section class="insertItem_form">
        <form action="{{ route('dresses.update', $dress->id)}}" method="post">

            @csrf
            @method('PUT')

            <div class="form-group">

                <input type="text" name="brand" id="brand "placeholder="Brand" value="{{$dress->brand}}">

                <input type="text" name="type" id="type "placeholder="Tipologia" value="{{$dress->type}}">

                <input type="text" name="size" id="size "placeholder="Taglia" value="{{$dress->size}}">

                <input type="float" name="price" id="price "placeholder="Prezzo" value="{{$dress->price}}">


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