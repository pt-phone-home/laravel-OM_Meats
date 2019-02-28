@extends('adminmaster')

@section('title')

O'Mahony Meats Admin Panel 

@endsection 

@section('content')
@include('inc.messages')

<div class="admin-container">
    <div class="admin-news my-m">
        <h2 class="admin-news-heading my-m">News Controls</h2>
        <a href="/createnewsitem">Create News Artilce</a>

        <table>
            <tr>
                <td>News Item</td>
                <td>Updated At</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>

            @if($newsitem)
            @foreach($newsitem as $news)
            <tr>
        <td>{{$news->title}}</td>
        <td>{{$news->updated_at}}</td>
        <td><a href="/newsitem/{{$news->id}}/editnewsitem">Edit</a></td>
        <td><a href="/newsitem/{{$news->id}}/editnewsitem">Delete</a></td>
    </tr>

            @endforeach

            @endif
        </table>
    </div>

    <div class="admin-careers my-m">
        <h2 class="admin-careers-heading my-m">Career Controls</h2>
        <a href="/createcareer">Create Career </a>

        <table>
            <tr>
                <td>Career</td>
                <td>Updated At</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>

            @if($career)
            @foreach($career as $car)
            <tr>
        <td>{{$car->title}}</td>
        <td>{{$car->updated_at}}</td>
        <td><a href="/career/{{$car->id}}/editcareer">Edit</a></td>
        <td><a href="/career/{{$car->id}}/editcareer">Edit</a></td>
    </tr>
        

            @endforeach

            @endif
        </table>
    </div>
    <div class="admin-offers my-m">
        <h2 class="admin-offers-heading my-m">Offers Controls</h2>
        <a href="/createoffer">Create Offer </a>

        <table>
            <tr>
                <td>Offer</td>
                <td>Updated At</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>

            @if($offers)
            @foreach($offers as $offer)
            <tr>
        <td>{{$offer->title}}</td>
        <td>{{$offer->updated_at}}</td>
        <td><a href="/offer/{{$offer->id}}/editoffer">Edit</a></td>
        <td><a href="/offer/{{$offer->id}}/editoffer">Edit</a></td>
    </tr>
        

            @endforeach

            @endif
        </table>
    </div>
    <div class="admin-recipes my-m">
        <h2 class="admin-offers-heading my-m">Recipe Controls</h2>
        <a href="/createrecipe">Create Recipe </a>

        <table>
            <tr>
                <td>Recipe</td>
                <td>Updated At</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>

            @if($recipes)
            @foreach($recipes as $recipe)
            <tr>
        <td>{{$recipe->title}}</td>
        <td>{{$recipe->updated_at}}</td>
        <td><a href="/recipe/{{$recipe->id}}/editrecipe">Edit</a></td>
        <td><a href="/recipe/{{$recipe->id}}/editrecipe">Edit</a></td>
    </tr>
        

            @endforeach

            @endif
        </table>
    </div>
</div>


@endsection 

