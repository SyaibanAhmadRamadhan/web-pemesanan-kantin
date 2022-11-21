@extends('layout.main')
@section('container')
    <section id="container">
        @include('partials.navbar')
        <!-- auth -->
        <section id="auth">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-9 py-5" style="background-color: #f4f4f4">
                        <div class="row">
                            <div class="col text-center">
                                <h2>Login</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center pt-5">
                            <div class="col-lg-10">
                                <form action="{{ route('login.process') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Ussername</label>
                                        <input type="text" name="username" value="{{ old('username') }}"
                                            class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" value="{{ old('password') }}"
                                            class="form-control" />
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-auth px-5 py-2 mx-2" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- auth Akhir -->
    </section>
    <a href="{{ route('logout') }}">logout</a>
@endsection
