<div class="main-content">
    <x-shop.content-top />
    <div class="content-middle">
        <x-shop.content-search
            :title="request()->is('/')
                ? 'Последние товары'
                : 'Раздел ' . $products->first()->categories->title" />
        <div class="content-main__container">
            <div class="products-columns">
				@foreach ($products as $product)
					<x-shop.product-card :product="$product" />
				@endforeach
            </div>
        </div>
        <div class="content-footer__container">
			{{ $products->onEachSide(1)->links() }}
        </div>
    </div>
</div>
