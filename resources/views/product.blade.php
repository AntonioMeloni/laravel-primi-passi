@extends('layouts.layout')

@php
    $cards = config('products');
    $prodotto = $cards[$id];
@endphp
@section('succ')
    @if($id != "11")
        <div class="succ">
            <h3><a href="{{route('prodotti.show', ($id+1))}}"> > </a></h3>
        </div>

    @endif
@endsection
@section('prec')
    @if($id != "0")
        <div class="prec">
            <h3><a href="{{route('prodotti.show', ($id-1))}}"> < </a></h3>
        </div>

    @endif
@endsection
@section('mainContent')
    <main>

        <div class="prodotto">
            <div class="product-name">
                <h1>{{$prodotto['titolo']}}</h1>
            </div>

            <div class="product-images">
                <img src="{{$prodotto['src-h']}}" alt="{{$prodotto['titolo']}}">
                <img src="{{$prodotto['src-p']}}" alt="{{$prodotto['titolo']}}">
            </div>

            <div class="product-info">
                <p>{!!$prodotto['descrizione']!!}</p>
            </div>

        </div>
    </main>

@endsection
