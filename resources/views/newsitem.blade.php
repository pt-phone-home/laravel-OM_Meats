@extends('master')

@section('title')
 News | O'Mahoney Meats Ltd.
@endsection

@section('content')

<div class="news-banner-container bg-p">
    <div class="news-banner my-m">
        <h1 class="news-banner-item my-m c-g1 fs-xl">
            News from O'Mahony's
        </h1>
    </div>
</div>

<div class="newsitem-container">
        <div class="newsitem my-m">
            @if($newsitem)
            <div class="newsitem-title bg-s c-g1">
                <h2 class="recipeitem-title-item my-m">
                {{$newsitem->title}}
                </h2>
                <h5 class="newsitem-title-date my-m"> Updated:
                        {{$newsitem->updated_at->diffForHumans()}}
                </h5>
            </div>
            <hr>
            <div class="newsitem-img bg-g1 my-m">
                <img src="/{{$newsitem->img}}" alt="">
            </div>
            <div class="newsitem-headline">
                <h4 class="newsitem-headline-item px-m">
                    {{$newsitem->headline}}
                </h4>
            </div>
            <hr>
            <div class="newsitem-detail my-m mx-m">
                {!! $newsitem->body !!}
            </div>
            @endif
        </div>
    </div>
    



@endsection

@section('scripts')

@endsection