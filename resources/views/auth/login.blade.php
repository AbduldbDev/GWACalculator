@extends('auth.app')
@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ url('/image/login.svg') }}" class="img-fluid" alt="Phone image" height="300px" width="600px">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login </p>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i>
                                Email</label>
                            <input type="email" id="form1Example13"
                                class="form-control form-control-lg py-3 @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email" style="border-radius:25px ;" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i>
                                Password</label>
                            <input type="password" id="form1Example23"
                                class="form-control form-control-lg py-3 @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Password"
                                style="border-radius:25px ;" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" value="Sign in" class="btn  btn-lg my-2 py-3"
                                style="width:100% ; border-radius: 30px; font-weight:600; background-color: #9682b9;">Sign
                                In
                            </button>
                        </div>
                    </form><br>
                    <p align="center">i don't have any account <a href="{{ route('register') }}"
                            style="font-weight:600;text-decoration:none; color: #9682b9;">Register Here</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
