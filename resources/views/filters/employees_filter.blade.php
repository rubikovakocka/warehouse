<div class="field">
    <div class="control">
        <label class="label" for="warehouse">Skladište</label>
        <div class="select">
            <select name="warehouse" id="warehouse">
                <option selected disabled>Izaberi skladište</option>
                @foreach($warehouses as $warehouse)
                    <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="numInput">
            <label class="label" for="ageMin">Godina između:</label>
            <input class="input" name="ageMin" type="number" placeholder="min: 18" value="{{ !empty($oldValues['ageMin']) ? $oldValues['ageMin'] : '' }}">
            <input class="input" name="ageMax" type="number" placeholder="max: 65" value="{{ !empty($oldValues['ageMax']) ? $oldValues['ageMax'] : '' }}">
        </div>
    </div>
</div>
