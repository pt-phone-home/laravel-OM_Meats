@foreach($recipes as $recipe)
<div class="w-full md:w-1/2 lg:w-1/3 px-4 py-6">
    <div class="flex flex-col border-2 border-p">
        <div class="h-15r px-4 py-4">
            <img src="{{$recipe->img}}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="bg-p py-2 px-1">
            <h4 class="text-om-white text-xl">{{$recipe->title}}</h4>
        </div>
        {{-- <div class="bg-grey-lightest py-2 pl-4 pr-1 flex-1 ouput">
            {!!   str_limit($recipe->detail, $limit = 100, $end = '...') !!}
        </div> --}}
        <div class="bg-grey-darkest py-2 px-1 flex">
            <a href="/recipeitem/{{$recipe->id}}" class="text-om-white no-underline w-full">Read More</a>
        </div>
    </div>
</div>
@endforeach


