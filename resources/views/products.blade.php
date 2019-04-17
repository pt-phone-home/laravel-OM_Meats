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
            Beef, Lamb, Pork, Bacon, Chicken &amp; Poultry - we can provide any cut or tailor your order to suit your requirements.<br> <br>
            Simply call the factory on <strong>01 8476000 +1</strong> or Michael on <strong>01 8476000 + 5</strong>
        </p>
    </div>
</div>
<div class="image-gallery-title-container bgi-g1 pt-l">
    <div class="image-gallery-title">
        <div class="image-gallery-title-item bgi-g3 py-m c-p fs-l">
            Over 600 Products
        </div>
    </div>
</div>
<div class="products-container bgi-g3">
        <div class="products my-m">
            <div class="products-item products-item-1 my-l">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Beef/Lamb/Pork
                </h2>
                <div class="products-item-img">
                    <img src="/images/beef.png" alt="">
                    {{-- <img src="/images/beef.jpg" alt=""> --}}
                </div>
            </div>
            <div class="products-item products-item-2 my-l">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Bacon/Chicken
                </h2>
                <div class="products-item-img">
                    <img src="/images/chicken.png" alt="">
                    {{-- <img src="/images/lamb.jpg" alt=""> --}}
                </div>
            </div>
            <div class="products-item products-item-3 my-l">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Poultry/Eggs
                </h2>
                <div class="products-item-img">
                    <img src="/images/eggs.jpg" alt="">
                    {{-- <img src="/images/pork.jpg" alt=""> --}}
                </div>
            </div>
            {{-- <div class="products-item products-item-4 my-m">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Poultry
                </h2>
                <div class="products-item-img">
                    <img src="/images/chicken.jpg" alt="">
                </div>
            </div>
            <div class="products-item products-item-5 my-m">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Cooked Meats
                </h2>
                <div class="products-item-img">
                    <img src="/images/cooked.jpg" alt="">
                </div>
            </div>
            <div class="products-item products-item-6 my-m">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Eggs
                </h2>
                <div class="products-item-img">
                    <img src="/images/eggs.jpg" alt="">
                </div>
            </div> --}}
            

    </div>
</div>
{{-- <div class="image-gallery-container bgi-s">
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
        
 
@endsection

@section('scripts')

@endsection