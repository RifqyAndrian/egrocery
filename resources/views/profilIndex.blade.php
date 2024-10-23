@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="@if (empty($data->photo))
                    {{url('img/default-image.png')}}
                    @else
                    {{url('')}}/img/thumbnail/{{$data->photo}}
                    @endif" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                        <form method="POST" action="{{ route('update.profil',$data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="text" name="role_name" value="{{ $data->role_name }}" hidden id="">
                            <div class="form-group row" >
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left">{{ __('First Name') }}</label>
                                <div class="col-md-10">
                                    <input id="name" type="text" class="border-primary  form-control @error('name') is-invalid @enderror" name="first_name" value="{{ $data->first_name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left">{{ __('Middle Name') }}</label>
                                <div class="col-md-10">
                                    <input id="name" type="text" class="border-primary  form-control @error('name') is-invalid @enderror" name="middle_name" value="{{ $data->middle_name }}" autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left">{{ __('Last Name') }}</label>
                                <div class="col-md-10">
                                    <input id="name" type="text" class="border-primary  form-control @error('name') is-invalid @enderror" name="last_name" value="{{ $data->last_name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="name" class="col-md-2 col-form-label ctext-md-left">{{ __('Role') }}</label>
                                <div class="col-md-10">
                                   <input type="text" class="form-control border-primary " value="{{ $data->role_name }}" readonly>
                                    </select>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="gender" class="col-md-2 col-form-label ctext-md-left">Gender</label>
                                <div class="col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male" id="male"   {{ $data->gender == 'male' ? 'checked' : '' }}>
                                    <label style="" class="form-check-label" for="male">
                                      Male
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female" id="female" {{ $data->gender == 'female' ? 'checked' : '' }}>
                                    <label style="" class="form-check-label" for="female">
                                      Female
                                    </label>
                                  </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style="" for="email" class="col-md-2 col-form-label ctext-md-left">{{ __('E-Mail') }}</label>

                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control border-primary  @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" for="password-confirm" class="col-md-2 col-form-label ctext-md-left">{{ __('Password') }}</label>

                                <div class="col-md-10">
                                    <input id="password-confirm" type="password" class="form-control border-primary " name="password" autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="" class="col-md-2 col-form-label ctext-md-left">Photo</label>
                                <div class="mb-3 col-md-10">
                                <input type="file" class="form-control-file" name="photo" id="" placeholder=""
                                       aria-describedby="fileHelpId">
                            </div>
                            </div>
                                <div class="col-md-12">
                                    <button style="" type="submit" class="btn btn-block btn-warning ">
                                        {{ __('Update Profile') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

        </div>
    </div>
</div>
@endsection
