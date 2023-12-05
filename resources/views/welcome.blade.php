<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/964051c2a0.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body>
<nav class="fixed z-10 w-full bg-secondary text-white" x-data="{ open: false }">
    <div class="px-2 flex justify-between items-center">
        <div>
            <img class="h-8 py-1" src="{{ asset('images/logo-w.svg') }}" alt="logo">
        </div>
        <div class="text-2xl" @click="open = ! open">&equiv;</div>
    </div>
    <div x-show="open" @click.outside="open = false">
        <div class="mx-2 my-1">
            <label>
                <input type="search" class="form-control" placeholder="Búsqueda">
            </label>
        </div>
        <div class="py-1 mx-2 md:flex justify-around">
            <div class="flex space-x-2">
                Precios:
                <div class="ml-1">$</div>
                <div class="text-primary">$$</div>
                <div>$$$</div>
                <div>$$$$</div>
            </div>
            <div class="flex space-x-px">
                Calificación:
                <div class="ml-1 text-primary">&starf;</div>
                <div class="text-primary">&starf;</div>
                <div>&star;</div>
                <div>&star;</div>
                <div>&star;</div>
            </div>
            <div>
                <button class="btn">Filtrar</button>
            </div>
        </div>
    </div>
</nav>

<main class="mb-8">
    <div class="h-56 md:h-96 bg-no-repeat bg-cover bg-bottom"
         style="background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=667&amp;q=80')"></div>
    <div class="container mx-auto md:flex md:gap-4">
        <div class="mt-4 mx-2 md:mx-0 md:w-1/2 md:flex md:bg-white rounded-lg md:rounded-r-none">
            <div>
                <img class="w-full md:h-full object-cover object-left rounded-lg md:rounded-r-sm"
                     src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;h=500&amp;q=80"
                     alt="hamburguesa">
            </div>
            <div class="relative mx-2 p-2 shadow-lg md:shadow-none bg-white md:bg-transparent rounded-lg -mt-2">
                <h2 class="text-xl tracking-tight font-semibold uppercase md:text-lg">Cheeseburger</h2>
                <p class="text-gray-700 leading-snug">Cheeseburger with meat, tomatoes and a lot of delicious cheese.</p>
                <div class="text-sm mt-2 font-semibold text-gray-700">3.99 USD$</div>
                <div class="text-xs mt-2 text-yellow-500">&starf;&starf;&starf;&starf;&star; / 54 reseñas</div>
            </div>
        </div>
        <div class="mt-4 mx-2 md:mx-0 md:w-1/2 md:flex md:bg-white rounded-lg md:rounded-r-none">
            <div>
                <img class="w-full md:h-full object-cover object-left rounded-lg md:rounded-r-sm"
                     src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;h=500&amp;q=80"
                     alt="hamburguesa">
            </div>
            <div class="relative mx-2 p-2 shadow-lg md:shadow-none bg-white md:bg-transparent rounded-lg -mt-2">
                <h2 class="text-xl tracking-tight font-semibold uppercase md:text-lg">Cheeseburger</h2>
                <p class="text-gray-700 leading-snug">Cheeseburger with meat, tomatoes and a lot of delicious cheese.</p>
                <div class="text-sm mt-2 font-semibold text-gray-700">3.99 USD$</div>
                <div class="text-xs mt-2 text-yellow-500">&starf;&starf;&starf;&starf;&star; / 54 reseñas</div>
            </div>
        </div>
    </div>
    <section class="mt-4 mx-2">
        <form>
            <div class="flex flex-col mb-4">
                <label for="name">Nombre:</label>
                <input class="form-control" type="text" id="name" placeholder="nombre completo">
            </div>
            <div class="flex flex-col mb-4">
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="email" placeholder="correo electrónico">
            </div>
            <div class="flex flex-col mb-4">
                <label for="comments">Comentarios:</label>
                <textarea id="comments" class="form-control" placeholder="comentarios"></textarea>
            </div>
            <div>
                <button type="submit" class="btn mx-auto">Enviar</button>
            </div>
        </form>
    </section>
</main>

<footer class="w-full bg-secondary text-white">
    <div class="md:flex md:flex-row-reverse justify-around">
        <div class="mt-4 ml-8">
            <div class="hover:text-primary"><i class="fa fa-facebook"></i> /platzifood</div>
            <div class="hover:text-primary"><i class="fa fa-twitter"></i> @platzifood</div>
            <div class="hover:text-primary"><i class="fa fa-instagram"></i> @platzifood</div>
        </div>
        <ul class="mt-4 mb-4 ml-8 md:list-disc">
            <li>Soporte</li>
            <li>Acerca de nosotros</li>
            <li>Registro</li>
            <li>Aviso de privacidad</li>
        </ul>
    </div>
</footer>
</body>
<script src="https://kit.fontawesome.com/964051c2a0.js" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</html>
