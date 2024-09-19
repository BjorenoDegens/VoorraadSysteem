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
                <a href="/" class="list-group-item list-group-item-action bg-light">
                    Home
                </a>
                <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action bg-light">
                    Product
                </a>
                <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action bg-light">
                    Categorieën
                </a>
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
