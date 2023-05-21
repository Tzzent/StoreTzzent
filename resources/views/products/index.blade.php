@extends('layout.app')

@section('content')
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif
    <div class="flex-row-reverse flex items-center justify-between mb-10">
        <div>
            <h1 class="font-bold text-lg text-orange-900">Lista de productos</h1>
        </div>
        <div x-data="{ open: false, isSelect: 'Categorias' }" class="relative inline-block text-left">
            <div>
                <button @click="open = !open" type="button"
                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <span x-text="isSelect"></span>
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div x-show="open"
                class="absolute left-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                id="category-dropdown" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" <div
                class="py-1" role="none">
                <button onclick="renderProducts()" @click="open=false; isSelect='Categorias'" value="0"
                    name="category_id"
                    class="text-gray-700 block px-4 py-2 text-sm capitalize w-full text-left hover:bg-gray-200"
                    role="menuitem" tabindex="-1" id="category-0">Todos</button>
                @foreach ($categories as $category)
                    <button onclick="renderProducts({{ $category->id }})"
                        @click="open=false; isSelect='{{ $category->name }}'" value="{{ $category->id }}" name="category_id"
                        class="text-gray-700 block px-4 py-2 text-sm capitalize w-full text-left hover:bg-gray-200"
                        role="menuitem" tabindex="-1" id="category-{{ $category->id }}">{{ $category->name }}</button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Script  --}}
    <script>
        const renderProducts = (categoryId) => {
            $.ajax({
                type: 'GET',
                url: '/products/filter',
                data: {
                    category_id: categoryId,
                    _token: '{{ csrf_token() }}'
                },
                success: (data) => {
                    const component = document.getElementById('product-component');
                    component.innerHTML = data;
                }
            });
        };
    </script>
    {{-- Script  --}}

    <div class="">
        <ul id="product-component"
            class="
            grid
            grid-cols-1
            md:grid-cols-2
            lg:grid-cols-4
            gap-10
            ">
            @include('components._products')
        </ul>
    </div>
@endsection
