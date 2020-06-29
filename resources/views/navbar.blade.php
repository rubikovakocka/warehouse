<nav class="navbar" role="navigation" aria-label="main navigation">

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            @if (!is_null(request()->user()) && !request()->user()->hasRole('employee'))
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/products">Proizvodi</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/products/create">Unesi proizvod</a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/categories">Kategorije</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/categories/create">Unesi kategoriju</a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/suppliers">Dobavljači</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/suppliers/create">Unesi dobavljača</a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/warehouses">Skladišta</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/warehouses/create">Unesi skladište</a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/employees">Zaposleni</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/employees/create">Unesi zaposlenog</a>
                    </div>
                </div>

                <div>
                    <a class="navbar" href="/home">Satistika</a>
                </div>
            @endif

            @if (!is_null(request()->user()) && !request()->user()->hasRole('manager'))
                <div class="navbar-item has-dropdown is-hoverable" id="arrivalNavbar">
                    <a class="navbar-link" href="/arrivals">Dostava robe</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/arrivals/create">Unesi dostavu</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>
