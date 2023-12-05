<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card / Producto</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-400 mx-4 mb-8">
<div class="mt-4 md:w-1/2 md:flex md:bg-white rounded-lg">
    <div>
        <img class="w-full rounded-lg md:rounded-r-sm"
            src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;h=500&amp;q=80"
            alt="hamburguesa">
    </div>
    <div class="relative mx-2 p-2 xs:shadow-lg bg-white md:bg-transparent rounded-lg -mt-2">
        <h2 class="text-xl tracking-tight font-semibold uppercase md:text-lg">Cheeseburger</h2>
        <p class="text-gray-700 leading-snug">Cheeseburger with meat, tomatoes and a lot of delicious cheese.</p>
        <div class="text-sm mt-2 font-semibold text-gray-700">3.99 USD$</div>
        <div class="text-xs mt-2 text-yellow-500">&starf;&starf;&starf;&starf;&star; / 54 reseñas</div>
    </div>
</div>
</body>
</html>
