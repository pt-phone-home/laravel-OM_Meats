@extends('master')

@section('title')
 Recipes | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-6 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
                Recipes
        </h1>  
    </div>
</div>
<div class="bgi-g1 py-6">
    <div class="container mx-auto flex justify-center">
            <h1 class="text-p font-thin font-nun">New Recipe Idea</h1>
    </div>
</div>

<div class="bgi-g1 py-6">
    <div class="container mx-auto flex justify-center">
        @if($latest_recipe)
        <div class="w-90p md:w-70p px-4 py-4">
            <div class="flex border-2 border-p">
                    {{-- Left Side --}}
                <div class="w-1/2 flex flex-col">
                    <div class="bg-grey-darkest">
                        <h3 class="text-om-white py-2 px-1">{{$latest_recipe->title}}</h3>
                    </div>
                    <div class="flex-1 border-r-2 border-p py-2 px-1 bg-grey-lightest">
                        {!! str_limit($latest_recipe->detail, $limit = 200, $end = '...') !!}
                    </div>
                    <div class="bg-p py-2 px-1 flex">
                        <a href="/recipeitem/{{$latest_recipe->id}}" class="no-underline text-om-white hover:text-grey-light w-full">Read More</a>
                    </div>
                </div>
                
                <div class="w-1/2 flex px-4 py-4">
                    <img src="/{{$latest_recipe->img}}" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<div class="div bgi-g1 pt-8 flex"> 
    <div class="w-1/3">

    </div>
    <h1 class="text-p bgi-g3 py-6 w-1/3 text-center rounded-t-xlg font-nun font-light uppercase">
        Other Recipe Ideas
    </h1>
    <div class="w-1/3">

    </div>
</div>
<div class="bgi-g3">
    <div class="container mx-auto flex flex-wrap py-6">
        @if($recipes)
        @foreach($recipes as $recipe)
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4">
            <div class="flex flex-col border-2 border-p">
                <div class="h-15r px-4 py-4">
                    <img src="{{$recipe->img}}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="bg-p py-2 px-1">
                    <h4 class="text-om-white text-xl">{{$recipe->title}}</h4>
                </div>
                <div class="bg-grey-lightest py-2 px-1 flex-1">
                    {!! str_limit($recipe->detail, $limit = 50, $end = '...') !!}
                </div>
                <div class="bg-grey-darkest py-2 px-1 flex">
                    <a href="/recipeitem/{{$recipe->id}}" class="text-om-white no-underline w-full">Read More</a>
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