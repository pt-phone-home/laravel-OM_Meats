@extends('master')

@section('title')
Home | O'Mahony Meats Ltd.
@endsection

@section('content')
    <div class="welcome-container">
        <div class="welcome my-m">
            <h1 class="welcome-heading fs-xl">
                Welcome to O’Mahony Meats
            </h1>

            <h2 class="welcome-subheading fs-l">Your One-stop Meat Supplier</h2>

            {{-- <p class="welcome-info">We supply meat to both the catering trade foodservice sector and the general public.</p>

            <p class="welcome-info welcome-info-2">Our Product range includes:</p> --}}
        </div>
    </div>
    <div class="products-quote-container bg-g1">
        <div class="products-quote my-l bg-g1">
            <h3 class="products-quote-text fs-xl my-m c-p">"We supply meat to both the catering trade foodservice sector and the general public"</h3>
        </div>
    </div>
    <div class="products-title bg-g1">
        <div class="products-title-item c-p bg-g3  py-m fs-l">
            Our products include:
        </div>

    </div>
    <div class="products-container">
        <div class="product">
            <div class="product-item product-item-1">
                <i class="far fa-cow"></i>
                <h2 class="product-item-name">
                    Beef
                </h2>
            </div>
            <div class="product-item product-item-2">
                <i class="far fa-sheep"></i>
                <h2 class="product-item-name">
                    Lamb
                </h2>
            </div>
            <div class="product-item product-item-3">
                <i class="far fa-pig"></i>
                <h2 class="product-item-name">
                    Pork &amp; Bacon
                </h2>
            </div>
            <div class="product-item product-item-4">
                <i class="far fa-kiwi-bird"></i>
                <h2 class="product-item-name">
                    Poultry
                </h2>
            </div>
            <div class="product-item product-item-5">
                <i class="far fa-steak"></i>
                <h2 class="product-item-name">
                    Cooked Meats
                </h2>
            </div>
            <div class="product-item product-item-6">
                <i class="far fa-egg"></i>
                <h2 class="product-item-name">
                    Eggs
                </h2>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')

@endsection