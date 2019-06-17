@extends('master')

@section('title')
Quality | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Quality
        </h1>  
    </div>
</div>

<div class="bgi-g1">
    <div class="container mx-auto py-12 w-70p">
        <div class="text-p text-3xl text-center leading-normal my-m">
            “At O’Mahony Meats we are committed to selling high quality locally sourced products where possible. All our products meet the most current food safety regulations so you can be confident you are buying the best locally sourced quality meat”
        </div>
    </div>
</div>
<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-lightest bgi-s py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
       Our Commitment
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

   
    <div class="bgi-s">
        <div class="container mx-auto py-8 px-4">
            <p class="text-om-white text-xl py-2"><i class="far fa-check-circle mx-4"></i>Implementation and maintenance of the HACCP Food Safety Management System</p>
            {{-- <p class="text-om-white text-xl py-2"><i class="far fa-check-circle mx-4"></i>Annual independent audit of our premises by Excellence Ireland Quality Association (EIQA)</p> --}}
            <p class="text-om-white text-xl py-2"><i class="far fa-check-circle mx-4"></i>Maintenance and regular updating of Food Hygiene systems in place</p>
            <p class="text-om-white text-xl py-2"><i class="far fa-check-circle mx-4"></i>Training of all our staff in Food Hygiene procedures</p>
            <p class="text-om-white text-xl py-2"><i class="far fa-check-circle mx-4"></i>Quality control checks at all stages of our operation, including routine microbiological testing of all products</p>
            <p class="text-om-white text-xl py-2"><i class="far fa-check-circle mx-4"></i>Regular unannounced audits of our production plant and practices</p>
        </div>
    </div>
<div class="div bgi-s pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g1 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Compliance
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class="bgi-g1">
    <div class="container mx-auto flex flex-wrap py-4">
        <div class="w-full lg:w-1/2 px-6 py-6 flex">
            <div class="flex border-2 border-p">
                {{-- left --}}
                <div class="w-3r flex flex-col">
                    <div class="h-70p bgi-p">
                        <h5 class="text-om-white rotateText text-xl">Traceability</h5>
                    </div>
                    <div class="h-30p bgi-s flex justify-center items-center">
                        <i class="fas fa-search-location text-center text-om-white text-2xl"></i>
                    </div>
                </div>
                {{-- right --}}
                <div class="w-full flex flex-col bg-grey-lightest">
                    <div class="flex flex-col relative py-4">
                        <h1 class="text-center text-p z-10 py-2">Traceability</h1>
                        <i class="fas fa-search-location text-center text-grey text-6xl z-0"></i>
                    </div>
                    
                    <div class="px-6 pt-2 flex flex-col justify-center h-full">
                        <p class="py-2">A comprehensive supply chain management system is vital. </p>
                        <p class="py-2">All products sold at O’Mahony Meats have a unique batch code which ensures that they are fully traceable from the approved source, right through the production process, to the customer.</p>
                        <p class="py-2">Our traceability system is routinely tested by our independent food hygiene consultant. This involves tracing products right back to the approved processing plants and farms of origin.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 px-6 py-6 flex">
            <div class="flex border-2 border-p">
                {{-- left --}}
                <div class="w-3r flex flex-col">
                    <div class="h-70p bgi-p">
                        <h5 class="text-om-white rotateText text-xl">Accreditation</h5>
                    </div>
                    <div class="h-30p bgi-s flex justify-center items-center">
                        <i class="fas fa-check-double text-center text-om-white text-2xl"></i>
                    </div>
                </div>
                {{-- right --}}
                <div class="w-full flex flex-col bg-grey-lightest">
                    <div class="flex flex-col relative py-4">
                        <h1 class="text-center text-p z-10 py-2">Accreditation</h1>
                        <i class="fas fa-check-double text-center text-grey text-6xl z-0"></i>
                    </div>
                    
                    <div class="px-6 pt-2 flex flex-col justify-center h-full">
                        <p class="py-2">O’Mahony Meats Ltd is approved by the Department of Agriculture, Food &amp; the Marine, Approval Number IE2372. 
                            This approval is through rigorous inspections carried out routinely by Senior Veterinary Inspectors. 
                            </p>
                        <p class="py-2">All raw meat products supplied by O’Mahony Meats are in compliance with all National and EU regulatory standards.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>
<div class="bg-white">
    <div class="container mx-auto flex flex-wrap bgi-w">
        <div class="w-full md:w-1/2">
            <div class="h-20r flex items-center justify-center">
                <img src="/images/craftbutchers.png" alt="" class="w-90p h-80p object-contain">
            </div>
        </div>
        {{-- <div class="w-full md:w-1/3">
            <div class="h-20r flex items-center justify-center">
                <img src="/images/eiqa.jpg" alt="" class="w-90p h-80p object-contain">
            </div>
        </div> --}}
        <div class="w-full md:w-1/2">
            <div class="h-20r flex items-center justify-center">
                <img src="/images/haccp.png" alt="" class="w-90p h-80p object-contain">
            </div>
        </div>
    </div>
</div>


    
@endsection

@section('scripts')
@parent

@endsection