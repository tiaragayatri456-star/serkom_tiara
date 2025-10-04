@extends('template')

@section('title', 'Login')

@section('content')
<style>
    body {
        background: url('{{ asset("images/pc.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        backdrop-filter: blur(5px);
    }
    .login-card {
        width: 100%;
        max-width: 400px;
        padding: 2rem;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0,0,0,0.25);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        animation: fadeIn 0.7s ease-in-out;
    }
   
    .login-card h3 {
        text-align: center;
        font-weight: bold;
        color: #004c99;
        margin-bottom: 1.5rem;
    }
    .form-control {
        border-radius: 12px;
        border: none;
        padding: 0.75rem 1rem;
        box-shadow: inset 0 2px 6px rgba(0,0,0,0.1);
    }
    .form-label {
        font-weight: 600;
        color: #003366;
    }
    .btn-login {
        background: linear-gradient(135deg, #4da6ff, #0066cc);
        border: none;
        border-radius: 12px;
        color: white;
        padding: 0.75rem;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    .btn-login:hover {
        transform: scale(1.03);
        background: linear-gradient(135deg, #3399ff, #005bb5);
    }
</style>

@if ($errors->has('login'))
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="login-wrapper">
    <div class="login-card">
        <h3><i class="bi bi-mortarboard-fill me-2"></i> SMK YPC Login</h3>
       <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username..." required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password..." required>
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
        </form>
    </div>
</div>
@endsection
