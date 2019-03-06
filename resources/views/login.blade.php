@extends('adminmaster')

@section('content')
@include('inc.messages')

<div class="form-container">
    <form action="{{route('login.post')}}" method="POST" class="form">
        @csrf
        <h1> Log In</h1>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{old('email')}}" placeholder="Please enter your email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" value="" placeholder="Please enter your password">
        </div>

        <div class="form-group">
            <button type="submit">Login</button>
        </div>

    </form>
</div>

@endsection