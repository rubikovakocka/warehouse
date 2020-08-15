
<label class="label" for="category">Kategorija</label>
<div class="select">
    <select name="category" id="category">
        <option selected disabled>Izaberi kategoriju</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <div class="rightous" style="position: absolute; left: 500px">
    <div class="numInput">
        <label class="label" for="stockMin">Zaliha</label>
        <input class="input" name="stockMin" type="number" placeholder="min: 0" value="{{ !empty($oldValues['stockMin']) ? $oldValues['stockMin'] : '' }}">
        <input class="input" name="stockMax" type="number" placeholder="max: 2000" value="{{ !empty($oldValues['stockMax']) ? $oldValues['stockMax'] : '' }}">
    </div>


    <div class="numInput">
    <label class="label" for="priceMin">Cena</label>
    <input class="input" name="priceMin" type="number" placeholder="min: 100" value="{{ !empty($oldValues['priceMin']) ? $oldValues['priceMin'] : '' }}">
    <input class="input" name="priceMax" type="number" placeholder="max: 10000" value="{{ !empty($oldValues['priceMax']) ? $oldValues['priceMax'] : '' }}">
</div>

</div>
</div>

<label class="label" for="warehouse">Skladište</label>
<div class="select">
    <select name="warehouse" id="warehouse">
        <option selected disabled>Izaberi skladište</option>
        @foreach($warehouses as $warehouse)
        <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
        @endforeach
    </select>
</div>









