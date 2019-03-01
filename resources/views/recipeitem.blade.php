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

<div class="recipeitem-container">
    <div class="recipeitem my-m">
        @if($recipe)
        <div class="recipeitem-title bg-s c-g1">
            <h2 class="recipeitem-title-item my-m">
            {{$recipe->title}}
            </h2>
            <h5 class="recipeitem-title-date my-m"> Updated:
                    {{$recipe->updated_at->diffForHumans()}}
            </h5>
        </div>
        <hr>
        <div class="recipeitem-img bg-g1 my-m">
            <img src="/{{$recipe->img}}" alt="">
        </div>
        <hr>
        <div class="recipeitem-detail my-m mx-m">
            {!! $recipe->detail !!}
        </div>
        @endif
    </div>
</div>

@endsection

@section('scripts')

@endsection