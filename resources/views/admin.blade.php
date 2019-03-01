@extends('adminmaster')

@section('title')

O'Mahony Meats Admin Panel 

@endsection 

@section('content')
@include('inc.messages')

<div class="admin-container">
    <div class="admin-news my-m">
        <h2 class="admin-news-heading my-m">News Controls</h2>
        <a href="/createnewsitem" class="admin-create-btn">Create News Artilce</a>

        <table class="my-m">
            <thead>
                <td>News Item</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </thead>

            @if($newsitem)
            @foreach($newsitem as $news)
            <tbody>
            <tr>
        <td>{{$news->title}}</td>
        <td>{{$news->updated_at->diffForHumans()}}</td>
        <td><a href="/newsitem/{{$news->id}}/editnewsitem">Edit</a></td>
        <td>
        <form action="/newsitem/{{$news->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
        @csrf
        @method('DELETE')
        <button class="admin-delete-btn">DELETE</button>
    </tbody>
        
        </form>
        </td>
        {{-- <td><a href="/newsitem/{{$news->id}}/editnewsitem">Delete</a></td> --}}
    </tr>

            @endforeach

            @endif
        </table>
    </div>

    <div class="admin-careers my-m">
        <h2 class="admin-careers-heading my-m">Career Controls</h2>
        <a href="/createcareer" class="admin-create-btn">Create Career </a>

        <table class="my-m">
            <thead>
                <td>Career</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </thead>

            @if($career)
            @foreach($career as $car)
            <tr>
        <td>{{$car->title}}</td>
        @if($car->updated_at)
        <td>{{$car->updated_at->diffForHumans()}}</td>
        @endif
        <td><a href="/career/{{$car->id}}/editcareer">Edit</a></td>
            <td>
                    <form action="/career/{{$car->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                        @csrf
                        @method('DELETE')
                        <button class="admin-delete-btn">DELETE</button>
                    </form>
            </td>
        {{-- <td><a href="/career/{{$car->id}}" onsubmit="return confirm('Are you sure you want to delete this article? This cannot be undone!')">Delete</a></td> --}}
    </tr>
        

            @endforeach

            @endif
        </table>
    </div>
    <div class="admin-offers my-m">
        <h2 class="admin-offers-heading my-m">Offers Controls</h2>
        <a href="/createoffer" class="admin-create-btn">Create Offer </a>

        <table class="my-m">
            <thead>
                <td>Offer</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </thead>

            @if($offers)
            @foreach($offers as $offer)
            <tr>
        <td>{{$offer->title}}</td>
        <td>{{$offer->updated_at->diffForHumans()}}</td>
        <td><a href="/offer/{{$offer->id}}/editoffer">Edit</a></td>
        <td>
                <form action="/offer/{{$offer->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                    @csrf
                    @method('DELETE')
                    <button class="admin-delete-btn">DELETE</button>
                </form>
        </td>
        {{-- <td><a href="/offer/{{$offer->id}}/editoffer">Edit</a></td> --}}
    </tr>
        

            @endforeach

            @endif
        </table>
    </div>
    <div class="admin-recipes my-m">
        <h2 class="admin-offers-heading my-m">Recipe Controls</h2>
        <a href="/createrecipe" class="admin-create-btn">Create Recipe </a>

        <table class="my-m">
            <thead>
                <td>Recipe</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </thead>

            @if($recipes)
            @foreach($recipes as $recipe)
            <tr>
        <td>{{$recipe->title}}</td>
        <td>{{$recipe->updated_at->diffForHumans()}}</td>
        <td><a href="/recipe/{{$recipe->id}}/editrecipe">Edit</a></td>
        <td>
                <form action="/recipe/{{$recipe->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                    @csrf
                    @method('DELETE')
                    <button class="admin-delete-btn">DELETE</button>
                </form>
        </td>
        
    </tr>
        

            @endforeach

            @endif
        </table>
    </div>
</div>


@endsection 

