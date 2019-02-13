@extends('master')

@section('title')
Home | O'Mahoney Meats Ltd.
@endsection

@section('content')
    <div class="welcome-container">
        <div class="welcome">
            <h1 class="welcome-heading">
                Welcome to <span> O’Mahony Meats </span> – Your One-stop Meat Supplier
            </h1>

            <p class="welcome-info">We supply meat to both the catering trade foodservice sector and the general public.</p>
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
                    Port &amp; Bacon
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