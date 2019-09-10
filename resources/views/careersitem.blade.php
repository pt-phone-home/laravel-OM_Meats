@extends('master')

@section('title')
Careers | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-6 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Careers
        </h1>
    </div>
</div>
<div class="div bgi-g1 pt-8 flex">
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g3 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        {{$career->title}}
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>
<div class="bgi-g3">
    <div class="container mx-auto flex justify-center pt-8">
        <div class="w-full md:w-70p flex flex-col border-2 border-p">
            <h3 class="uppercase text-center text-grey-darkest font-thin py-4 text-3xl">Job Description</h3>
            <hr class="border border-grey-dark w-80p">
            <div class="py-4 px-2 text-grey-darkest output">
                {!!$career->details !!}
            </div>
        </div>


    </div>
    <div class="flex justify-center py-4">
        <a href="/careers" class="bgi-p rounded py-2 px-4 text-om-white no-underline hover:text-grey-light">Back to Careers</a>
    </div>
    <div class="flex justify-center py-4">
        <a href="/contact" class="bgi-p rounded py-2 px-4 text-om-white no-underline hover:text-grey-light">Contact Us</a>
    </div>
</div>



@endsection

@section('scripts')
@parent
@endsection
