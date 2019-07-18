@extends('master')

@section('title')
About | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
                About O'Mahony Meats
        </h1>  
    </div>
</div>

<div class="div bgi-g1">
    <div class="container mx-auto flex justify-center bgi-g1">
        <div class="text-3xl text-p w-90p leading-loose text-center px-2 py-8">
            For over 50 years now O’Mahony Meats has gone from strength to strength. <br> It is a thriving <a href="/wholesale" class="text-grey-darkest hover:text-p">wholesale</a> and <a href="/retail" class="text-grey-darkest hover:text-p">retail</a> business enjoying a great reputation as one of the main meat wholesalers in the greater Dublin area.
        </div>
    </div>
</div>

<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-lightest bgi-p py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        In the beginning
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class="bgi-p">
    <div class="container mx-auto flex flex-wrap pt-12 pb-6">
        <div class="w-full md:w-1/3 py-2">
            <div class="h-20r px-4 py-4 bg-transparent md:bg-grey-light">
                <img src="/images/OM_old.png" alt="" class="h-full w-full object-cover">
            </div>
        </div>
        <div class="w-full md:w-2/3 py-2 px-6 lg:px-12 flex items-center">
            <div class="flex flex-col justify-center items-center">
                <p class="py-4 text-grey-lightest text-lg">
                    O’Mahony Meats was established by William Joe O’Mahony in August 1964. He opened a family butcher shop in Killester, a growing neighbourhood on the north side of Dublin.
                </p>
                <p class="py-4 text-grey-lightest text-lg">
                    Kieran, one of his sons, joined the small family business in the 1980s and subsequently developed O'Mahony Meats into a thriving wholesale business. 
                </p>
            </div>
        </div>
    </div>
</div>
<div class=" bgi-p pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-lightest bgi-s py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        A New Era
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>
<div class="bgi-s">
    <div class="container mx-auto flex flex-wrap pt-12 pb-6">
        <div class="w-full md:w-2/3 py-2 px-6 lg:px-12 flex items-center ">
            <div class="flex flex-col justify-center items-center">
                <p class="py-4 text-grey-lightest text-lg">
                        In the early noughties O’Mahony Meats moved to a purpose-built EC-licensed factory on the outskirts of Dublin northside with easy access to both the M50 and the city centre.
                        At the same time the meat factory went back to its roots: we opened a genuine factory shop where our customers can buy a wide range of quality meats at wholesale prices.
                </p>
            </div>
        </div>
        <div class="w-full md:w-1/3 py-2 flex items-center">
            <div class="h-20r px-4 py-4 bg-transparent md:bg-grey-light">
                <img src="/images/wholesale2.png" alt="" class="h-full w-full object-cover">
            </div>
        </div>
    </div>
</div>
<div class="div bgi-s pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g2 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        from Strength to Strength
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>
<div class="bgi-g2">
    <div class="container mx-auto flex flex-wrap pt-12 pb-6">
        <div class="w-full md:w-1/3 py-2">
            <div class="h-25r md:h-18r px-4 py-4 bg-transparent md:bg-p">
                <img src="/images/staff2.jpg" alt="" class="h-full w-full object-contain">
            </div>
        </div>
        <div class="w-full md:w-2/3 py-2 px-6 lg:px-12 flex items-center">
            <div class="flex flex-col justify-center items-center">
                <p class="py-4 text-grey-darkest text-lg">
                    In order to comply with the ever-changing demands of the food industry as well as the specific needs of our customers we at O’Mahony Meats use the most up-to-date manufacturing technology and keep abreast of industry standards. These include full HACCP compliance, a traceability system from intake, incorporating all production processes, right through to dispatch.
                    </p>
                <p class="py-4 text-grey-darkest text-lg">
                    Over the years we have built close working relationships with reliable and professional suppliers to ensure the delivery of quality products. It is crucial that we continue to develop these systems to ensure superior quality, consistency and reliable supply of our meat products to all our customers no matter how big or small.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent

@endsection