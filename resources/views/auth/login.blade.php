@extends('layouts.client.master')

@section('title', 'Login - ELearn')

@section('content')
<section class="section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h3 class="mb-4 pb-2">We'd love to hear from you</h3>
            </div>

            <div class="col-lg-6 col-12">
                <form action="{{route('login')}}" method="post" class="custom-form contact-form" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            @error('email')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            @error('password')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <label for="floatingInput">Password</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <a href="{{route('register')}}">Create a new account</a>
                        </div>

                        <div class="col-lg-4 col-12 ms-auto">
                            <button type="submit" class="form-control">Login</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                
            </div>

        </div>
    </div>
</section>
@endsection