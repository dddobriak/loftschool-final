<div class="products-columns__item">
    <div class="products-columns__item__title-product"><a href="{{ route('product.show', $product->id) }}"
            class="products-columns__item__title-product__link">{{ $product->title }}</a></div>
    <div class="products-columns__item__thumbnail"><a href="{{ route('product.show', $product->id) }}"
            class="products-columns__item__thumbnail__link"><img src="{{ $product->image }}" alt="Preview-image"
                class="products-columns__item__thumbnail__img"></a></div>
    <form class="products-columns__item__description" action="{{ route('cart.add') }}" method="POST">
        @csrf
        <span class="products-price">{{ $product->price }} руб</span>
        <button type="submit" name="product_id" value="{{ $product->id }}" class="btn btn-blue">Купить</button>
    </form>
</div>
