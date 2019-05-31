@extends('master')

@section('title')
 News | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-6 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            News
        </h1>  
    </div>
</div>
<div class="bgi-g1 py-6">
    <div class="container mx-auto flex justify-center">
            <h1 class="text-p font-thin font-nun">Latest Story</h1>
    </div>
</div>
<div class="bgi-g1 py-6">
    <div class="container mx-auto flex justify-center">
        @if($latest_news)
        <div class="w-90p md:w-70p px-4 py-4">
            <div class="flex flex-col border-2 border-p">
                
                <div class="bg-grey-darkest">
                    <h3 class="text-om-white py-2 px-2 text-2xl">{{$latest_news->title}}</h3>
                </div>
                <div class="flex px-6 py-6 h-20r justify-center items-center">
                    <img src="/{{$latest_news->img}}" alt="" class="w-full h-full object-cover">
                </div>
                <hr class="w-90p border border-grey-dark">
                <div class="flex-1 py-4 px-1 text-2xl">
                    <strong>{{str_limit($latest_news->headline, $limit = 100, $end = '... ')}}</strong>
                </div>
                {{-- <div class="flex-1 border-r-2 border-p py-2 px-1 bg-grey-lightest text-base">
                    {!! str_limit($latest_news->body, $limit = 40, $end = '...') !!}
                </div> --}}
                <div class="bg-p py-2 px-1 flex justify-center">
                    <a href="/newsitem/{{$latest_news->id}}" class="no-underline text-om-white hover:text-grey-light w-full text-center">Read More</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
    <h1 class="text-p bgi-g3 py-6 w-3/5 sm:w-1/2 lg:w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Other News
    </h1>
    <div class="w-1/5 sm:w-1/4 lg:w-1/3">

    </div>
</div>

<div class="bgi-g3 py-6">
    <div class="container mx-auto flex flex-wrap">
        @if($news)
        @foreach($news as $new)
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4">
            <div class="flex flex-col border-2 border-p">
                
                <div class="bg-grey-darkest">
                    <h3 class="text-om-white py-2 px-2 text-2xl">{{$new->title}}</h3>
                </div>
                <div class="flex px-6 py-6 h-20r justify-center items-center">
                    <img src="/{{$new->img}}" alt="" class="w-full h-full object-cover">
                </div>
                <hr class="w-90p border border-grey-dark">
                <div class="flex-1 py-4 px-4 text-2xl">
                    <strong>{{str_limit($new->headline, $limit = 100, $end = '... ')}}</strong>
                </div>
                {{-- <div class="flex-1 border-r-2 border-p py-2 px-1 bg-grey-lightest text-base">
                    {!! str_limit($latest_news->body, $limit = 40, $end = '...') !!}
                </div> --}}
                <div class="bg-p py-2 px-1 flex justify-center">
                    <a href="/newsitem/{{$new->id}}" class="no-underline text-om-white hover:text-grey-light w-full text-center">Read More</a>
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