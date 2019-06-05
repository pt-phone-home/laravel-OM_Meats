@if(session('mail'))
<div class="">
    <div class="container mx-auto">
    {{session('mail')}}
    </div>  
</div>
@endif

@if($errors->any())
    <div class="container mx-auto">
    @foreach ($errors->all() as $error)
        <div class="messages">
            {{$error}}
        </div>

    @endforeach
</div>
@endif

@if(session('success'))
    <div class="">
        <div class="container mx-auto">
            {{session('success')}}
        </div>
    </div>
@endif
@if(session('failed'))
    <div class="">
        <div class="container mx-auto">
            {{session('failed')}}
        </div>
    </div>
@endif