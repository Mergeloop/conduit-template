<!DOCTYPE html>
<html lang="{{ \str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="{!! config('app.name') !!}" />
        <meta property="og:locale" content="en_US" />

        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/app.css'])
        @stack('header::styles')

{{--        @paddleJs--}}
{{--        @lemonJs--}}
{{--        <script src="https://js.stripe.com/v3/"></script>--}}

        <title>{{ $title }}</title>
    </head>
    <body>
        <header>
            <nav aria-label="Main Navigation">
                {{-- Navigation --}}
            </nav>
        </header>

        <main role="main">
            {{ $slot }}
        </main>

        <footer>
            <nav aria-label="Footer Navigation">
                {{-- Footer --}}
            </nav>

            &copy; {{ date('Y') }} Website Name. All rights reserved.
        </footer>

        @vite(['resources/js/app.js'])
    </body>
</html>
