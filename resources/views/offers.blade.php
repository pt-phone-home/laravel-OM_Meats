@extends('master')

@section('title')
 Offers | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-6 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
                Special Offers
        </h1>
    </div>
</div>

<div class="bgi-g1 py-6">
    <div class="container mx-auto flex justify-center">
        <h1 class="text-p font-thin font-nun">Latest Offer</h1>
    </div>
    <div class="container mx-auto flex justify-center">
        @if($latest_offer)
        <div class="w-full md:w-70p px-4 py-4">
            <div class="flex flex-col border-2 border-p">
                <div class="w-full bgi-p">
                    <h3 class="text-om-white text-center py-2 text-xl">{{$latest_offer->title}}</h3>
                </div>
                <div class="flex">
                    <div class="w-1/2 px-4 py-4 h-18r">
                        <img src="{{$latest_offer->img}}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="w-1/2 bg-grey-lightest px-4 py-4 flex flex-col justify-between">
                        <div class="text-base output">
                            <p>{!! str_limit($latest_offer->detail, $limit = 200, $end = '...') !!}</p>
                        </div>
                        <div class="bg-p py-2 px-2">
                            <div class="text-om-white text-xl">Valid Until: {{$latest_offer->valid}} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

</div>

<div class="div bgi-g1 pt-8 flex">
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-grey-darkest bgi-g3 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Offers
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class="bgi-g3">
    <div class="container mx-auto flex flex-wrap py-6">
        @if($offers)
        @foreach($offers as $offer)
        <div class="w-full md:w-1/2 lg:w-1/3 px-6 py-4">
            <div class="flex flex-col border-2 border-p">
                <div class="h-15r px-2 py-2">
                    <img src="{{$offer->img}}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="bg-p py-2 px-1">
                    <h4 class="text-om-white text-xl">{{$offer->title}}</h4>
                </div>
                <div class="bg-grey-lightest py-2 px-1 output">
                    <div>{!! $offer->detail !!}</div>
                </div>
                <div class="bg-grey-darkest py-2 px-2">
                    <div class="text-om-white text-xl">Valid Until: {{$offer->valid}} </div>
                </div>
            </div>

        </div>
        @endforeach
        @endif

    </div>

</div>



@endsection

@section('scripts')
@parent

@endsection
