<header class="">
    <div class="logo">
        <img src="{{asset('img/logo_zalando.svg')}}" alt="">
    </div>
    <nav>
        <ul>
            <a href=" {{ route('home') }}"><li>Home</li></a>
            <a href="{{ route('dresses.index') }}"><li>Prodotti</li></a>
            {{-- <a href="{{ route('glasses.index') }}"><li>Glasses</li></a> --}}

        </ul>
    </nav>
</header>