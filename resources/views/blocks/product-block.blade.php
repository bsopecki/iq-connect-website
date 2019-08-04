@php
/** 
 * Name:
 * Product Block
 * 
 * Description: 
 * Display block with some product information and let direct add to basket
 * 
 * Data:
 * Title
 * Price
 * Image
 * Permalink
 * Add to basket - Link
 * 
 * Storybook: /blocks/product-block 
 * Styles: /blocks/product-block
 * */    
    $product = wc_get_product( $product->ID );
    $title = $product->get_name();
    $price = $product->get_price();
    $image = $product->get_image_id();
    $permalink = $product->get_permalink();
    $addToBasket = $product->add_to_cart_url();
@endphp

<a class="product-block" href="{{ $permalink ? $permalink : '/' }}">
    <header class="product-block__header">
        <h3 class="product-block__title subtitle light">
            {{ $title ? $title : 'Title' }}
        </h3>
        <span class="title bold" data-price>
            {!! $price ? $price : '-' !!}
        </span>
    </header>
    {!! image($image, 'full', 'product-block__image') !!}
    <footer class="product-block__footer">
        <a href="{{ $addToBasket }}">
            <span class="icon icon--plus icon--dark"></span>
        </a>
    </footer>
</a>