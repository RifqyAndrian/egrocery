@extends('layouts.app')

@section('content')
<div class="container mb-3" style="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg position-absolute border-warning spinner-border-sm" style="width: 500px; height: 500px; left: 120px; border-radius: 50%; border-width:10px;">
                <div class="card-body">
                    <div class="text-center position-absolute" style="top: 170px; right: 140px;">
                       <h1> Success! </h1>
                       <h5> We will contact you 1x24 </h5>
                       <a href="{{ route('home') }}">Click here to "Home"</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
