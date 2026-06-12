@extends('layout')
@section('content')
<?php
$hero_img = [
  "img1" => "images/Bayon.webp",
];
?>
<style>
    body {
        font-family: "Inter", sans-serif;
        background-color: #f3f4f6;
        margin: 0;
        padding: 0;
    }
    .main-center {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        padding: 2rem;
        box-sizing: border-box;
    }
    .form-container {
        margin: 0 auto;
        max-width: 570px;
        width: 100%;
        background: white;
        padding: 2.5rem;
        border-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1);
    }
    .form-title {
        font-size: 1.875rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.5rem;
        text-align: center;
        text-transform: none;
        font-family: inherit;
    }
    .form-desc {
        color: #6b7280;
        margin-bottom: 2rem;
        font-size: 0.875rem;
        text-align: center;
        line-height: 1.5;
    }
    .form-label {
        display: block !important;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        font-weight: 600;
        color: #374151;
    }
    .form-input {
        width: 100% !important;
        padding: 0.875rem 1.25rem !important;
        border: 1px solid #d1d5db !important;
        border-radius: 0.5rem !important;
        background: #ffffff !important;
        font-weight: 500;
        font-size: 1rem !important;
        color: #111827 !important;
        outline: none;
        box-sizing: border-box !important;
        transition: border-color 0.2s, box-shadow 0.2s;
        margin-bottom: 1.25rem;
        font-family: inherit;
    }
    .form-input::placeholder { color: #9ca3af; }
    .form-input:focus {
        border-color: rgb(59, 121, 201) !important;
        box-shadow: 0 0 0 3px rgba(106,100,241,0.2) !important;
    }
    .form-btn {
        text-align: center;
        width: 100%;
        font-size: 1rem;
        border-radius: 0.5rem;
        padding: 0.875rem 1.5rem;
        border: none;
        font-weight: 600;
        background-color: rgb(59, 121, 201);
        color: white;
        cursor: pointer;
        margin-top: 1rem;
        transition: background-color 0.2s, box-shadow 0.2s;
        font-family: inherit;
    }
    .form-btn:hover {
        background-color: rgb(59, 121, 201);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .form-errors {
        background: #fef2f2;
        border: 1px solid #fca5a5;
        border-radius: 0.5rem;
        padding: 10px 14px;
        margin-bottom: 1.25rem;
        color: #b91c1c;
        font-size: 0.8rem;
    }
    .form-switch {
        margin-top: 1.25rem;
        text-align: center;
        color: #6b7280;
        font-size: 0.95rem;
    }
    .form-switch a {
        color: rgb(59, 121, 201);
        font-weight: 700;
        text-decoration: none;
    }
    .form-switch a:hover {
        text-decoration: underline;
    }
    @media (max-width: 700px) {
        .main-center { padding: 1rem; }
        .form-title { font-size: 1.5rem; }
        .form-container { padding: 1.5rem; }
    }
</style>

<main>
  <article>
    <section class="hero" id="home" style="background-image: url('{{ asset($hero_img['img1']) }}'); min-height: 350px;">
      <div class="container">
        <h2 class="h1 hero-title">Login</h2>
      </div>
    </section>

    <div class="main-center">
      @auth
        <div class="form-container" style="text-align:center;">
          <h2 class="form-title">You are already logged in</h2>
          <p class="form-desc">Use your profile or log out to switch accounts.</p>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="form-btn">Logout</button>
          </form>
        </div>
      @else
        <div class="form-container">
          <h2 class="form-title">Login</h2>
          <p class="form-desc">Enter your username and password to continue.</p>

          @if($errors->any())
            <div class="form-errors">
              @foreach($errors->all() as $error)
                <div>• {{ $error }}</div>
              @endforeach
            </div>
          @endif

          <form action="/login" method="POST">
            @csrf
            <label class="form-label">Username *</label>
            <input type="text" name="loginname" class="form-input" placeholder="Enter your username" value="{{ old('loginname') }}" required>

            <label class="form-label">Password *</label>
            <input type="password" name="loginpassword" class="form-input" placeholder="Enter your password" required>

            <button type="submit" class="form-btn">Login</button>
          </form>

          <p class="form-switch">Don't have an account? <a href="/signup">Sign up here</a></p>
        </div>
      @endauth
    </div>
  </article>
</main>
@endsection
