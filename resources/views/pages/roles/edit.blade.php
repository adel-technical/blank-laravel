@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <x-content-header :titlePage="'تعديل الدور'"/>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('roles.index') }}" class="text-primary">
                            الصلاحيات
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>اسم الدور :</strong>
                                        <input type="text" name="name" value="{{ $role->name }}" class="form-control" placeholder="الاسم">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>الصلاحيات:</strong>
                                        <br>
                                        @foreach($permission as $value)
                                            <label>
                                                <input type="checkbox" name="permission[]" value="{{ $value->id }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                                {{ $value->name }}
                                            </label>
                                            <br>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">حفظ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
