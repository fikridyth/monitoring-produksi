@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Register New Staff</h1>
    </div>

    <div class="col-lg-4">
        <form method="post" action="/users" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="name" class="col-form-label">Nama:</label>
                <input type="name" class="form-control rounded-top @error('name') is-invalid @enderror" name="name"
                    id="name" placeholder="Input Nama" autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="col-form-label">Username:</label>
                <input type="name" class="form-control rounded-top @error('username') is-invalid @enderror"
                    name="username" id="username" placeholder="Input Username" value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror" name="email"
                    id="email" placeholder="Input Email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="col-form-label">Password:</label>
                <input type="password" class="form-control rounded-top @error('password') is-invalid @enderror"
                    name="password" id="password" placeholder="Input Password" value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/users/" class="btn btn-secondary col-lg-3">Back</a>
            <button type="submit" class="btn btn-primary col-lg-3" style="float: right;">Register</button>
        </form>
    </div>
@endsection
