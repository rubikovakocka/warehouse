@extends('layout')

@section('content')
    <h1 class="title">Unesite informacije o skladištu</h1>

    @include('message')

    <form method="POST" action="/warehouses">
        @csrf

        <div class="field">
            <label for="name" class="label">Naziv skladišta</label>

            <div class="control">
                <input type="text" name="name" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('name') }}" required>
            </div>
        </div>

        <div class="field">
            <label for="address" class="label">Adresa</label>

            <div class="control">
                <input type="text" name="address" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('address') }}" required>
            </div>
        </div>

        <div class="field">
            <label for="city" class="label">Grad</label>

            <div class="control">
                <input type="text" name="city" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('city') }}" required>
            </div>
        </div>

        <div class="field">
            <label for="phone" class="label">Telefon</label>

            <div class="control">
                <input type="number" name="phone" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('phone') }}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Unesi skladište</button>
            </div>
        </div>
    </form>
@endsection
