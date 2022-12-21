@extends('layouts.auth')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <img src="img/logo.jpg" alt="logo.jpg" style="display:block; margin:auto;"><br>
                <form action="/" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="username" class="form-control rounded-top @error('username') is-invalid @enderror"
                            name="username" id="username" placeholder="Username" autofocus value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
                </form>
                <p class="mt-3 text-muted">&copy; Beta</p>
            </main>
        </div>
    </div>
@endsection
