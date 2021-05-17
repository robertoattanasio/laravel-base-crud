@extends('layouts.layout')

@section('content')
    <section class="title">
        <h1>Dettagli del prodotto</h1>
    </section>
    <div class="product-container">
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
                        <h5>{{$dress['price']}}</h5>   
                    @endif

                </div>
            </div>
    </div>
@endsection

