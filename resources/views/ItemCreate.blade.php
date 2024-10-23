@extends('layouts.app')

@section('content')
<div class="container" style="">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow  ">
              <h1 class=" py-4 card-header ">Add Item Grocery</h1>
                <div class="card-body">
                <form method="POST" action="{{route('store.item')}}">
                    @csrf
                    <div class="row g-3 align-items-center mb-3">
                      <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label">Item Name</label>
                      </div>
                      <div class="col-10">
                        <input type="text" class="form-control  " id="item_name" name="item_name">
                      </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                      <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                      </div>
                      <div class="col-10">
                        <input type="text" class="form-control  " name="price" id="price">
                      </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                      <div class="col-2">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                      </div>
                      <div class="col-10">
                        <textarea class="form-control  " id="description" name="description" rows="3"></textarea>
                      </div>
                    </div>
                      <button class="btn btn-warning btn-block " type="submit">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
