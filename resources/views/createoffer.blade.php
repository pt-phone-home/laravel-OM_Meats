@extends('adminmaster')

@section('title')

Add Offer

@endsection

@section('content')
<div class="container mx-auto">
    <form action="/createoffer" method="POST" class="form my-l" enctype="multipart/form-data">
        @csrf

        <div class="py-4">
            <label for="title" class="block py-2 ">Offer Title:</label>
        <input type="text" name="title" value="{{old('title')}}" placeholder="Offer Title" class="block h-6 rounded w-60p outline border" required>
        </div>

        <div class="pb-4">
            <label for="valid" class="block py-2 ">Valid Until:</label>
        <input type="text" name="valid" value="{{old('valid')}}" placeholder="Offer Valid Until..." class="block h-6 rounded w-60p outline border" required>
        </div>

        <div class="pb-4">
            <label for="detail" class="block py-2 ">Offer Detail: (suggested max 100 characters)</label>
        <textarea name="detail" id="" cols="30" rows="10" placeholder="Information about offer" required>{{old('detail')}}</textarea>
        </div>
        <div class="pb-4">
            <label for="img" class="block py-2 ">Upload Image (Optional):</label>
            <input type="file" name="img" id="img" class="rounded">
         </div>

         <div class="pb-4">
             <button class="bg-p hover:bg-grey-lightest rounded py-2 px-4 text-om-white no-underline hover:text-p hover:border hover:border-p">Save</button>
         </div>

    </form>
</div>

@endsection

@section('scripts')
@parent
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