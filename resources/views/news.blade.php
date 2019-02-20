@extends('master')

@section('title')
 News | O'Mahoney Meats Ltd.
@endsection

@section('content')

<div class="news-banner-container bg-p">
    <div class="news-banner my-m">
        <h1 class="news-banner-item my-m c-g1 fs-xl">
            Latest News from O'Mahony's
        </h1>
    </div>
</div>

<div class="latest-news-title-container bg-g2">
    <div class="latest-news-title">
        <div class="latest-news-title-item fs-l my-m">
            Latest Story
        </div>
    </div>
</div>

<div class="latest-news-container bg-g2">
    <div class="latest-news">

        <div class="latest-news-card my-m">
            <div class="latest-news-card-left bg-g1">
                <h2 class="latest-news-card-left-title py-s px-s">
                    Story Title
                </h2>

                <p class="latest-news-card-left-info py-s px-s">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus totam perspiciatis quas praesentium quia id inventore, dolorum cumque sint aliquid.
                </p>
            </div>
            <div class="latest-news-card-right">
                <img src="/images/gallery6.jpg" alt="">
            </div>
        </div>

    </div>
</div>

<div class="news-title-container bg-g2">
    <div class="news-title">
        <h2 class="news-title-item bg-s fs-l py-m c-g1">
            News
        </h2>
    </div>
</div>



@endsection

@section('scripts')

@endsection