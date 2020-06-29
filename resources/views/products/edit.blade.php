@extends('layout')

@section('content')
    <br><h1 class="title">Izmenite informacije proizvoda</h1>

    @include('message')

    <form action="/products/{{ $product->id }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="name" class="label">Naziv proizvoda</label>

            <div class="control">
                <input type="text" name="name" class="input" value="{{ $product->name }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Opis</label>

            <div class="control">
                <textarea name="description" class="textarea">{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <label for="stock" class="label">Zaliha</label>

            <div class="control">
                <input type="number" name="stock" class="input" value="{{ $product->stock }}">
            </div>
        </div>

        <div class="field">
            <label for="price" class="label">Cena</label>

            <div class="control">
                <input type="number" name="price" class="input" value="{{ $product->price }}">
            </div>
        </div>

        <div class="field">
            <label for="price" class="label">Kategorija</label>

            <div class="select">
                <select name="category_id">
                    <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                    @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Izmeni</button>
            </div>
        </div>
    </form>

    <form action="/products/{{ $product->id }}" method="POST">
        @method('DELETE')
        @csrf

        <br>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Obriši proizvod</button>
            </div>
        </div>
    </form>


@endsection
