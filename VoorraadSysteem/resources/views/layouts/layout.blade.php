<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div id="wrapper" class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-light border-right">
            <div class="list-group list-group-flush">
                <x-navlink href="/">
                    Home
                </x-navlink>
                @if (Auth::check())
                    <x-navlink href="{{ route('dashboard') }}">
                        Dashboard
                    </x-navlink>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="list-group-item list-group-item-action bg-light">
                            Uitloggen
                        </button>
                    </form>
                @else
                    <x-navlink href="{{ route('login') }}">
                        Inloggen
                    </x-navlink>
                @endif
                <x-navlink href="{{ route('product.index') }}">
                    Product
                </x-navlink>
                <x-navlink href="{{ route('category.index') }}">
                    Categorieën
                </x-navlink>
            </div>
        </div>

        <!-- Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
