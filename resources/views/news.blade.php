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

<div class="latest-news-title-container bgi-g1">
    <div class="latest-news-title">
        <div class="latest-news-title-item fs-l my-m">
            Latest Story
        </div>
    </div>
</div>

<div class="latest-news-container bgi-g1">
    <div class="latest-news my-m">

        <div class="latest-news-card my-m">
            @if($latest_news)
            <div class="latest-news-card-left bg-g1">
                <h2 class="latest-news-card-left-title py-s px-s bg-s c-g1">
                    {{$latest_news->title}}
                </h2>
                <div class="latest-news-card-left-headline">
                    <strong>{{$latest_news->headline}}</strong>
                </div>
                <div class="latest-news-card-left-info py-s px-s">
                    {!! str_limit($latest_news->body, $limit = 100, $end = '...') !!}
                </div>
                <div class="latest-news-card-left-bottom">
                <a href="/newsitem/{{$latest_news->id}}" class="latest-news-card-left-bottom-cta">Read More</a>
                </div>
            </div>
            <div class="latest-news-card-right bgi-g1 px-s py-s">
                <img src="/{{$latest_news->img}}" alt="">
            </div>
            @endif
        </div>

    </div>
</div>

<div class="news-title-container bgi-g1 pt-l">
    <div class="news-title">
        <h2 class="news-title-item bgi-g3 fs-l py-m c-p">
            News
        </h2>
    </div>
</div>

<div class="news-container bgi-g3">
    <div class="news my-m">
        @if($news)
        @foreach($news as $new)
        <div class="news-card my-m">

            <div class="news-card-top">
                <img src="/{{$new->img}}" alt="">
            </div>
            <div class="news-card-bottom">
                <h5 class="news-card-bottom-title px-m py-s fs-m bg-s c-g1"> {{$new->title}}</h5>
                <div class="news-card-bottom-info px-m my-s">{!! str_limit($new->body, $limit = 50, $end = '...') !!}</div>
            </div>
            <div class="news-card-bottom-cta">
            <a href="/newsitem/{{$new->id}}" class="news-card-bottom-cta-link">Read More</a>
            </div>

        </div>
        @endforeach
        @endif
        
    </div>
</div>

@endsection

@section('scripts')

@endsection