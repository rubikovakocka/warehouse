@extends('layout')

@section('content')

    <br><br><h1 class="title">Skladišta</h1>

    <br>
    <div class="displayItems" style="color: #9d0006">
        <div class="name">Ime</div>
        <div class="address">Adresa</div>
        <div class="city">Grad</div>
        <div class="phone">Telefon</div>
    </div>
    <br>
    <ol>
        @foreach($warehouse as $item)
            <li>
                <div class="displayItems">
                    <a class="name" href="/warehouses/{{ $item->id }}">{{ $item->name }}</a>
                    <div class="address"> {{ $item->address }} </div>
                    <div class="city"> {{ $item->city }} </div>
                    <div class="phone"> {{ $item->phone}} </div>
                </div>
            </li>
        @endforeach
    </ol>

    <div class="pagination">
        {{ $warehouse->links() }}
    </div>
@endsection
