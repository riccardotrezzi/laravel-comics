

<header>
    <div class="container d-flex">
        <span>
            <figure>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </figure>

            <nav>
                <ul>
                    @foreach ($menuLinks as $nav)
                    <li>
                        <span>
                            {{ $nav['name'] }}
                        </span>
                    </li>
                    @endforeach
                </ul>

                <div class="navbar">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark " type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        </form>
                    </div>
                </div>
            </nav>
        </span>
    </div>
</header>


