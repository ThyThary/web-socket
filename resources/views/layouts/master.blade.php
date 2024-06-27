<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="js/app.js"></script>
        @yield("style")
    </head>
    <body>
        <main>
            @yield("content")
        </main>
        {{-- @stack("script") --}}
        {{-- @push("script")@endpush --}}
    </body>
</html>