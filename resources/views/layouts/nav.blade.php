@php
$currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg bg-black ">
    <div class="container-md">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ Vite::asset('resources/images/logo.svg') }}"
                width="115" height="30"></a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav h5 ">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('catalog') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Tentang Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item me-1">
                    <a class="nav-link text-white border border-2 rounded py-1" href="{{ route('login') }}">{{
                        __('Masuk') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item text-white">
                    <a class="nav-link text-white border border-2 rounded py-1" href="{{ route('register') }}">{{
                        __('Daftar') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('history',[Auth::user()->id]) }}">
                            {{ __('history') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
