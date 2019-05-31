@extends('master')

@section('title')
Home | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
        <div class="container mx-auto">
            <h1 class="text-center pt-4 pb-2 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
                Welcome to O’Mahony Meats
            </h1>

            <p class="text-center text-3xl text-om-white pb-6 tracking-wide font-hairline">Your One-Stop Meat Supplier</p>

            {{-- <p class="welcome-info">We supply meat to both the catering trade foodservice sector and the general public.</p>

            <p class="welcome-info welcome-info-2">Our Product range includes:</p> --}}
        </div>
</div>
<div class="bgi-gw">
    <div class="container mx-auto py-12">
        <h3 class="text-center text-4xl font-bask font-thin text-p">"We supply meat to both the catering trade <br> and the general public."</h3>
    </div>
</div>
<div class="bgi-gw">
    <div class="container mx-auto flex justify-center">
        <p class="text-xl text-grey-darkest py-6 text-center leading-loose">
            We sell over 600 <a href="/products" class="text-p hover:text-grey-darkest ">products</a>. We can prepare any cut to your own specifications. <br> In fact at O’Mahony Meats we specialise in customer-driven products.
        </p>
    </div>
</div>
<div class="bgi-gw">
    <div class="container mx-auto flex justify-center h-35r w-full py-6 px-2 sm:px-0">
        <img src="/images/shop.jpg" alt="" class="h-full w-full object-cover">
    </div>
</div>
<div class="bgi-gw">
    <div class="container mx-auto flex justify-center">
        <p class="text-xl text-grey-darkest py-6 text-center leading-loose">
            For your convenience O’Mahony Meats is open 6 days a week, <br> Monday to Saturday from 8am to 5pm (retail) and 5am to 4.30pm (wholesale).
        </p>
    </div>
</div>



    {{--
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
    </div> --}}
    
@endsection

@section('scripts')
@parent

@endsection