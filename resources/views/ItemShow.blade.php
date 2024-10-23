@extends('layouts.app')

@section('content')
<div class="container" style="">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
          @if (session('status'))
          <div class="alert alert-success">
          {{ session('status') }}
          </div>
          @endif
          <div class="p-2 text-left">
            @if(Auth::check())
                @if(Auth::user()->name && Auth::user()->role_name ==  'admin')
            <a href="{{ route('home') }}" class="btn btn-warning btn-sm ">Back</a>
                @endif
            @endif
            </div>
            <div class="card border-primary shadow">
                <h1 class="text-center py-4 card-header bg-primary">Detail E-Book</h1>
                <table class="table">
                    <tbody>
                      <tr>
                        <td scope="col" class="table-info">Title</td><td> {{ $item->title }}</td>
                      </tr>
                      <tr>
                          <td scope="col" class="table-info">Author</td><td>{{ $item->author }}</td>
                      </tr>
                    <tr>
                        <td scope="col" class="table-info">Description</td><td><p>{{ $item->description }}</p> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-2 text-right">
                <form method="POST" action="{{route('store.order')}}">
                    @csrf
                    <input type="text" hidden name="account_id" value="{{ Auth::user()->id }}">
                    <input type="text" hidden name="item_id" value="{{ $item->id }}">
                    <button type="submit" class="btn btn-warning rounded-pill">Rent</button>
                </form>
            </div>
        </div> --}}
        <div class="col-12">
            <div class="card mb-3 border-0">
                <div class="card-header border-0">
                    <h5 class="card-title"><b>{{ $item->item_name }}</b></h5>
                </div>
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('img/vegan.png') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>@currency($item->price)</b></h5>
                      <p class="card-text">{{ $item->description }}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-2 text-right">
                <form method="POST" action="{{route('store.order')}}">
                    @csrf
                    <input type="text" hidden name="account_id" value="{{ Auth::user()->id }}">
                    <input type="text" hidden name="item_id" value="{{ $item->id }}">
                    <button type="submit" class="btn btn-warning rounded-pill">Buy</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
