@extends('adminmaster')

@section('content')
@include('inc.messages')

<div class="bgi-g1 flex justify-center py-6">
    <form action="{{route('login.post')}}" method="POST" class="w-80p">
        @csrf
        <h1 class="text-grey-darkest py-2"> Log In</h1>
        <div class="py-2 pl-2 text-grey-darkest">
            <label for="email" class="px-2 text-lg">Email:</label>
            <input type="email" name="email" value="{{old('email')}}" placeholder="Please enter your email" class="w-30p h-6 outline-none rounded">
        </div>
        <div class="py-2 pl-2 text-grey-darkest">
            <label for="password" class="px-2 text-lg">Password:</label>
            <input type="password" name="password" value="" placeholder="Please enter your password" class="w-30p h-6 outline-none rounded">
        </div>

        <div class="py-4 pl-2">
            <button type="submit" class="bg-p text-grey-lightest rounded px-4 py-2 hover:bg-grey-lightest hover:text-p outline-none ">Login</button>
        </div>

    </form>
</div>

@endsection