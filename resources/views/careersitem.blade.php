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

    <div class="careers-title-container bg-g1">
        <div class="careers-title">
            <div class="careers-title-item py-m bg-g1 fs-l fw-b">
                {{$career->title}}
            </div>
        </div>
    </div>
    <div class="careersitem-container bg-g1">
        <div class="careersitem-description my-m">
            <h3 class="careersitem-description-title">Job Description</h3>

            <div class="careersitem-description-output my-l">
                {!!$career->details !!}
            </div>
        </div>

        <a href="/careers" class="btn my-s">Back to Careers</a>

        <a href="/contact" class="admin-create-btn my-m">Contact Us</a>
    </div>
    
@endsection

@section('scripts')

@endsection