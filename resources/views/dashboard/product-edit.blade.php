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
                    <h2 class="mb-2 text-gray-700 text-lg">Edit product: {{ $product->id }}</h2>
                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
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
                                id="title" placeholder="Enter title" name="title" value="{{ $product->title }}">
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
                                id="price" placeholder="Enter price" name="price" value="{{ $product->price }}">
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
                                id="image" placeholder="Enter image url" name="image" value="{{ $product->image }}">
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
                                id="description" name="description" placeholder="description">{{ $product->description }}</textarea>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
