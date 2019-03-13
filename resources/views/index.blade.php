@extends('master')

@section('title')
Home | O'Mahony Meats Ltd.
@endsection

@section('content')
    <div class="welcome-container bgi-p">
        <div class="welcome my-m">
            <h1 class="welcome-heading fs-xl">
                Welcome to O’Mahony Meats
            </h1>

            <h2 class="welcome-subheading fs-l">Your One-stop Meat </h2>

            {{-- <p class="welcome-info">We supply meat to both the catering trade foodservice sector and the general public.</p>

            <p class="welcome-info welcome-info-2">Our Product range includes:</p> --}}
        </div>
    </div>
    <div class="products-quote-container bgi-g1">
        <div class="products-quote my-l bgi-g1">
            <h3 class="products-quote-text fs-xl my-m c-p">"We supply meat to both the catering trade foodservice sector and the general public"</h3>
        </div>
    </div>
    <div class="products-title bgi-g1">
        <div class="products-title-item c-p bgi-g3  py-m fs-l">
            Our products include:
        </div>

    </div>
    <div class="products-container bgi-g3">
        <div class="products my-m">
            <div class="products-item products-item-1 my-l">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Beef
                </h2>
                <div class="products-item-img">
                    <img src="/images/beef.jpg" alt="">
                </div>
            </div>
            <div class="products-item products-item-2 my-l">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Lamb
                </h2>
                <div class="products-item-img">
                    <img src="/images/lamb.jpg" alt="">
                </div>
            </div>
            <div class="products-item products-item-3 my-l">
                <h2 class="products-item-title c-g1 bg-p fs-l">
                    Pork &amp; Bacon
                </h2>
                <div class="products-item-img">
                    <img src="/images/pork.jpg" alt="">
                </div>
            </div>
            <div class="products-item products-item-4 my-m">
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
            </div>
            

        </div>
    </div>
    
@endsection

@section('scripts')

@endsection