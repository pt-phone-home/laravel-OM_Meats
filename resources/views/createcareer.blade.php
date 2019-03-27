@extends('adminmaster')

@section('title')

Add Career

@endsection

@section('content')

<div class="createcareer-title-container">
    <div class="createcareer-title my-m">
        <h1 class="createcareer-title-item">Add a new Career Opportunity</h1>
    </div>
</div>

<div class="createcareer-container">
    <form action="/createcareer" method="POST"  enctype="multipart/form-data" class="careerform my-m">
        @csrf
        <div class="careerform-group py-m">
            <label for="title">Position Title:</label>
        <input type="text" name="title" value="{{old('title')}}" placeholder="Position Title"required>
        </div>
        <div class="careerform-group">
            <label for="overview">Position Overview:</label>
        <input type="text" name="overview" value="{{old('overview')}}" placeholder="Position Overview">
        </div>
        <div class="careerform-group">
            <label for="summernote">Job Description:</label>
        <textarea name="details" id="details" cols="30" rows="10" placeholder="Please enter the detail of the job description, responsibilities etc.." required>{{old('details')}}</textarea>
        </div>

        <div class="careerform-group">
            <button>Save</button>
        </div>

    </form>
</div>

@endsection

@section('scripts')
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