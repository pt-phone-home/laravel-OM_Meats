@extends('master')

@section('title')
 Recipes | O'Mahony Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-6 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Recipe Ideas from O'Mahony Meats
        </h1>  
    </div>
</div>
<div class="bgi-g1">
    @if($recipe)
    <div class="container mx-auto flex justify-center py-6">
        <div class="flex flex-col w-95p mx-2 md:w-80p border-2 border-p">
            <div class="bgi-s py-4 px-2">
                <div class="flex justify-between items-center text-om-white">
                    <h2>{{$recipe->title}}</h2>
                    <h5>{{$recipe->updated_at->diffForHumans()}}</h5>
                </div>
            </div>
            <div class="h-20r px-4 py-4">
                    <img src="/{{$recipe->img}}" alt="" class="h-full w-full object-cover">
            </div>
            <hr class="w-90p border border-grey-dark">
            <div class="px-4 py-4">
                    {!! $recipe->detail !!}
            </div>
        </div>
    </div>
    @endif
    <div class="flex justify-center py-6">
        <a href="/recipes" class="bgi-p rounded py-2 px-4 text-om-white no-underline hover:text-grey-light">Back to Recipes</a>
    </div>
</div>



@endsection

@section('scripts')
@parent

@endsection