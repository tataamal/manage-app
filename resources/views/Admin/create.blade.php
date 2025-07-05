@extends('layout')
@section('content')
    <div class="bg-light mt-lg-5 d-flex align-items-center justify-content-center">
    <div class="card shadow-lg w-100" style="max-width: 480px;">
        <div class="card-body">
            <div class="text-center">
                <h1 class="card-title h3">Create Account</h1>
                <p class="card-text text-muted">Sign in below to access your account</p>
            </div>
            <div class="mt-4">
                <form action="">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label text-muted">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-muted">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark btn-lg">Register</button>
                    </div>
                    <p class="text-center text-muted mt-4">Don't have an account yet?
                        <a href="#!" class="text-decoration-none">Sign up</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>        
    </div>

    

