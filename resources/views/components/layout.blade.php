<?php
    $links = [
        ['url' => '/', 'text' => 'Home'],
        ['url' => '/games', 'text' => 'Games'],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Weekly demo' }}</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
    <x-nav :links="$links">
        <x-slot name="heading">
            <h1>this is a heading</h1>
        </x-slot>
        <div>Foo bar</div>
    </x-nav>
    <div>
        {{ $slot }}
    </div>
</body>
</html>
