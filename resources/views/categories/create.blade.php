@extends('layout.app')

@section('content')
    <form class="w-full max-w-lg p-5 shadow-xl rounded-xl m-auto" action="/categories/create" method="POST" autocomplete="off">
        @csrf
        <div class="flex flex-wrap  mb-6 w-full">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre de la categoria
                </label>
                <input name="name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Verduras">
                <p class="text-red-500 text-xs italic">Por favor llene el campo.</p>
            </div>
        </div>
        <div class="px-3 mt-5">
            <button class="w-full bg-green-400 text-white rounded-xl p-2 text-lg font-bold tracking-tighter" type="submit">
                Crear categoria
            </button>
        </div>
    </form>
@endsection
