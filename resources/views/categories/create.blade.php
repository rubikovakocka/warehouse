@extends('layout')

@section('content')
    <h1 class="title">Unesi informacije o kategoriji</h1>

    @include('message')

    <form method="POST" action="/categories">
        @csrf

        <div class="field">
            <label for="name" class="label">Naziv kategorije</label>

            <div class="control">
                <input type="text" name="name" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" value="{{ old('name') }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Opis</label>

            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"required
                >{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Unesi kategoriju</button>
            </div>
        </div>
    </form>
@endsection
