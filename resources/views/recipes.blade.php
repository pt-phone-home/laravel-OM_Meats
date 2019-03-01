@extends('master')

@section('title')
 Recipes | O'Mahony Meats Ltd.
@endsection

@section('content')

<div class="recipes-banner-container bg-p">
    <div class="recipes-banner my-m">
        <h1 class="recipes-banner-item my-m fs-xl c-g1">
            Recipe Ideas from O'Manony's
        </h1>
    </div>
</div>

<div class="latest-recipe-title-container bg-g1">
    <div class="latest-recipe-title">
        <h2 class="latest-recipe-title-item fs-l py-m ">
            Latest Recipe Idea
        </h2>
    </div>
</div>

<div class="latest-recipe-container bg-g1">
    <div class="latest-recipe my-l">

        <div class="latest-recipe-card my-m">
            @if($latest_recipe)
            
            <div class="latest-recipe-card-left">
                <h3 class="latest-recipe-card-left-title my-m fs-m px-s">{{$latest_recipe->title}}</h3>
                <div class="latest-recipe-card-left-description">
                   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum perspiciatis amet quaerat vero temporibus corporis libero dolorum molestias perferendis repellendus?
                </div>
            </div>
            <div class="latest-recipe-card-right">
                <img src="{{$latest_recipe->img}}" alt="">
            </div>
            <div class="latest-recipe-card-bottom">
                <a href="/recipeitem/{{$latest_recipe->id}}" class="latest-recipe-card-bottom-cta">Read More</a>
            </div>
            @endif
        </div>

    </div>
</div>

<div class="recipes-title-container bg-g1">
    <div class="recipes-title">
        <h2 class="recipes-title-item py-m bg-g3 c-p fs-l">
            Recipe Ideas
        </h2>
    </div>
</div>

<div class="recipes-container bg-g3">
    <div class="recipes my-l">
        @if($recipes)
        @foreach($recipes as $recipe)
        <div class="recipes-card my-s">
            <div class="recipes-card-top">
                <img src="{{$recipe->img}}" alt="">
            </div>
            <div class="recipes-card-bottom bg-g1">
                <h3 class="recipes-card-bottom-title px-s my-s">
                    {{ $recipe->title }}
                </h3>
                <p class="recipes-card-bottom-info px-s fs-xs my-s">
                   {!! substr($recipe->detail, 0, 40) !!}
                </p>
            </div>
            <div class="recipes-card-cta">
            <a href="/recipeitem/{{$recipe->id}}" class="recipes-card-cta-link">Read More</a>
                </div>
        </div>
        @endforeach
        @endif
        <div class="recipes-card my-s">
            <div class="recipes-card-top">
                <img src="/images/gallery3.jpg" alt="">
            </div>
            <div class="recipes-card-bottom bg-g1">
                <h3 class="recipes-card-bottom-title px-s my-s">
                    Recipe Title
                </h3>
                <p class="recipes-card-bottom-info px-s fs-xs my-s">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sit perspiciatis ipsa velit ad debitis ratione cumque placeat reiciendis sunt.
                </p>
            </div>
            <div class="recipes-card-cta">
                <a href="/recipeitem/" class="recipes-card-cta-link">Read More</a>
            </div>
        </div>
        <div class="recipes-card my-s">
            <div class="recipes-card-top">
                <img src="/images/gallery3.jpg" alt="">
            </div>
            <div class="recipes-card-bottom bg-g1">
                <h3 class="recipes-card-bottom-title px-s my-s">
                    Recipe Title
                </h3>
                <p class="recipes-card-bottom-info px-s fs-xs my-s">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sit perspiciatis ipsa velit ad debitis ratione cumque placeat reiciendis sunt.
                </p>
            </div>
        </div>
        <div class="recipes-card my-s">
            <div class="recipes-card-top">
                <img src="/images/gallery3.jpg" alt="">
            </div>
            <div class="recipes-card-bottom bg-g1">
                <h3 class="recipes-card-bottom-title px-s my-s">
                    Recipe Title
                </h3>
                <p class="recipes-card-bottom-info px-s fs-xs my-s">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sit perspiciatis ipsa velit ad debitis ratione cumque placeat reiciendis sunt.
                </p>
            </div>
        </div> 
    </div>
    </div>
</div>





@endsection

@section('scripts')

@endsection