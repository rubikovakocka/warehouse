@extends('layout')

@section('content')
    <br><h1 class="title">Izmenite podatek o zaposlenom</h1>

    @include('message')

    <form action="/employees/{{ $employee->id }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="name" class="label">Ime i prezime</label>

            <div class="control">
                <input type="text" name="name" class="input" value="{{ $employee->name }}">
            </div>
        </div>

        <div class="field">
            <label for="age" class="label">Broj godina</label>

            <div class="control">
                <input type="number" name="age" class="input" value="{{ $employee->age }}">
            </div>
        </div>

        <div class="field">
            <label for="job_description" class="label">Opis posla</label>

            <div class="control">
                <input type="text" name="job_description" class="input" value="{{ $employee->job_description }}">
            </div>
        </div>

        <div class="field">
            <label for="warehouse_id" class="label">Skladište</label>
            <div class="select">
                <select name="warehouse_id">
                    <option value="{{ $employee->warehouse_id }}">{{ $employee->warehouse->name }}</option>p
                    @foreach($warehouses as $warehouse)
                        @if($warehouse->id != $employee->warehouse_id)
                            <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                        @endif
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

    <form action="/employees/{{ $employee->id }}" method="POST">
        @method('DELETE')
        @csrf

        <br>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete Employee</button>
            </div>
        </div>
    </form>

@endsection
