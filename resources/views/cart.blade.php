<x-shop-layout>
    <x-shop.sidebar :categories="$categories" />
    <div class="main-content">
        <x-shop.content-top />
        <div class="content-middle">
            <x-shop.content-search :title="'Корзина '" />
            <div class="content-main__container">
                <div class="cart-product-list">
                    @foreach ($products as $product)
                        <div class="cart-product-list__item">
                            <div class="cart-product__item__product-photo"><img src="{{ $product->image }}"
                                    class="cart-product__item__product-photo__image"></div>
                            <div class="cart-product__item__product-name">
                                <div class="cart-product__item__product-name__content"><a
                                        href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a>
                                </div>
                            </div>
                            <div class="cart-product__item__cart-date">
                                <div class="cart-product__item__cart-date__content">{{ $cart[$product->id]['quanity'] }}
                                    шт.</div>
                            </div>
                            <div class="cart-product__item__product-price"><span
                                    class="product-price__value">{{ $product->price }}
                                    рублей</span></div>
                            <form action="{{ route('cart.delete') }}" method="POST" style="margin-right:2%">
                                @csrf
                                <button type="submit" name="product_id" value="{{ $product->id }}"
                                    class="btn btn-blue">Удалить</button>
                            </form>
                        </div>
                    @endforeach
                </div>
                @if (!$products->isEmpty())
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <button class="btn btn-blue">Отправить заказ</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-shop-layout>
