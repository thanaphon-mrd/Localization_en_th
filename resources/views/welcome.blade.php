<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />

    
    </head>
    <body>
        <a href="{{ route('locale.change', 'en') }}">English</a> | <a href="{{ route('locale.change', 'th') }}">ไทย</a>

        <h1>{{ __('messages.welcome') }}</h1>

    </body>
</html>
