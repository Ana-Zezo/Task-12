@extends('layouts.app')
@section('title', 'Product')
@section('content')
    <h1>All Product</h1>
    @foreach ($products as $key => $product)
        {{ $loop->  }} . {{ $product['title'] }}
        <br>
    @endforeach
@stop
