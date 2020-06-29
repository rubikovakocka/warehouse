@extends('layout')

@section('content')
    <br><h1 class="title">Izmeni dobavljača</h1>

    @include('message')

    <form action="/suppliers/{{ $supplier->id }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="name" class="label">Naziv dobavljača</label>

            <div class="control">
                <input type="text" name="name" class="input" value="{{ $supplier->name }}">
            </div>
        </div>

        <div class="field">
            <label for="address" class="label">Adresa</label>

            <div class="control">
                <input type="text" name="address" class="input" value="{{ $supplier->address }}">
            </div>
        </div>

        <div class="field">
            <label for="city" class="label">Grad</label>

            <div class="control">
                <input type="text" name="city" class="input" value="{{ $supplier->city }}">
            </div>
        </div>

        <div class="field">
            <label for="phone" class="label">Telefon</label>

            <div class="control">
                <input type="text" name="phone" class="input" value="{{ $supplier->phone }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Izmeni dobavljača</button>
            </div>
        </div>
    </form>

    <form action="/suppliers/{{ $supplier->id }}" method="POST">
        @method('DELETE')
        @csrf

        <br>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Obriši dobavljača</button>
            </div>
        </div>
    </form>

@endsection
