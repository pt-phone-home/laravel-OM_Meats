@extends('master')

@section('title')
Contact | O'Mahoney Meats Ltd.
@endsection

@section('content')
<div class="bgi-p">
    <div class="container mx-auto">
        <h1 class="text-center py-10 text-om-white text-4.5xl font-nun uppercase tracking-wide font-light">
            Contact Us
        </h1>  
    </div>
</div>
<div class="bgi-g1">
    <div class="container mx-auto py-12 flex justify-center">

        <div class="">
            <p class="py-4 px-4 text-2xl text-grey-darkest"><i class="fas fa-phone-volume text-p mr-4"></i> Call us Monday to Saturday: 01-8476000</p>
            <div class="px-8 text-grey-darkest">
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Orders: 01 8476000 +1  / orders@ommeats.ie</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Dispatch: 01 8476000 +2</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Accounts: 01 8476000 +3 / madeleine@ommeats.ie</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Shop: 01 8476000 +4</p>
                <p class="py-2 text-xl"><i class="fas fa-ellipsis-h text-p mr-4"></i>Sales: 01 8476000 +5 / michael@ommeats.ie</p>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection