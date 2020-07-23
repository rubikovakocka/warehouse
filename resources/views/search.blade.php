

    <div class="row">
        <div class="col">
            <div class="box">
                <h1>Filteri za pretragu</h1>
            </div>
        </div>
    </div>
    

    @if (isset($columnNames))
    <div class="row">
        <form action="{{ Request::path() }}" method="get">
            
            {{--    @if (file_exists('filters/' . Request::path() . '_filter.blade.php'))      The path doesn't work... method returns false  --}}
            @include('filters/' . Request::path() . '_filter')
            {{--    @endif  --}}

            <div class="col">
                <div class="box">
                    @include('sort')
                </div>
            </div>

            <div class="col">
                <div class="box">
                    <input type="text" class="input is-hovered is-rounded" name="search" placeholder="Pretraži..." style="width: 240px;" value="{{ !empty($oldValues['search']) ? $oldValues['search'] : '' }}">
                    <button type="submit" class="button is-dark is-rounded">Pretraga</button>
                </div>
            </div>
        </form>
    </div>
    @endif
