@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="css/styles.css">

@section('pageTitle', 'Prodotti')
    
@section('content')
    <section class="title">
        <h1>Prodotti</h1>
    </section>

    <div class="product-container">
        @foreach ($dresses as $dress)
            <div class="product-item">

                <div class="product-info">
                    @if ($dress['brand'] != '')
                        <h2>{{$dress['brand']}}</h2>   
                    @endif

                    @if ($dress['type'] != '')
                        <h5>{{$dress['type']}}</h5>   
                    @endif

                    @if ($dress['size'] != '')
                        <h5>{{$dress['size']}}</h5>   
                    @endif
                
                    @if ($dress['price'] != '')
                        <h5>{{$dress['price']}} €</h5>   
                    @endif

                    <div class="details">
                        <h5 class="">
                            <a href="{{ route('dresses.show', [$dress -> id] )}}">Dettagli</a>
                        </h5>
    
                        <h5 class="">
                            <a href="{{ route('dresses.edit', [$dress -> id] )}}">Modifica</a>
                        </h5>

                        <form class="delete" action="{{ route('dresses.destroy', [$dress->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Cancella">

                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <section class="insertItem">
        <h3>Vuoi vendere il tuo prodotto?</h3>
        
            <form action="{{ route('dresses.create') }}">
                <input type="submit" value="Clicca Qui" />
            </form>
    </section>
@endsection