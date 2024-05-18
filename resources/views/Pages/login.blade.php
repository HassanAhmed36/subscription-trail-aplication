@extends('app')
@section('section')
    <div class="col-6 mx-auto">
        <form action="{{ route('submit.login') }}" method="post">
            @csrf
            <div class="row mt-5 pt-5">
                <h3 class="mb-5 fw-bold">Login</h3>
                <div class="col-12 mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="Enter your email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Enter your password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <span>Dont have an account? <a href="{{ route('register') }}">Register</a></span>
                </div>
                <div class="col-12 mb-3">
                    <button class="btn btn-dark rounded-4" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection
