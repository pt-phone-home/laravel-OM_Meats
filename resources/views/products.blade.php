@extends('master')

@section('title')
 Products | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="products-title-container">
    <div class="products-title">
        <h1 class="products-title-heading">
            Products
        </h1>
    </div>
</div>
<div class="products-info-container">
    <div class="products-info">
        <p class="products-info-headline">
            Here at O'Mahony Meats we sell over 600 different products!
        </p>
        <p class="products-info-item">
            Beef, Lamb, Pork, Bacon, Chicken &amp; Poultry - we can provide any cut or tailor any service you require.
            Simply call the factory on 01-8476000 or Michael on 087-2576678
        </p>

    </div>
</div>
<div class="image-gallery-container">
    <div class="image-gallery">
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