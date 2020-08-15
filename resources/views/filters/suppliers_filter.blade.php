<div class="field">
    <div class="control">
        <label class="label" for="city">Grad</label>
        <input class="input" name="city" type="text" value="{{ !empty($oldValues['city']) ? $oldValues['city'] : '' }}">

        <label class="label" for="phone">Telefon</label>
        <input class="input" name="phone" type="text" value="{{ !empty($oldValues['phone']) ? $oldValues['phone'] : '' }}">
    </div>
</div>
