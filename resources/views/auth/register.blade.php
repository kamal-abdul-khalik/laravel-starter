@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">

            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password" class="d-block">Password</label>
                        <input id="password" type="password"
                            class="form-control pwstrength @error('password') is-invalid @enderror"
                            data-indicator="pwindicator" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="password_confirmation" class="d-block">Konfirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>

        </div>

    </div>
    <div class="mt-5 text-muted text-center">
        Do you have an account? <a href="/login">Login</a>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
