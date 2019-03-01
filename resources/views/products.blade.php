@extends('master')

@section('title')
 Products | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="products-header-container bg-p">
    <div class="products-header my-m">
        <h1 class="products-header-heading my-m fs-xl c-g1">
            Products
        </h1>
    </div>
</div>
<div class="products-info-container">
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
<div class="image-gallery-title-container bg-g1 pt-l">
    <div class="image-gallery-title">
        <div class="image-gallery-title-item bg-s py-m c-g1 fs-l">
            Over 600 Products
        </div>
    </div>
</div>
<div class="image-gallery-container bg-s">
    <div class="image-gallery bg-s my-xl">
        <img src="/images/gallery1.jpg" alt="">
        <img src="/images/gallery2.jpg" alt="">
        <img src="/images/gallery3.jpg" alt="">
        <img src="/images/gallery4.jpg" alt="">
        <img src="/images/gallery5.jpg" alt="">
        <img src="/images/gallery6.jpg" alt="">
        <img src="/images/gallery7.jpg" alt="">
        <img src="/images/gallery8.jpg" alt="">
        <img src="/images/gallery9.jpg" alt="">
        <img src="/images/gallery10.jpg" alt="">
        <img src="/images/gallery11.jpg" alt="">
        <img src="/images/gallery12.jpg" alt="">
        {{-- <img src="/images/gallery13.jpg" alt=""> --}}
        
    </div>
</div>
@endsection

@section('scripts')

@endsection