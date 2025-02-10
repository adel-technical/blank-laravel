@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <x-content-header :titlePage="'تعديل مستخدم'" />
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.index') }}" class="text-primary">
                        الرجوع
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST" role="form">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="أدخل الاسم" value="{{ old('name', $user->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="أدخل البريد الإلكتروني" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">كلمة المرور</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="اتركه فارغًا إذا لم ترغب في تغييره">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="confirm-password">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                                placeholder="اتركه فارغًا إذا لم ترغب في تغييره">
                            @error('confirm-password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="roles">الأدوار</label>
                            <select class="form-control" id="roles" name="roles[]" multiple>
                                @foreach ($roles as $role)
                                    <option value="{{ $role }}" {{ in_array($role, $userRole) ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                            @error('roles')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">تحديث</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
