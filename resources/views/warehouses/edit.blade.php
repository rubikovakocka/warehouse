@extends('layout')

@section('content')
    <br><h1 class="title">Izmenite informacije o skladištu</h1>

    @include('message')

    <form action="/warehouses/{{ $warehouse->id }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="name" class="label">Naziv skladišta</label>

            <div class="control">
                <input type="text" name="name" class="input" value="{{ $warehouse->name }}">
            </div>
        </div>

        <div class="field">
            <label for="address" class="label">Adresa</label>

            <div class="control">
                <input type="text" name="address" class="input" value="{{ $warehouse->address }}">
            </div>
        </div>

        <div class="field">
            <label for="city" class="label">Grad</label>

            <div class="control">
                <input type="text" name="city" class="input" value="{{ $warehouse->city }}">
            </div>
        </div>

        <div class="field">
            <label for="phone" class="label">Telefon</label>

            <div class="control">
                <input type="text" name="phone" class="input" value="{{ $warehouse->phone }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Izmeni skladište</button>
            </div>
        </div>
    </form>

    <form action="/warehouses/{{ $warehouse->id }}" method="POST">
        @method('DELETE')
        @csrf

        <br>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Obriši skladište</button>
            </div>
        </div>
    </form>

@endsection
