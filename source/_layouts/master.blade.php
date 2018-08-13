<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $page->title ? "{$page->title} | " : "" }}{{ $page->docsTitle }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="{{ $page->url('favicon.ico') }}">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="stylesheet" href="{{ $page->url(mix('css/main.css')) }}">
    </head>
    <body class="border-t-8">
        <main class="content" role="main">
            @yield('body')
        </main>

        @include('_partials.footer')

        <script src="{{ $page->url(mix('js/main.js')) }}"></script>
        <script type="text/javascript">
            docsearch({
                apiKey: '{{ $page->docsearchApiKey }}',
                indexName: '{{ $page->docsearchIndexName }}',
                inputSelector: '#docsearch'
            });
        </script>
    </body>
</html>
