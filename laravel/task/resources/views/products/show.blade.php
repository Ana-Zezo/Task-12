@extends('layouts.app')
@section('title', 'Show Product')
@section('content')
    {{-- <h1><?= $product['title'] ?></h1> --}}
    {{-- <p><?= $product['desc'] ?></< /p> --}}
    <h1>{{ $product['title'] }}</h1>
    <p>{{ $product['desc'] }}</p>
    @if ($product['is_new'])
        <h2>Is New</h2>
    @else
        <h2>Is Old</h2>
    @endif
    @isset($product['is_reviews'])
        <h1>is reviews</h1>
    @endisset
@stop
