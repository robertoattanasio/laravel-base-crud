@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="css/styles.css">

@section('pageTitle', 'Dresses')
    
@section('content')
    <section class="title">
        <h1>Prodotti</h1>
    </section>

    <div class="product-container">
        @foreach ($dresses as $item)
            <div class="product-item">

                <div class="product-info">
                    @if ($item['brand'] != '')
                        <h2>{{$item['brand']}}</h2>   
                    @endif

                    @if ($item['type'] != '')
                        <h5>{{$item['type']}}</h5>   
                    @endif

                    @if ($item['size'] != '')
                        <h5>{{$item['size']}}</h5>   
                    @endif
                
                    @if ($item['price'] != '')
                        <h5>{{$item['price']}}</h5>   
                    @endif

                    <h5 class="details">
                        <a href="{{ route('dresses.show', [$item -> id] )}}">Dettagli</a>
                    </h5>
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