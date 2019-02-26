@extends('adminmaster')

@section('title')

Edit Career

@endsection

@section('content')

<div class="createcareer-title-container">
    <div class="createcareer-title my-m">
        <h1 class="createcareer-title-item">Edit a  Career Opportunity</h1>
    </div>
</div>

<div class="createcareer-container">
    <form action="/{{$career->id}}" method="POST" class="careerform my-m">
        @csrf
        @method('PUT')
        <div class="careerform-group py-m">
            <label for="title">Position Title:</label>
        <input type="text" name="title" value="{{$career->title}}" placeholder="Position Title"required>
        </div>
        <div class="careerform-group">
            <label for="overview">Position Overview:</label>
        <input type="text" name="overview" value="{{$career->overview}}" placeholder="Position Overview">
        </div>
        <div class="careerform-group">
            <label for="summernote">Job Description:</label>
        <textarea name="details" id="details" cols="30" rows="10" placeholder="Please enter the detail of the job description, responsibilities etc.." required>{{$career->detail}}</textarea>
        </div>

        <div class="careerform-group">
            <button>Update</button>
        </div>

    </form>
</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('details');
    </script>
@endsection