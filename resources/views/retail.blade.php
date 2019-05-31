@extends('master')

@section('title')
 Retail | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Retail
        </h1>  
    </div>
</div>

<div class="bgi-g1">
    <div class="container mx-auto flex justify-center py-8">
        <h1 class="text-p py-12 text-3xl font-thin">Come and visit our genuine factory shop with ample free parking!
        </h1>
    </div>
</div>
<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g2 py-6 w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Large choice of products
    </h1>
    <div class="w-1/3">

    </div>
</div>
<div class="bgi-g2">
    <div class="container mx-auto flex flex-wrap py-12">
        <div class="w-full md:w-1/3 py-2">
            <div class="h-20r px-4 py-4 bgi-p">
                <img src="/images/retail5.JPG" alt="" class="h-full w-full object-cover">
            </div>
        </div>
        <div class="w-full md:w-2/3 py-2 px-12 flex items-center">
            <div class="flex flex-col justify-center items-center">
                <p class="py-4 text-grey-darkest text-lg">
                    You will find a large selection of freshly cut premium meats, as well as conveniently pre-packed meats, a choice of ready-made meals, eggs and a range of convenience frozen meats. <br>
                    Check out our Special Offers counter and our range of Leaner Option packs!
                </p>
            </div>
        </div>
    </div>
</div>
<div class="div bgi-g2 pt-8 flex"> 
    <div class="w-1/3">

    </div>
    <h1 class="text-grey-lightest bgi-s py-6 w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Products for All Occasions
    </h1>
    <div class="w-1/3">

    </div>
</div>
<div class="bgi-s">
    <div class="container mx-auto flex flex-wrap py-12">
        <div class="w-full md:w-2/3 py-2 px-12 flex items-center ">
            <div class="flex flex-col justify-center items-center">
                <p class="py-4 text-grey-lightest text-lg">
                        Small appetite, or small family to feed? No problem! Our in-house butchers will cut or trim any piece of meat to suit your needs.

                </p>
                <p class="py-4 text-grey-lightest text-lg">
                        Hosting a family event and need large quantities? Not a problem! We supply some of Dublin’s busiest hotels and restaurants so we are well used to it!

                </p>
            </div>
        </div>
        <div class="w-full md:w-1/3 py-2 flex items-center">
            <div class="h-20r px-4 py-4 bgi-g1">
                <img src="/images/products.jpg" alt="" class="h-full w-full object-cover">
            </div>
        </div>
    </div>
</div>
<div class="div bgi-s pt-8 flex"> 
    <div class="w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g1 py-6 w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Expert Staff
    </h1>
    <div class="w-1/3">

    </div>
</div>
<div class="bgi-g1">
    <div class="container mx-auto flex flex-wrap py-12">
        <div class="w-full md:w-1/3 py-2">
            <div class="h-20r px-4 py-4 bgi-p">
                <img src="/images/staff.jpg" alt="" class="h-full w-full object-cover">
            </div>
        </div>
        <div class="w-full md:w-2/3 py-2 px-12 flex items-center">
            <div class="flex flex-col justify-center items-center">
                <p class="py-4 text-grey-darkest text-lg">
                    Can’t see what you want? Just ask! Our friendly staff will be happy to get it for you! Not everything we supply fits into our display cabinets but we stock a huge amount in our refrigerated stock rooms.
                </p>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@parent
@endsection