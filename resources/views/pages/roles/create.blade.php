@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <x-content-header :titlePage="'انشاء دور'"/>
            <section class="content">             
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('roles.index') }}" class="text-primary">
                        الصلاحيات
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('roles.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>اسم الدور :</strong>
                                        <input type="text" name="name" placeholder="الاسم" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>الصلاحيات:</strong>
                                        <br>
                                        @foreach ($permission as $value)
                                            <label>
                                                <input type="checkbox" name="permission[]" value="{{ $value->id }}">
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