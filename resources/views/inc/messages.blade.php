@if(session('mail'))
<div class="messages-container">
    <div class="messages">
    {{session('mail')}}
    </div>  
</div>
@endif

@if($errors->any())
    <div class="messages-container">
    @foreach ($errors->all() as $error)
        <div class="messages">
            {{$error}}
        </div>

    @endforeach
</div>
@endif

@if(session('success'))
    <div class="messages-container">
        <div class="messages">
            {{session('success')}}
        </div>
    </div>
@endif
@if(session('failed'))
    <div class="messages-container">
        <div class="messages">
            {{session('failed')}}
        </div>
    </div>
@endif