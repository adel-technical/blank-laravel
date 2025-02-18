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
                                <div class="file-input">
                                    <input
                                      type="file"
                                      name="file-input"
                                      id="file-input"
                                      class="file-input__input"
                                    />
                                    <label class="file-input__label" for="file-input">
                                      <svg
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fas"
                                        data-icon="upload"
                                        class="svg-inline--fa fa-upload fa-w-16"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                      >
                                        <path
                                          fill="currentColor"
                                          d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
                                        ></path>
                                      </svg>
                                      <span>Upload file</span></label
                                    >
                                  </div>
                            </div>
                            <div class="mb-3">
                                <label for="app_logo" class="form-label">شعار الموقع</label>
                                <input type="file" name="app_logo" class="form-control">
                                <img src="{{ asset('storage/' . \App\Models\Setting::get('app_logo')) }}" width="100" class="mt-2">
                            </div>
                    
                            <div class="mb-3">
                                <label for="app_brand" class="form-label">الخلفية</label>
                                <input type="file" name="app_brand" class="form-control">
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
