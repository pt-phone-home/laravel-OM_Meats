@extends('adminmaster')

@section('title')

Add A Recipe

@endsection

@section('content')

<div class="createcareer-title-container">
    <div class="createcareer-title my-m">
        <h1 class="createcareer-title-item">Add a new Recipe</h1>
    </div>
</div>

<div class="createcareer-container">
    <form action="/createrecipe" method="POST" class="careerform my-m" enctype="multipart/form-data">
        @csrf
        <div class="careerform-group py-m">
            <label for="title">Recipe Title:</label>
        <input type="text" name="title" value="{{old('title')}}" placeholder="Recipe Title"required>
        </div>
        
        <div class="careerform-group">
            <label for="summernote">Recipe Detail:</label>
        <textarea name="detail" id="detail" cols="30" rows="10" placeholder="Please enter the detail of the job description, responsibilities etc.." required>{{old('detail')}}</textarea>
        </div>
        <div class="form-group">
            <label for="img">Upload Image (Optional):</label>
            <input type="file" name="img" id="img">
         </div>

        <div class="careerform-group">
            <button>Save</button>
        </div>

    </form>
</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('detail');
    </script>
@endsection