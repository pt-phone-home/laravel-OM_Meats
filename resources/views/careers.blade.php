@extends('master')

@section('title')
Careers | O'Mahoney Meats Ltd.
@endsection

@section('content')
    <div class="careers-header-container bg-p">
        <div class="careers-header my-m">
            <h1 class="careers-header-heading my-m c-g1 fs-xl">
                Work with O'Mahoney Meats
            </h1>
        </div>
    </div>

    <div class="careers-title-container bg-g1 pt-l">
        <div class="careers-title">
            <div class="careers-title-item py-s bg-g1 fs-l fw-b">
                Current Career Opportunties
            </div>
        </div>
    </div>
    <div class="careers-container bg-g1">

       
        <div class="careers py-m">
                @if($careers)
                @foreach($careers as $career)
            <div class="careers-item my-m">
                <h3 class="careers-item-heading fs-m"> {{$career->title}}</h3>

                <div class="careers-item-info">
                   <h5 class="careers-item-info-text">{{$career->overview}}</h5> 
                <a href="/careersitem/{{$career->id}}" class="careers-item-info-btn px-s py-s">More</a>
                </div>

            </div>
            @endforeach
            @endif
            {{-- <div class="careers-item my-m">
                <h3 class="careers-item-heading fs-m"> Accounts Assistant</h3>

                <h5 class="careers-item-info">Brief Details</h5>

            </div>
            <div class="careers-item my-m">
                <h3 class="careers-item-heading fs-m"> Sales Executive</h3>

                <h5 class="careers-item-info">Brief Details</h5>

            </div>
            <div class="careers-item my-m">
                <h3 class="careers-item-heading fs-m"> Accounts Assistant</h3>

                <h5 class="careers-item-info">Brief Details</h5>

            </div> --}}
        </div>
    </div>
    
@endsection

@section('scripts')

@endsection