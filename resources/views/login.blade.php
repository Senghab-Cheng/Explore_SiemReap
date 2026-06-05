@extends('layout')
@section('content')
<main class="container">
    <div class="row justify-content-center mt-5">
        @auth
            <h2>You are already logged in!</h2>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger">Logout</button>
            </form>
        @else
            <div class="col-md-6">
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                    <h4>LOGIN</h4>
                    <p>Log in to your account!</p>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf
                        <input type="text" name="loginname" class="mt-2 form-control" placeholder="Username" value="{{ old('loginname') }}">
                        <input type="password" name="loginpassword" class="mt-2 form-control" placeholder="Password">
                        <button type="submit" class="btn btn-primary my-2">LOGIN</button>
                    </form>

                    <p class="mt-3">Don't have an account? <a href="/signup">Sign up here</a></p>
                </div>
            </div>
        @endauth
    </div>
</main>
@endsection