@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-4 p-4 p-md-5 ">
                <div class="card-body">
                    <h2 class="text-center mb-5 fw-bold text-primary">Register</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label fw-medium text-dark">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                placeholder="Enter your name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-medium text-dark">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                placeholder="Enter your email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-medium text-dark">Password</label>
                            <input type="password" name="password" id="password" required
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                placeholder="Create a password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-medium text-dark">Confirm
                                Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                class="form-control form-control-lg" placeholder="Confirm your password">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-medium">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
