@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <x-content-header :titlePage="'إدارة الأدوار'" />
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary">إضافة دور</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>رقم</th>
                                <th>الاسم</th>
                                <th width="280px">الإجراءات</th>
                            </tr>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">عرض</a>
                                        @can('edit role')
                                            <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">تعديل</a>
                                        @endcan
                                        @can('delete role')
                                        <x-button-delete :id="$role->id" route="roles" />
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {{ $roles->links() }}

                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
