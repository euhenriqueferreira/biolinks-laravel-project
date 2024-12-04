<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="h-full" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-base-100 text-slate-50 h-full">
    {{ $slot }}
</body>
</html>