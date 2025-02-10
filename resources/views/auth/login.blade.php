@extends('layouts.master')

@section('css')
    <style>
        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url("{{ asset( 'assets/img/brand2.jpg' ) }}");
            background-size: cover;
            background-position: center center;
        }
    </style>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row no-gutter" style="direction: ltr !important;">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>

            <!-- The content half -->
            <div class="col-md-6 bg-light d-flex align-items-center justify-content-center">
                <div class="login p-5 w-75" style="margin-top: 100px;">
                    <h3 class="mb-4 text-center">تسجيل الدخول</h3>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" value="{{ old('username') }}"
                                class="form-control rounded-pill border-0 shadow-sm px-4 @error('email') is-invalid @enderror"
                                placeholder="البريد الإلكتروني" required>
                            @error('email')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password"
                                class="form-control rounded-pill border-0 shadow-sm px-4 @error('password') is-invalid @enderror"
                                placeholder="كلمة المرور" required>
                            @error('password')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">تذكرني</label>
                        </div>

                        <button type="submit"
                            class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm w-100">تسجيل
                            الدخول</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>



@endsection
