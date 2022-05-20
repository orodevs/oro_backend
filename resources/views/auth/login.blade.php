@extends('auth.layout.master')
@section('title')
    @lang('auth.login.title') | {{ config('app.name') }}
@endsection
@section('content')
    <div class="row justify-content-center my-auto">
        <div class="col-md-11 col-lg-6 col-xl-3 text-center">
            @include('auth.layout.header')
            <div class="mb-4">
                <h5 class="">@lang('auth.Welcome_Back')</h5>
                <p>@lang('auth.login.subtitle',['app_name'=>config('app.name')])</p>
            </div>
            <form method="post" action="{{ url('/login') }}">
                @csrf
                <div class="form-floating form-floating-custom mb-3 text-start">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}"
                           placeholder="@lang('auth.email')"
                           name="email"
                           id="input-email">
                    <label for="input-email">@lang('auth.email')</label>
                    <div class="form-floating-icon @error('email') invalid @enderror">
                        <i class="uil uil-envelope-alt"></i>
                    </div>
                    @error('email')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="form-floating form-floating-custom mb-3 text-start">
                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                           id="floatingPassword" name="password"
                           placeholder="@lang('auth.password')">

                    <label for="floatingPassword">@lang('auth.password')</label>
                    <div class="form-floating-icon @error('password') invalid @enderror">
                        <i class="uil uil-padlock"></i>
                    </div>

                    @error('password')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <button class="btn btn-info w-100" type="submit">@lang('auth.sign_in')</button>
                </div>
                <div class="mt-4">
                    <a href="{{ route('password.request') }}"
                       class="text-muted text-decoration-underline">@lang('auth.login.forgot_password')</a>
                </div>
            </form><!-- end form -->

            <div class="mt-5 ">
                <p> @lang('auth.login.don\'t_have_an_account_?') <a href="{{ route('register') }}"
                                                                    class="fw-medium text-decoration-underline"> @lang('auth.login.register_membership') </a>
                </p>
            </div>
        </div>
    </div>
@endsection
