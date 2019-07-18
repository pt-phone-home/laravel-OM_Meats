@extends('master')

@section('title')
 Wholesale | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Wholesale
        </h1>  
    </div>
</div>
<div class="bgi-g2">
    <div class="container mx-auto py-6 flex justify-center text-lg">
        <div class="w-90p text-center">
            <p class="text-p text-2xl leading-normal py-12 c-p">O’Mahony Meats offer a comprehensive range of meat <a href="/products" class="text-grey-darkest hover:text-p">products</a>  tailor-made for hotels, restaurants, hospitals, nursing homes, and anyone in the food industry. <br><br>
            Call our sales representative, Michael Cooke (087 2576678), to talk about your specific requirements.   
            </p>
        </div>
    </div>
</div>
<div class="bgi-g2 pb-8">
    <div class="container mx-auto flex flex-wrap justify-center">
        <div class="w-full md:w-1/3 px-2 py-2 h-20r hidden md:block">
            <img src="/images/wholesale1.png" alt="" class="w-full h-full object-cover rounded shadow">
        </div>
        <div class="w-full md:w-1/3 px-2 py-2 h-20r">
            <img src="/images/wholesale2.png" alt="" class="w-full h-full object-cover rounded shadow">
        </div>
        <div class="w-full md:w-1/3 px-2 py-2 h-20r hidden md:block">
            <img src="/images/wholesale3.png" alt="" class="w-full h-full object-cover rounded shadow">
        </div>
    </div>
</div>

<div class="div bgi-g2 pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g1 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Ordering Service
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class="bgi-g1">
    <div class="container mx-auto flex flex-col items-center justify-center py-12 w-60p">
        <p class="text-xl text-grey-darkest py-6">
            <strong>New Customers</strong><br>
            Contact Michael Cooke on 01 8476000 +5 to set up your account and meet with him to discuss your specific needs and pricing.

        </p>
        <p class="text-xl text-grey-darkest py-6">
            <strong>Existing Customers</strong><br>
            Place your order via email (orders@ommeats.ie). <br> <br> Or by phone (01 8476000 +1) Monday-Saturday between 5am-4.30pm. <br>
            Automated answering service for out of hours orders. 

        </p>
    </div>
</div>

<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g4 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Delivery
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class=" bgi-g4">
    <div class="container mx-auto flex flex-col py-12 w-60p">
        <p class="text-xl text-grey-darkest py-6">
                We run a fleet of 9 refrigerated GPS-monitored vans.<br>
        </p>
        <p class="text-xl text-grey-darkest py-6">
                Our delivery service operates 6 days a week, from 6am to 3pm. <br>
        </p>
        <p class="text-xl text-grey-darkest py-6">
                We deliver daily to customers in Dublin and the greater Dublin area, and twice-weekly in Meath and Kildare.
        </p>
    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection