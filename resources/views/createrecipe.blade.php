@extends('adminmaster')

@section('title')

Add A Recipe

@endsection

@section('content')


<div class="container mx-auto">
    <form action="/createrecipe" method="POST" class="" enctype="multipart/form-data">
        @csrf
        <div class="py-4">
            <label for="title" class="block py-2">Recipe Title:</label>
        <input type="text" name="title" value="{{old('title')}}" placeholder="Recipe Title" class="block h-6 rounded w-60p outline border" required>
        </div>
        
        <div class="pb-4">
            <label for="summernote" class="block py-2">Recipe Detail:</label>
        <textarea name="detail" id="detail" cols="30" rows="10" placeholder="Please enter the detail of the job description, responsibilities etc.." class="block h-6 rounded w-60p outline border" required>{{old('detail')}}</textarea>
        </div>
        <div class="pb-4">
            <label for="img" class="block py-2">Upload Image (Optional):</label>
            <input type="file" name="img" id="img" class="rounded">
         </div>

        <div class="pb-4">
            <button class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Save</button>
        </div>

    </form>
</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js"></script>
<script>
        CKEDITOR.replace('detail', {
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