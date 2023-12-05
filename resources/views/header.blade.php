<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="px-2 bg-secondary text-white flex justify-between items-center">
        <div>
            <img class="h-8 py-1" src="{{ asset('images/logo-w.svg') }}" alt="logo">
        </div>
        <div class="text-2xl">&equiv;</div>
    </div>
</body>
</html>
