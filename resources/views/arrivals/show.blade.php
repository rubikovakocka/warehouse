@extends('layout')

@section('content')
    <br><h1 class="title">Podaci o dostavi</h1>

    <div class="showContent">
        <div class="inlineInfo">
            <label for="arrivalDate" class="label">Datum dospeća
                <span>{{ $arrival->arrival_date }}</span>
            </label>

            <label for="arrivalStock" class="label">Zaliha
                <span>{{ $arrival->arrival_stock }}</span>
            </label>

            <label for="expireDate" class="label">Datum isticanja robe
                <span style="color: #d70000">{{ $arrival->expire_date }}</span>
            </label>
        </div>

        <label for="productName" class="label">Proizvod</label>
        <div class="content arrival">{{ $arrival->product->name }}</div>

        <label for="supplierName" class="label">Dobavljač</label>
        <div class="content arrival">{{ $arrival->supplier->name }}</div>

        <label for="employeeName" class="label">Zaposleni</label>
        <div class="content arrival">{{ $arrival->employee->name }}</div>

        <label for="warehouseName" class="label">Skladište</label>
        <div class="content arrival">{{ $arrival->warehouse->name }}</div>
    </div>

    <div style="padding: 25px;">
        <button type="button" class="button is-link" onclick="window.location='/arrivals/{{$arrival->id}}/edit'">Edit</button>
    </div>
@endsection
