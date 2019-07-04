@extends('layouts.mitronic')

@section('content')
<div class="m-login__signin">
							<div class="m-login__head">
                            <h3 class="m-login__title">
            Sign Up
        </h3>
        <div class="m-login__desc">
            Enter your details to create your account:
        </div>
							</div>
							<form class="m-login__form m-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group m-form__group">
            <input class="form-control m-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                value="{{ old('name') }}" required autofocus type="text" placeholder="name">
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                name="email" value="{{ old('email') }}" required type="email" placeholder="Email" autocomplete="off">

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif

        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                name="password" required type="password" placeholder="Password">

            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif

        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password"
                name="password_confirmation" required>
        </div>
        <div class="row form-group m-form__group m-login__form-sub">
            <div class="col m--align-left">
                <label class="m-checkbox m-checkbox--light">
                    <input type="checkbox" name="agree">
                    I Agree the
                    <a href="#" class="m-link m-link--focus">
                        terms and conditions
                    </a>
                    .
                    <span></span>
                </label>
                <span class="m-form__help"></span>
            </div>
        </div>
        <div class="m-login__form-action">
            <button type="submit" id="m_login_signup_submit"
                class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
                Sign Up
            </button>
            &nbsp;&nbsp;
            <button id="m_login_signup_cancel"
                class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
                Cancel
            </button>
        </div>
    </form>
						</div>
@endsection
