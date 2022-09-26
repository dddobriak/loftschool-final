<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="mb-2 text-gray-700 text-lg">Add product</h2>
                    <form class="mb-5" action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-6">
                            <label for="title" class="form-label inline-block mb-2 text-gray-700">Title</label>
                            <input type="text"
                                class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="title" placeholder="Enter title" name="title" value="">
                        </div>
                        <div class="form-group mb-6">
                            <label for="price" class="form-label inline-block mb-2 text-gray-700">Price</label>
                            <input type="number"
                                class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="price" placeholder="Enter price" name="price" value="">
                        </div>
                        <div class="form-group mb-6">
                            <label for="image" class="form-label inline-block mb-2 text-gray-700">Image</label>
                            <input type="text"
                                class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="image" placeholder="Enter image url" name="image"
                                value="https://via.placeholder.com/640x480.png/009988?text=new+product">
                        </div>
                        <div class="form-group mb-6">
                            <label for="image" class="form-label inline-block mb-2 text-gray-700">Category</label>
                            <input type="number"
                                class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="image" placeholder="Enter category" name="category_id" value="1">
                        </div>
                        <div class="form-group mb-6">
                            <label for="description"
                                class="form-label inline-block mb-2 text-gray-700">Description</label>
                            <textarea
                                class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="description" name="description" placeholder="description"></textarea>
                        </div>
                        <button type="submit"
                            class="
                          px-6
                          py-2.5
                          bg-blue-600
                          text-white
                          font-medium
                          text-xs
                          leading-tight
                          uppercase
                          rounded
                          shadow-md
                          hover:bg-blue-700 hover:shadow-lg
                          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                          active:bg-blue-800 active:shadow-lg
                          transition
                          duration-150
                          ease-in-out">Submit</button>
                    </form>
                    @foreach ($products as $product)
                        <div class="flex justify-center mb-4">
                            <div class="flex w-full flex-row rounded-lg bg-white shadow-lg">
                                <img class="w-full h-auto object-cover w-48 rounded-l-lg" src="{{ $product->image }}"
                                    alt="" />
                                <div class="p-6">
                                    <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $product->title }}</h5>
                                    <p class="text-gray-700 text-base mb-4">{{ $product->description }}</p>
                                    <p class="text-gray-600">Price: {{ $product->price }} r</p>
                                    <div class="flex mt-4">
                                        <a href="{{ route('product.edit', $product->id) }}"
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-block mx-2 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Delete product</a>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="pt-4">{{ $products->links('vendor.pagination.tailwind') }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
