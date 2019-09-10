@extends('master')

@section('title')
 News | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-6 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            News from O'Mahony Meats
        </h1>
    </div>
</div>
<div class="bgi-g1">
    @if($newsitem)
    <div class="container mx-auto flex justify-center py-6">
        <div class="flex flex-col w-95p mx-2 md:w-80p border-2 border-p">
            <div class="bgi-s py-4 px-2">
                <div class="flex justify-between items-center text-om-white">
                    <h2>{{$newsitem->title}}</h2>
                    <h5>{{$newsitem->updated_at->diffForHumans()}}</h5>
                </div>
            </div>
            <div class="h-20r px-4 py-4">
                    <img src="/{{$newsitem->img}}" alt="" class="h-full w-full object-cover">
            </div>
            <div class="bgi-s py-4 px-2 text-grey-lightest">
                <h2>{{$newsitem->headline}}</h2>
            </div>
            {{-- <hr class="w-90p border border-grey-dark"> --}}
            <div class="px-4 py-4 output text-grey-darkest">
                    {!! $newsitem->body !!}
            </div>
        </div>
    </div>
    @endif
    <div class="flex justify-center py-6">
        <a href="/news" class="bgi-p rounded py-2 px-4 text-om-white no-underline hover:text-grey-light">Back to News</a>
    </div>
</div>






@endsection

@section('scripts')
@parent

@endsection
