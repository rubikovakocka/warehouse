@extends('layout')

@section('content')
    <br><br><h1 class="title">Dostave</h1>

    @include('message')

    <br>
    <div class="displayItems" style="color: #9d0006">
        <div class="arrivalDate">Datum dospeća</div>
        <div class="arrivalStock">Zaliha</div>
        <div class="expireDate">Rok isticanja</div>
        <div class="product">Proizvod</div>
        <div class="supplier">Dobavljač</div>
        <div class="employee">Zaposleni</div>
        <div class="warehouse">Skladište</div>
    </div>

    @foreach($arrival as $item)
        <div class="displayItems">
            <a class="arrivalDate" href="/arrivals/{{  $item->id }}">{{ $item->arrival_date }}</a>
            <div class="arrivalStock">{{ $item->arrival_stock }}</div>
            <div class="expireDate">{{ $item->expire_date }}</div>
            <a class="product" href="/products/{{ $item->product->id }}">{{ $item->product->name }}</a>
            <a class="supplier" href="/suppliers/{{ $item->supplier->id }}">{{ $item->supplier->name }}</a>
            <a class="employee" href="/employees/{{ $item->employee->id }}">{{ $item->employee->name }}</a>
            <a class="warehouse" href="/warehouses/{{ $item->warehouse->id }}">{{ $item->warehouse->name }}</a>
        </div>
    @endforeach

    <div class="pagination">
        {{ $arrival->links() }}
    </div>
@endsection
