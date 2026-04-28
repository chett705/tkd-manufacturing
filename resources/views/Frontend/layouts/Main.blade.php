<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" type="image/png" href="{{ asset('images/logo2.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <title>Tk & D Supplier</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="flex flex-col min-h-screen text-white bg-black">

    {{-- HEADER --}}
    @include('Frontend.components.Header')

    {{-- PAGE CONTENT --}}
    <main class="flex-1 relative">
        @yield('content')
    </main>


    @include('Frontend.components.Footer')

</body>

</html>
