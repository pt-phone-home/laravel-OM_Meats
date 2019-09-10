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

<div class="bgi-g1 pt-6">
    <div class="container mx-auto">
        <div class="py-4 text-3xl font-bold text-grey-darkest text-center">
            Current Career Opportunities
        </div>
    </div>
</div>
<div class="bgi-g1 py-6">
    <div class="container mx-auto flex flex-wrap justify-around py-2">
        @if($careers)
        @foreach($careers as $career)
        <div class="w-full my-2 md:w-1/2 px-4 py-4 h-10r ">
            <div class="flex flex-col border-2 border-p">
                <h3 class="bgi-p text-om-white py-2 px-2">{{$career->title}}</h3>
                <div class="bg-grey-lightest py-8 px-2 text-lg">
                    <h5>{{$career->overview}}</h5>
                </div>
                <div class="bgi-p flex justify-center">
                        <a href="/careersitem/{{$career->id}}" class="text-om-white no-underline py-2 w-full text-center">More</a>
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
