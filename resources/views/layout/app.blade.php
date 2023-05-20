<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Tienda</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen flex flex-col justify-between">
    <nav class="bg-gray-700 fixed top-0 left-0 right-0 z-20">
        <div
            class="
            container 
            m-auto 
            flex
            items-center
            justify-between
            gap-4
            py-3
            ">
            <a href="/">
                <h1 class="text-red-400 font-bold">Tienda Rz</h1>
            </a>

            <div class="flex text-white gap-5 text-sm">
                <a href="/products/create" class="{{ request()->is('products/create') ? 'text-orange-300' : '' }}">
                    Crear Producto
                </a>
                |
                <a href="/categories/create"
                    class="{{ request()->is('categories/create') ? 'text-orange-300' : '' }}">Crear Categoria</a>
            </div>
        </div>
    </nav>
    <main class="container m-auto my-20">
        @yield('content')
    </main>
    <footer class="">
        <div class="bg-gray-700 text-white py-1 container m-auto flex justify-between px-5 rounded-t-xl text-xs">
            <a href="/">
                <h1 class="text-red-400 font-bold">Tienda Rz</h1>
            </a>
            <p class="text-gray-300">Desarrollado por <a href="https://github.com/Tzzent" target="_blank"
                    class="text-white">@Tzzent</a>
            </p>
        </div>
    </footer>
</body>

</html>
