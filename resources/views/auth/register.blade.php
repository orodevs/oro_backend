@extends('auth.layout.master')
@section('title')
    @lang('auth.registration.title') | {{ config('app.name') }}
@endsection
@section('content')
    <div class="row justify-content-center my-auto">
        <div class="col-md-12 col-lg-8 col-xl-5 text-center">
            @include('auth.layout.header')
            <div class="mb-4">
                <h5 class="">@lang('auth.register_account')</h5>
                <p>
                    @lang('auth.registration.subtitle',["app_name"=> config('app.name') ])</p>
            </div>
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="form-floating form-floating-custom mb-3 text-start">
                            <input type="text"
                                   name="name"
                                   id="input-name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}"
                                   placeholder="@lang('auth.full_name')">
                            <label for="input-name">@lang('auth.full_name')</label>
                            <div class="form-floating-icon @error('name') invalid @enderror">
                                <i class="uil uil-user-circle"></i>
                            </div>

                            @error('name')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
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
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
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
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="form-floating form-floating-custom mb-3 text-start">
                            <input type="password" class="form-control "
                                   id="floatingcPassword" name="password_confirmation"
                                   placeholder="@lang('auth.confirm_password')">

                            <label for="floatingcPassword">@lang('auth.confirm_password')</label>
                            <div class="form-floating-icon @error('confirm_password') invalid @enderror">
                                <i class="uil uil-padlock"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-start">
                    <p>@lang('auth.by_registering_you_agree_to_the',['app_name'=>config('app.name') ]) <a href="#"
                                                                                                          class="text-decoration-underline">@lang('auth.terms_of_use')</a>
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="mt-3">
                            <button class="btn btn-info w-100" type="submit">@lang('auth.register')</button>
                        </div>
                    </div>
                </div>

            </form><!-- end form -->

            <div class="mt-5 ">

                <p> @lang('auth.have_membership') <a href="{{ route('login') }}"
                                                     class="fw-medium text-decoration-underline"> @lang('auth.sign_in') </a>
                </p>
            </div>
        </div>
    </div>
@endsection
