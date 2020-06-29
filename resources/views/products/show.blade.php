@extends('layout')

@section('content')
    <br><h1 class="title">{{ $product->name }}</h1>

    <div class="showContent">
        <label for="name" class="label">Naziv proizvoda</label>
        <div class="content">{{ $product->description }}</div>

        <label for="stock" class="label">Zaliha</label>
        <div class="content">{{ $product->stock }}</div>

        <label for="price" class="label">Cena</label>
        <div class="content">{{ $product->price }}</div>

        <label for="category" class="label">Kategorija</label>
        <div class="content">{{ $category }}</div>
    </div>

    <div style="padding: 25px;">
        <button type="button" class="button is-link" onclick="window.location='/products/{{$product->id}}/edit'">Izmeni</button>
    </div>
@endsection
