@extends('master')

@section('title')
 Products | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Products
        </h1>  
    </div>
</div>

<div class="bgi-g1">
    <div class="container mx-auto flex flex-col items-center justify-center py-12 w-90p">
        <p class="text-3xl text-p py-6 text-center">
            Here at O'Mahony Meats we sell over 600 different products!
        </p>
        <p class="text-xl text-p text-center">
            Beef, Lamb, Pork, Bacon, Chicken &amp; Poultry - we can provide any cut or tailor your order to suit your requirements.<br> <br>
            Simply call the factory on <strong>01 8476000 +1</strong> or Michael on <strong>01 8476000 + 5</strong>
        </p>
    </div>
</div>
<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g3 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Over 600 Products
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class="bgi-g3">
    <div class="container mx-auto flex flex-wrap justify-center py-12">
        <div class="w-full md:w-1/3 px-2 py-2">
            <div class="flex flex-col">
                <h1 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg">Beef/Lamb/Pork</h1>
                <div class="h-10r">
                     <img src="/images/beef.png" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full">More</button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-2 py-2">
            <div class="flex flex-col">
                <h1 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg"> Bacon/Chicken</h1>
                <div class="h-10r">
                     <img src="/images/chicken.png" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full">More</button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-2 py-2">
            <div class="flex flex-col">
                <h1 class="bgi-p text-grey-lightest text-center py-2 rounded-t-xlg"> Poultry/Eggs</h1>
                <div class="h-10r">
                     <img src="/images/eggs.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center  bgi-p py-2 rounded-b-lg group">
                    <button class="text-grey-lightest w-full">More</button>
                </div>
            </div>
        </div>
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
@parent

@endsection