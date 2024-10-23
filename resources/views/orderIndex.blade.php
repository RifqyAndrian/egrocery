@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if (session('status'))
          <div class="alert alert-success">
          {{ session('status') }}
          </div>
          @endif

          <div class="card border-0">
              <h1 class="py-4 shadow card-header border-0">Cart</h1>
                <table class="table border border-0 table-striped">
                    <thead class="table-warning">
                      <tr>
                        <th scope="col" style="">Item</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $data)
                      <tr>
                          <td style="">{{ $data->item_name }}</td>
                          <td style="">@currency($data->price)</td>
                          <td style=""><a href="{{ route('destroy.order',$data->id) }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Delete</a></td>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
                <div class="row justify-content-end">
                    <div class="col-3"><b>TOTAL : @currency($total)</b></div>
                    <div class="col-2">
                            <a href="{{ route('submit.order') }}" class="btn btn-warning rounded-pill" style="">Submit</a>
                    </div>

                </div>

        </div>
    </div>
</div>
@endsection
