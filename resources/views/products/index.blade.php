@extends('layout')

@section('content')

    <br><br><h1 class="title">Proizvodi</h1>

    @include('message')

    <br>
    <div class="displayItems" style="color: #9d0006">
        <div class="name">Naziv</div>
        <div class="description">Opis</div>
        <div class="stock">Zaliha</div>
        <div class="price">Cena</div>
        <div class="category">Kategorija</div>
    </div> <br>

    @foreach($product as $item)
        <div class="displayItems">
            <a class="name" href="/products/{{ $item->id }}">{{ $item->name }}</a>
            <div class="description"> {{ $item->description }} </div>
            <div class="stock"> {{ $item->stock }} </div>
            <div class="price"> {{ $item->price }} </div>
            <div class="category">{{ $item->category->name }}</div>
        </div>
    @endforeach

    <div class="pagination">
        {{ $product->links() }}
    </div>
@endsection
