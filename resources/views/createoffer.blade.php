@extends('adminmaster')

@section('title')

Add Offer

@endsection

@section('content')



<div class="form-container">
    <form action="/createoffer" method="POST" class="form my-l" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Offer Title:</label>
        <input type="text" name="title" value="{{old('title')}}" placeholder="Offer Title" required>
        </div>

        <div class="form-group">
            <label for="valid">Valid Until:</label>
        <input type="text" name="valid" value="{{old('valid')}}" placeholder="Offer Valid Until..." required>
        </div>

        <div class="form-group">
            <label for="detail">Offer Detail: (suggested max 100 characters)</label>
        <textarea name="detail" id="" cols="30" rows="10" placeholder="Information about offer" required>{{old('detail')}}</textarea>
        </div>
        <div class="form-group">
            <label for="img">Upload Image (Optional):</label>
            <input type="file" name="img" id="img">
         </div>

         <div class="form-group">
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