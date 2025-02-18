@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <x-content-header :titlePage="'اعدادات النظام'" />
            <section class="content">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('settings.update') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="app_name" class="form-label">اسم الموقع</label>
                                <input type="text" name="app_name" class="form-control" value="{{ \App\Models\Setting::get('app_name') }}">
                            </div>
                                
                            <div class="mb-3">
                                <label for="app_logo" class="form-label">شعار الموقع</label>
                                <x-InputFile :id="'app_logo'"/>
                                <img src="{{ asset('storage/' . \App\Models\Setting::get('app_logo')) }}" width="100" class="mt-2">
                            </div>
                            
                            <div class="mb-3">
                                <label for="app_brand" class="form-label">الخلفية</label>
                                <x-InputFile :id="'app_brand'"/>
                                <img src="{{ asset('storage/' . \App\Models\Setting::get('app_brand')) }}" width="200" class="mt-2">
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
