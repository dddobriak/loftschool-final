<x-shop-layout>
    <x-shop.sidebar :categories="$categories" />
    <div class="main-content">
        <x-shop.content-top />
        <div class="content-middle">
            <x-shop.content-search :title="'Раздел ' . $product->categories?->title" />
            <div class="content-main__container">
                <div class="product-container">
                    <div class="product-container__image-wrap"><img src="{{ $product->image }}"
                            class="image-wrap__image-product"></div>
                    <div class="product-container__content-text">
                        <div class="product-container__content-text__title">{{ $product->title }}</div>
                        <form class="product-container__content-text__price" action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <div class="product-container__content-text__price__value">
                                Цена: <b>{{ $product->price }}</b>
                                руб
                            </div><button type="submit" name="product_id" value="{{ $product->id }}" class="btn btn-blue">Купить</button>
                        </form>
                        <div class="product-container__content-text__description">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-shop.content-bottom :products="$product->inRandomOrder()->limit(3)->get()" />
    </div>
</x-shop-layout>
