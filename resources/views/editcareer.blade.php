@extends('adminmaster')

@section('title')

Edit Career

@endsection

@section('content')


<div class="container mx-auto">
    <form action="/career/{{$career->id}}" method="POST" class="careerform my-m">
        @csrf
        @method('PUT')
        <div class="py-4">
            <label for="title" class="block py-2 ">Position Title:</label>
        <input type="text" name="title" value="{{$career->title}}" placeholder="Position Title" class="block h-6 rounded w-60p outline border"required>
        </div>
        <div class="pb-4">
            <label for="overview" class="block py-2 ">Position Overview:</label>
        <input type="text" name="overview" value="{{$career->overview}}" placeholder="Position Overview" class="block h-6 rounded w-60p outline border" required>
        </div>
        <div class="pb-4">
            <label for="summernote" class="block py-2">Job Description:</label>
        <textarea name="details" id="details" cols="30" rows="10" placeholder="Please enter the detail of the job description, responsibilities etc.." required>{{$career->details}}</textarea>
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
        CKEDITOR.replace('details', {
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