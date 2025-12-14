@extends('master')
@section('title','Login Form')
@section('content')
<h2 class="text-center mt-5">Login</h2>
<div class="container mt-5" style="height:500px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <form action="/loginProcess" method="POST" class="was-validated">
                        @csrf 
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Contoh@gmail.com" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <br>
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <br>
                        <input type="checkbox" name="remember_token" />Remember me
                        <div class="mt-3">
                            <button type="submit" value="login" class="btn btn-primary btn-register w-100">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="mb-3 text-center">
                    Don't have an account?
                    <a href="/registerForm">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection