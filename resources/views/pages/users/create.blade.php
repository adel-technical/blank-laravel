@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <x-content-header :titlePage="'
                            اضافة مستخدم جديد
                            '" />
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.index') }}" class="text-primary">
                        الرجوع
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST" role="form">
                        @csrf

                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="أدخل الاسم" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="أدخل البريد الإلكتروني" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">كلمة المرور</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="كلمة المرور">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="confirm-password">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                                placeholder="تأكيد كلمة المرور">
                            @error('confirm-password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="roles">الأدوار</label>
                            <select class="form-control" id="roles" name="roles[]" multiple>
                                <option value="">اختر الأدوار</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role }}">{{ $role }}</option>
                                @endforeach
                            </select>
                            @error('roles')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
