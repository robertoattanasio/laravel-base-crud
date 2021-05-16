@extends('layouts.layout')

@section('pageTitle', 'Glasses')
    
@section('content')
    <section class="title">
        <h1>Glasses</h1>
    </section>

    <div class="product-container">
        @foreach ($glasses as $item)
            <div class="product-item">

                <div class="product-info">
                    @if ($item['brand'] != '')
                        <h2>{{$item['brand']}}</h2>   
                    @endif

                    @if ($item['size'] != '')
                        <h5>{{$item['size']}}</h5>   
                    @endif
                
                    @if ($item['price'] != '')
                        <h5>{{$item['price']}}</h5>   
                    @endif

                    <h5 class="details">
                        <a href="{{ route('glasses.show', [$item -> id] )}}">Details</a>
                    </h5>
                </div>
            </div>
        @endforeach
    </div>

@endsection