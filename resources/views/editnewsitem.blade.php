@extends('adminmaster')

@section('title')

Edit News Item

@endsection

@section('content')



<div class="form-container">
<form action="/newsitem/{{$newsitem->id}}" method="POST" class="form my-l" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">News Title:</label>
        <input type="text" name="title" value="{{$newsitem->title}}" placeholder="News Title" required>
        </div>

        <div class="form-group">
            <label for="valid">News Headline:</label>
        <input type="text" name="headline" value="{{$newsitem->headline}}" placeholder="News Headline" required>
        </div>

        <div class="form-group">
            <label for="body"> News Text:</label>
        <textarea name="body" id="" cols="30" rows="10" placeholder="News Item Text" required>{{$newsitem->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="img">Upload Image (Optional):</label>
            <input type="file" name="img" id="img">
         </div>

         <div class="form-group">
             <button>Update</button>
         </div>

    </form>
</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js"></script>
<script>
        CKEDITOR.replace('body', {
            toolbarGroups:[{
                'name': 'basicstyles', 
                'groups': ['basicstyles']
            },
            {
                'name': 'clipboard',
                'groups': ['clipboard', 'undo']
            },
            {
                'name': 'paragraph',
                'groups': ['list', 'indent', 'blocks']
            },
            {
                'name': 'styles',
                'groups': ['styles']
            }
            ]
        });
    </script>
@endsection