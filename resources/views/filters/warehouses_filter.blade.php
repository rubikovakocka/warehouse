<div class="field">
    <div class="control">
        <label class="label" for="product">Proizvod</label>
        <input class="input" name="product" type="text" value="{{ !empty($oldValues['product']) ? $oldValues['product'] : '' }}">

        <label class="label" for="city">Grad</label>
        <input class="input" name="city" type="text" value="{{ !empty($oldValues['city']) ? $oldValues['city'] : '' }}">

        <label class="label" for="stock">Minimalna zaliha proizvoda</label>
        <input class="input" name="stock" type="number" value="{{ !empty($oldValues['stock']) ? $oldValues['stock'] : '' }}">
    </div>
</div>
