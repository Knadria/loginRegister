@extends('master')
@section('title','Register Form')
@section('content')
<h2 class="text-center mt-5">Registration Form</h2>
<div class="container mt-5" style="height:800px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <form action="/registerProcess" method="POST" class="was-validated">
                        @csrf 
                        <div class="row g-6">
                            <div class="col-md-8">
                                <label for="name">Name</label> <br>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="major">Major</label> <br>
                                <input type="text" name="major" class="form-control" placeholder="Major" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    
                        <label for="email">Email</label> <br>
                        <input type="email" name="email" class="form-control" placeholder="Contoh@gmail.com" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <br>
                        <label for="phone_number">Phone Number</label> <br>
                        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <br>
                        <br>
                        <label for="password">Password</label> <br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="form-text">Must be at least 8 characters long</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <br>
                        <div class="mt-3">
                            <button type="submit" value="register" class="btn btn-primary btn-register w-100">Submit</button>
                        </div>
                        
                    </form>
                </div>

                <div class="mb-3 text-center">
                    Already have an account?
                    <a href="/loginForm">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection