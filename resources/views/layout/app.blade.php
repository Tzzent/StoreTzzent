<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Tienda</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">
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
                <a href="/categories" class="{{ request()->is('categories') ? 'text-orange-300' : '' }}">Categorias</a>
            </div>
        </div>
    </nav>
    <main class="container mx-auto py-20 flex-grow">
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
