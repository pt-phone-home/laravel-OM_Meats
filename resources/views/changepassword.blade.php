@extends('adminmaster')

@section('title')

Change Password 

@endsection

@section('content')
<div class="bgi-g1 flex justify-center">
    <div class="container mx-auto w-70p">
       @include('inc.messages')
    <form action="{{route('changepassword.post')}}" method="POST">
        @csrf
        <div class="py-4">
                <label for="current_password" class="block py-2">Current Password:</label>
                <input type="password" name="current_password" placeholder="Enter your CURRENT password" class="block h-6 rounded w-60p outline border" required>
        </div>
        <div class="pb-4">
                <label for="new_password" class="block py-2">New Password:</label>
                <input type="password" name="new_password" placeholder="Enter your NEW password" class="block h-6 rounded w-60p outline border" required>
        </div>
        <div class="pb-4">
                <label for="new_password_confirm" class="block py-2">Confirm New Password:</label>
                <input type="password" name="new_password_confirm" placeholder="Enter your NEW password again" class="block h-6 rounded w-60p outline border" required>
        </div>
        <div class="pb-4">
            <button class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline border border-transparent hover:text-p hover:border hover:border-p">Submit</button>
        </div>
    </form>
    </div>

</div>

@endsection

@section('scripts')
@parent
@endsection