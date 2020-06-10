@extends('master')

@section('title')
 Retail | O'Mahony Meats Ltd.
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
        <h1 class="text-p py-4 px-4 text-3xl font-thin">Come and visit our genuine factory shop with ample free parking!
        </h1>
    </div>
</div>
<div class="bgi-g1">
    <div class="container mx-auto flex justify-center h-25r py-8">
        <img src="/images/staff2.png" alt="" class="h-full w-full object-contain rounded">
    </div>
</div>
<div class="div bgi-g1 pt-8 flex">
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-lightest bgi-s py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        New Delivery Service
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>
<div class="bgi-s">
    <div class="container mx-auto flex flex-wrap py-12">
        <div class="w-full md:w-2/3 py-2 px-12 flex items-center">
            <div class="flex flex-col justify-center items-start">
                <p class="py-4 text-grey-lightest text-2xl">
                   How to order?
                </p>
                <div class="text-grey-lightest">
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>By phone (01 8476000 +1)</p>
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>By email (orders@ommeats.ie)</p>
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Via Facebook/Messenger</p>
                </div>
                <p class="py-4 text-grey-lightest text-2xl">
                   How can you pay?
                </p>
                <div class="text-grey-lightest">
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>By card over the phone (ahead of delivery)</p>
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>You must supply a contact number when ordering!</p>
                </div>
                <p class="py-4 text-grey-lightest text-2xl">
                    PLEASE NOTE:
                </p>
                <div class="text-grey-lightest">
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>€40 minimum value, a €5 delivery charge will be added to you order.</p>
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>FREE delivery for orders over €80.</p>
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>We deliver Monday-Friday in the Dublin area.</p>
                    <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>All orders must be paid PRIOR to delivery</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 py-2 flex flex-col items-center justify-center">
            <h2 class="text-grey-lightest font-normal text-center mb-2">Click to view and download our delivery brochure</h2>
            <div class="h-20r px-4 py-4 bg-transparent md:bg-grey-light">
                <a href="{{asset('delivery_brochure.pdf')}}" target="_blank"><img src="/images/brochure_cover.png" alt=""
                                                                         class="h-full w-full object-cover"></a>
            </div>
        </div>
    </div>
</div>
<div class="div bgi-s pt-8 flex">
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g2 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Large Choice of Products
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>
<div class="bgi-g2">
    <div class="container mx-auto flex flex-wrap py-12">
        <div class="w-full md:w-1/3 py-2">
            <div class="h-20r px-4 py-4 bg-transparent md:bg-p">
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
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-lightest bgi-s py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Products for All Occasions
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

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
            <div class="h-20r px-4 py-4 bg-transparent md:bg-grey-light">
                <img src="/images/products.jpg" alt="" class="h-full w-full object-cover">
            </div>
        </div>
    </div>
</div>
<div class="div bgi-s pt-8 flex">
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g1 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Expert Staff
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>
<div class="bgi-g1">
    <div class="container mx-auto flex flex-wrap py-12">
        <div class="w-full md:w-1/3 py-2">
            <div class="h-20r px-4 py-4 bg-transparent md:bg-p">
                <img src="/images/staff3.png" alt="" class="h-full w-full object-cover">
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
