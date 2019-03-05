@extends('master')

@section('title')
 Products | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="products-header-container bgi-p">
    <div class="products-header my-m">
        <h1 class="products-header-heading my-m fs-xl c-g1">
            Products
        </h1>
    </div>
</div>
<div class="products-info-container bgi-g1">
    <div class="products-info my-l">
        <p class="products-info-headline my-l">
            Here at O'Mahony Meats we sell over 600 different products!
        </p>
        <p class="products-info-item fs-m c-p">
            Beef, Lamb, Pork, Bacon, Chicken &amp; Poultry - we can provide any cut or tailor any service you require.
            Simply call the factory on <strong>01-8476000</strong> or Michael on <strong>087-2576678</strong>
        </p>
    </div>
</div>
<div class="image-gallery-title-container bgi-g1 pt-l">
    <div class="image-gallery-title">
        <div class="image-gallery-title-item bgi-s py-m c-g1 fs-l">
            Over 600 Products
        </div>
    </div>
</div>
<div class="image-gallery-container bgi-s">
    <div class="image-gallery bgi-s my-xl">
        <img src="/images/slider/1.jpg" alt="">
        <img src="/images/slider/2.jpg" alt="">
        <img src="/images/slider/3.jpg" alt="">
        <img src="/images/slider/4.jpg" alt="">
        <img src="/images/slider/5.jpg" alt="">
        <img src="/images/slider/6.jpg" alt="">
        <img src="/images/slider/7.jpg" alt="">
        <img src="/images/slider/8.jpg" alt="">
        <img src="/images/slider/9.jpg" alt="">
        <img src="/images/slider/10.jpg" alt="">
        <img src="/images/slider/11.jpg" alt="">
        <img src="/images/slider/12.jpg" alt="">
        {{-- <img src="/images/gallery13.jpg" alt=""> --}}
        
    </div>
</div>
@endsection

@section('scripts')

@endsection