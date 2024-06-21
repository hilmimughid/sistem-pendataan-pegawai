<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('libraries/fontawesome/css/all.css') }}" />
</head>

<body>
    {{-- Header --}}
    <header class="navbar sticky-top bg-dark flex-nowrap p-0">
        @include('layouts.partials.header')
    </header>

    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar --}}
            <div class="sidebar border border-right col-auto p-0 bg-body-tertiary">
                @include('layouts.partials.sidebar')
            </div>

            {{-- Main Content --}}
            <main class="col">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('libraries/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
