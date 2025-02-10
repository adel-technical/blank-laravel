@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <x-content-header :titlePage="'عرض الدور'" />
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('roles.index') }}" class="text-primary">
                            الصلاحيات
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>اسم الدور :</strong>
                                    <label class="badge badge-success">{{ $role->name }}</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>الصلاحيات:</strong>
                                    @if(!empty($rolePermissions))
                                        <ul>
                                            @foreach($rolePermissions as $v)
                                                <li>{{ $v->name }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
