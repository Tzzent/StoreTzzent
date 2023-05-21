{{-- _products.blade.php --}}
@foreach ($products as $product)
    <li class="relative group">
        <div class="text-red-500 absolute -top-2 -right-3 bg-white px-1 rounded-full text-xl hidden group-hover:block">
            <button type="submit" form="delete-form-{{ $product->id }}">
                <i class="fa-regular fa-circle-xmark"></i>
            </button>
            <form id="delete-form-{{ $product->id }}" action="/products/delete" method="POST" class="hidden">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
            </form>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg h-full flex flex-col justify-between">
            <img class="w-full h-full object-cover" src="{{ $product->image }}" alt="Sunset in the mountains">
            <div class="bg-slate-100">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 capitalize truncate">{{ $product->name }}</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                        Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="px-6 py-4 flex gap-2 justify-between items-center">
                    <span class="text-xs text-gray-500">
                        Stock: {{ $product->quantity }}
                    </span>
                </div>
                <div class="px-6 py-4 flex gap-2 justify-between items-center">
                    <span class="text-gray-500">
                        S/. {{ $product->price }}
                    </span>
                    <span class="bg-orange-500 text-white py-1 px-2 rounded-xl shadow-md">
                        {{ $product->category->name }}
                    </span>
                </div>
            </div>
        </div>
    </li>
@endforeach
