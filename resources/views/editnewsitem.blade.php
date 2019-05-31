@extends('adminmaster')

@section('title')

Edit News Item

@endsection

@section('content')



<div class="container mx-auto">
<form action="/newsitem/{{$newsitem->id}}" method="POST" class="form my-l" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="py-4">
            <label for="title" class="block py-2 ">News Title:</label>
        <input type="text" name="title" value="{{$newsitem->title}}" placeholder="News Title" class="block h-6 rounded w-60p outline border"  required>
        </div>

        <div class="pb-4">
            <label for="valid" class="block py-2">News Headline:</label>
        <input type="text" name="headline" value="{{$newsitem->headline}}" placeholder="News Headline" class="block h-6 rounded w-60p outline border" required>
        </div>

        <div class="pb-4">
            <label for="body" class="block py-2"> News Text:</label>
        <textarea name="body" id="" cols="30" rows="10" placeholder="News Item Text" required>{{$newsitem->body}}</textarea>
        </div>
        <div class="pb-4">
            <label for="img" class="block py-2">Upload Image (Optional):</label>
            <input type="file" name="img" id="img" class="rounded">
         </div>

         <div class="pb-4">
             <button class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Update</button>
         </div>

    </form>
</div>

@endsection

@section('scripts')
@parent
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