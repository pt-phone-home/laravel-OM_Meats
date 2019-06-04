@extends('adminmaster')

@section('title')

O'Mahony Meats Admin Panel 

@endsection 

@section('content')
@include('inc.messages')

<div class="bgi-g1">
    <div class="container mx-auto flex flex-wrap py-6 px-2">
        <div class="w-full lg:w-1/2 py-2 px-4">
            <div class="flex flex-col items-center border-2 border-p bg-grey-lightest px-4">
                <h2 class="pt-4 pb-1 text-grey-darkest">News Controls</h2>
                <div class="py-6 self-start">
                    <a href="/createnewsitem" class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Create News Article</a>
                </div>
                <div class="flex w-full justify-around py-2 font-bold">
                    <div class="w-1/4">News Item</div>
                    <div class="w-1/4">Updated</div>
                    <div class="w-1/4">Edit</div>
                    <div class="w-1/4">Delete</div>
                </div>
               
                <div class="w-full h-10r overflow-scroll tb">
                        @if($newsitem)
                        @foreach($newsitem as $news)
                    <div class="flex w-full justify-between items-baseline py-1">
                        <div class="w-1/4">{{$news->title}}</div>
                        <div class="w-1/4">{{$news->updated_at->diffForHumans()}}</div>
                        <div class="w-1/4"><a href="/newsitem/{{$news->id}}/editnewsitem">Edit</a></div>
                        <div class="w-1/4">
                            <form action="/newsitem/{{$news->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red hover:bg-grey-lightest hover:border hover:border-red border border-transparent px-1 py-1 rounded text-grey-lightest hover:text-red text-xs outline-none active:outline-none">DELETE</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                
            </div>
        </div>
        <div class="w-full lg:w-1/2 py-2 px-4">
            <div class="flex flex-col items-center border-2 border-p bg-grey-lightest px-4">
                <h2 class="pt-4 pb-1 text-grey-darkest">Career Controls</h2>
                <div class="py-6 self-start">
                    <a href="/createcareer" class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Create Career</a>
                </div>
                <div class="flex w-full justify-around py-2 font-bold">
                    <div class="w-1/4">Career Item</div>
                    <div class="w-1/4">Updated</div>
                    <div class="w-1/4">Edit</div>
                    <div class="w-1/4">Delete</div>
                </div>
               
                <div class="w-full h-10r overflow-scroll">
                        @if($career)
                        @foreach($career as $car)
                    <div class="flex w-full justify-between items-baseline py-1">
                        <div class="w-1/4">{{$car->title}}</div>
                        @if($car->updated_at)
                        <div class="w-1/4">{{$car->updated_at->diffForHumans()}}</div>
                        @endif
                        <div class="w-1/4"><a href="/career/{{$car->id}}/editcareer">Edit</a></div>
                        <div class="w-1/4">
                            <form action="/career/{{$car->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red hover:bg-grey-lightest hover:border hover:border-red border border-transparent px-1 py-1 rounded text-grey-lightest hover:text-red text-xs outline-none active:outline-none">DELETE</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                
            </div>
        </div>
    </div>
    
</div>
<div class="bgi-g1">
    <div class="container mx-auto flex flex-wrap pb-4 px-2">
        <div class="w-full lg:w-1/2 py-2 px-4">
            <div class="flex flex-col items-center border-2 border-p bg-grey-lightest px-4">
                <h2 class="pt-4 pb-1 text-grey-darkest">Offers Controls</h2>
                <div class="py-6 self-start">
                    <a href="/createoffer" class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Create Offer</a>
                </div>
                <div class="flex w-full justify-around py-2 font-bold">
                    <div class="w-1/4">Offer</div>
                    <div class="w-1/4">Updated</div>
                    <div class="w-1/4">Edit</div>
                    <div class="w-1/4">Delete</div>
                </div>
               
                <div class="w-full h-10r overflow-scroll tb">
                        @if($offers)
                        @foreach($offers as $offer)
                    <div class="flex w-full justify-between items-baseline py-1">
                        <div class="w-1/4">{{$offer->title}}</div>
                        <div class="w-1/4">{{$offer->updated_at->diffForHumans()}}</div>
                        <div class="w-1/4"><a href="/offer/{{$offer->id}}/editoffer">Edit</a></div>
                        <div class="w-1/4">
                            <form action="/offer/{{$news->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red hover:bg-grey-lightest hover:border hover:border-red border border-transparent px-1 py-1 rounded text-grey-lightest hover:text-red text-xs outline-none active:outline-none">DELETE</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                
            </div>
        </div>
        <div class="w-full lg:w-1/2 py-2 px-4">
            <div class="flex flex-col items-center border-2 border-p bg-grey-lightest px-4">
                <h2 class="pt-4 pb-1 text-grey-darkest">Recipe Controls</h2>
                <div class="py-6 self-start">
                    <a href="/createrecipe" class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Create Recipe</a>
                </div>
                <div class="flex w-full justify-around py-2 font-bold">
                    <div class="w-1/4">Recipe</div>
                    <div class="w-1/4">Updated</div>
                    <div class="w-1/4">Edit</div>
                    <div class="w-1/4">Delete</div>
                </div>
               
                <div class="w-full h-10r overflow-scroll">
                        @if($recipes)
                        @foreach($recipes as $recipe)
                    <div class="flex w-full justify-between items-baseline py-1">
                        <div class="w-1/4">{{$recipe->title}}</div>
                        @if($recipe->updated_at)
                        <div class="w-1/4">{{$recipe->updated_at->diffForHumans()}}</div>
                        @endif
                        <div class="w-1/4"><a href="/recipe/{{$recipe->id}}/editrecipe">Edit</a></div>
                        <div class="w-1/4">
                            <form action="/recipe/{{$recipe->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red hover:bg-grey-lightest hover:border hover:border-red border border-transparent px-1 py-1 rounded text-grey-lightest hover:text-red text-xs outline-none active:outline-none">DELETE</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="bgi-g1">
    <div class="container mx-auto flex justify-center py-4">       
        <a href="{{route('changepassword')}}" class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Change Password</a>         
    </div>

</div>








@endsection 

