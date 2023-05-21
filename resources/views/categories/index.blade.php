@extends('layout.app');

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
        @if (session('success'))
            <script>
                toastr.success('{{ session('success') }}');
            </script>
        @endif
        @if (session('error'))
            <script>
                toastr.error('{{ session('error') }}');
            </script>
        @endif
    </form>

    <div class="flex justify-center gap-4 flex-wrap my-10 max-w-4xl mx-auto">
        @foreach ($categories as $category)
            <div class="flex bg-gray-200 rounded-2xl w-fit relative px-2 py-1">
                <span>{{ $category->name }}</span>
                <button type="submit" form="delete-form-{{ $category->id }}"
                    class="text-red-500 hover:text-red-700 absolute -top-2 -right-3 bg-gray-200 p-1 rounded-full">
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>

                <form id="delete-form-{{ $category->id }}" action="/categories/delete" method="POST" class="hidden">
                    @csrf
                    <input type="hidden" name="id" value="{{ $category->id }}">
                </form>
            </div>
        @endforeach
    </div>
@endsection
