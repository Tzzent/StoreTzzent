{{-- _products.blade.php --}}
@foreach ($products as $product)
    <li>
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
