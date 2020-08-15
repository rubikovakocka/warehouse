<div class="field">
    <div class="control">
        <div class="dropdowns">
            <label for="supplier" class="label">Dobavljač
                <div class="select">
                    <select name="supplier" id="supplier">
                        <option selected disabled>Izaberi dobavljača</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach
                    </select>
                </div>
            </label>
            <label for="employee" class="label">Zaposleni
                <div class="select">
                    <select name="employee" id="employee">
                        <option selected disabled>Izaberi zaposlenog</option>
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                        @endforeach
                    </select>
                </div>
            </label>
            <label for="product" class="label">Proizvod
                <div class="select">
                    <select name="product" id="product">
                        <option selected disabled>Izaberi proizvod</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
            </label>
            <label class="label" for="warehouse">Skladište
                <div class="select">
                    <select name="warehouse" id="warehouse">
                        <option selected disabled>Izaberi skladište</option>
                        @foreach($warehouses as $warehouse)
                            <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                        @endforeach
                    </select>
                </div>
            </label>
        </div>
        <div class="numInputRow">
            <div class="numInput">
                <label for="arrivalDateMax" class="label">Datum dospeća između:</label>
                <input type="date" class="input" name="arrivalDateMin" value="{{ !empty($oldValues['arrivalDateMin']) ? $oldValues['arrivalDateMin'] : '' }}">
                <input type="date" class="input" name="arrivalDateMax" value="{{ !empty($oldValues['arrivalDateMax']) ? $oldValues['arrivalDateMax'] : '' }}">
            </div>

            <div class="numInput">
                <label for="arrivalStockMin" class="label">Dospela količina između</label>
                <input type="number" class="input" name="arrivalStockMin" placeholder="Min vrednost" value="{{ !empty($oldValues['arrivalStockMin']) ? $oldValues['arrivalStockMin'] : '' }}">
                <input type="number" class="input" name="arrivalStockMax" placeholder="Max vrednost" value="{{ !empty($oldValues['arrivalStockMax']) ? $oldValues['arrivalStockMax'] : '' }}">
            </div>

            <div class="numInput">
                <label for="expire_date" class="label">Dani trajanja</label>
                <input type="number" class="input" name="expireDays" placeholder="Dani do isteka roka" value="{{ !empty($oldValues['expireDays']) ? $oldValues['expireDays'] : '' }}">
            </div>
        </div>

    </div>
</div>
