@extends('master')

@section('title')
 Offers | O'Mahoney Meats Ltd.
@endsection

@section('content')

<div class="offers-banner-container bgi-p">
    <div class="offers-banner my-m">
        <h1 class="offers-banner-item my-m c-g1 fs-xl">
            Special Offers
        </h1>
    </div>
</div>

<div class="latest-offer-container bgi-g1">
    <div class="latest-offer my-m">
        <div class="latest-offer-title">
            <div class="latest-offer-title-item fs-l c-p">
                Latest Offer
            </div>
        </div>
        @if($latest_offer)
        <div class="latest-offer-card my-m">
            <div class="latest-offer-card-left px-m py-m bg-g2">
                
            <img src="{{$latest_offer->img}}" alt="">
            
            </div>
            <div class="latest-offer-card-right px-m py-m bg-g1">
                <div class="latest-offer-card-right-details fs-m">
                    {!! str_limit($latest_offer->detail, $limit = 200, $end = '...') !!}
                </div>
                <h2 class="latest-offer-card-right-valid c-g1 my-s px-s py-s bg-s">Valid Until: {{$latest_offer->valid}} </h2>
            </div>
            <div class="latest-offer-card-bottom bg-p c-g1">
            <h3 class="latest-offer-card-bottom-item py-s fs-l">{{$latest_offer->title}}</h3>
            </div>

        </div>
        @endif
    </div>
</div>


<div class="offers-title-container bgi-g1 pt-l">
    <div class="offers-title">
        <h2 class="offers-title-item fs-l c-p bgi-g3 py-m">
            Offers
        </h2>
    </div>
</div>
<div class="offers-container bgi-g3">
    <div class="offers my-l">
        @if($offers)
        @foreach($offers as $offer)
        <div class="offers-card my-m bg-g3">
            <div class="offers-card-img px-s py-s ">
                <img src="{{$offer->img}}" alt="">
            </div>
            <div class="offers-card-title bg-p c-g1 px-s py-s fs-m">
                <h4 class="offers-card-title-item">
                    {{$offer->title}}
                </h4>
            </div>
            <div class="offers-card-detail bg-g1">
            <div class="offers-card-detail-item my-m px-s bg-g1">{!! $offer->detail !!}
            </div>
            </div>
            <div class="offers-card-bottom bg-s">
                <h4 class="offers-card-bottom-item py-s c-g1 px-s bg-s">
                    Valid Until: {{$offer->valid}}
                </h4>
            </div>
        </div>
        @endforeach
        @endif
        {{-- <div class="offers-card my-m">
            <div class="offers-card-img">
                <img src="/images/gallery9.jpg" alt="">
            </div>
            <div class="offers-card-title bg-p c-g1 px-s py-s fs-m">
                <h4 class="offers-card-title-item">
                    Offer Title
                </h4>
            </div>
            <div class="offers-card-detail">
                <p class="offers-card-detail-item my-m px-s">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque ratione repudiandae porro, autem illo atque?</p>
            </div>
            <div class="offers-card-bottom bg-s">
                <h4 class="offers-card-bottom-item py-s c-g1 px-s">
                    Valid Until: 
                </h4>
            </div>
        </div>
        <div class="offers-card my-m">
            <div class="offers-card-img">
                <img src="/images/gallery9.jpg" alt="">
            </div>
            <div class="offers-card-title bg-p c-g1 px-s py-s fs-m">
                <h4 class="offers-card-title-item">
                    Offer Title
                </h4>
            </div>
            <div class="offers-card-detail">
                <p class="offers-card-detail-item my-m px-s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam voluptatibus non repellat laudantium, molestiae voluptates ex odit laborum rerum, quasi quam reiciendis, dicta dolorum odio! </p>
            </div>
            <div class="offers-card-bottom bg-s">
                <h4 class="offers-card-bottom-item py-s c-g1 px-s">
                    Valid Until: 
                </h4>
            </div>
        </div> --}}
    </div>
</div>

@endsection

@section('scripts')

@endsection