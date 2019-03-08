@extends('master')

@section('title')
 Recipes | O'Mahony Meats Ltd.
@endsection

@section('content')

<div class="recipes-banner-container bgi-p">
    <div class="recipes-banner my-m">
        <h1 class="recipes-banner-item my-m fs-xl c-g1">
            Recipe Ideas from O'Mahony's
        </h1>
    </div>
</div>

<div class="latest-recipe-title-container bgi-g1">
    <div class="latest-recipe-title">
        <h2 class="latest-recipe-title-item fs-l py-m ">
            Latest Recipe Idea
        </h2>
    </div>
</div>

<div class="latest-recipe-container bgi-g1">
    <div class="latest-recipe my-l">

        <div class="latest-recipe-card my-m">
            @if($latest_recipe)
            
            <div class="latest-recipe-card-left bg-g1">
                <h3 class="latest-recipe-card-left-title  fs-m px-s bg-s c-g1 py-s">{{$latest_recipe->title}}
                </h3>
                <div class="latest-recipe-card-left-output bg-g1">
                    {!! str_limit($latest_recipe->detail, $limit = 200, $end = '...') !!}
                </div>
                <div class="latest-recipe-card-left-bottom">
                    <a href="/recipeitem/{{$latest_recipe->id}}" class="latest-recipe-card-left-bottom-cta">Read More</a>
                </div>
               
            </div>
            <div class="latest-recipe-card-right bg-g1 px-m py-m bg-g3">
                <img src="/{{$latest_recipe->img}}" alt="">
            </div>
            
            @endif
        </div>

    </div>
</div>

<div class="recipes-title-container bgi-g1 pt-l">
    <div class="recipes-title">
        <h2 class="recipes-title-item py-m bgi-g3 c-p fs-l">
            Recipe Ideas
        </h2>
    </div>
</div>

<div class="recipes-container bgi-g3">
    <div class="recipes my-l">
        @if($recipes)
        @foreach($recipes as $recipe)
        <div class="recipes-card my-s">
            <div class="recipes-card-top px-s py-s bg-g3">
                <img src="{{$recipe->img}}" alt="" class="bg-g4">
            </div>
            <div class="recipes-card-bottom bg-g1">
                <h3 class="recipes-card-bottom-title px-s py-s bg-s c-g1">
                    {{ $recipe->title }}
                </h3>
                <p class="recipes-card-bottom-output px-s fs-xs my-s">
                   {!! str_limit($recipe->detail, $limit = 50, $end = '...') !!}
                </p>
            </div>
            <div class="recipes-card-cta">
            <a href="/recipeitem/{{$recipe->id}}" class="recipes-card-cta-link">Read More</a>
            </div>
        </div>
        @endforeach
        @endif
        
        
        
    </div>
    </div>
</div>





@endsection

@section('scripts')

@endsection