

<header>
    <div class="container">
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
            </nav>
        </span>
    </div>
</header>


