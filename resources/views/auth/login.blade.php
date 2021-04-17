@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7 pt-5">
                <div class="card box">
                    <div class="card-header head-bg text-center"><H1 class="text-white">سامانه </H1>
                        <div class="row justify-content-center pb-3">
                            <img alt="" class="d-inline-block align-middle" src="/images/login/logo.png"
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <h5 class="text-center pb-2">ورود کاربر</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10 col-lg-7">
                                <input id="email" type="email" placeholder="ایمیل خود را وارد نمایید" class=" upf form-control @error('username') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>

                                @error('username')

                                <span class="invalid-feedback" role="alert">

                <strong>{{ $message }}</strong>

            </span>

                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-10 col-lg-7">
                                <input id="password" type="password" placeholder="رمز عبور خود را وارد نمایید" class="upf form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10 col-lg-7 ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('ورود') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
