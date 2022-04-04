@extends('back.layout.master')

@section('title') {{ __('menus.home') }} @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="container-xl mt-3" style="min-height: 70vh">
            <div class="row row-cards">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <a href="{{ route('home-banner.index') }}" class="btn btn-primary w-100">Bütün</a>
                        <div class="content p-3">
                            <form action="{{ route('home-banner.store') }}" id="home-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div class="form-group mb-3">
                                        <input type="file" name="src" id="upload_left_side_image" class="form-control">
                                        @error('src')
                                        <small class="text-danger" id="image-error">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="title_az">Başlıq(AZ)</label>
                                        <input type="text" name="title_az" id="title_az" class="form-control w-100 @error('title_az') is-invalid  @enderror" value="{{ old('title_az') }}">
                                        @error('title_az')
                                        <small class="text-danger" id="title_az-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="title_en">Başlıq(EN)</label>
                                        <input type="text" name="title_en" id="title_en" class="form-control w-100 @error('title_en') is-invalid  @enderror" value="{{ old('title_en') }}">
                                        @error('title_en')
                                        <small class="text-danger" id="title_en-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="title_ru">Başlıq(RU)</label>
                                        <input type="text" name="title_ru" id="title_ru" class="form-control w-100 @error('title_ru') is-invalid  @enderror" value="{{ old('title_ru') }}">
                                        @error('title_ru')
                                        <small class="text-danger" id="title_ru-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="sub_title_az">Sub Başlıq(AZ)</label>
                                        <input type="text" name="sub_title_az" id="sub_title_az" class="form-control w-100 @error('sub_title_az') is-invalid  @enderror" value="{{ old('sub_title_az') }}">
                                        @error('sub_title_az')
                                        <small class="text-danger" id="sub_title_az-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="sub_title_en">Sub Başlıq(EN)</label>
                                        <input type="text" name="sub_title_en" id="title_en" class="form-control w-100 @error('sub_title_en') is-invalid  @enderror" value="{{ old('sub_title_en') }}">
                                        @error('sub_title_en')
                                        <small class="text-danger" id="sub_title_en-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="sub_title_ru">Sub Başlıq(RU)</label>
                                        <input type="text" name="sub_title_ru" id="sub_title_ru" class="form-control w-100 @error('sub_title_ru') is-invalid  @enderror" value="{{ old('sub_title_ru') }}">
                                        @error('sub_title_ru')
                                        <small class="text-danger" id="sub_title_ru-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary float-end" type="submit" id="add">Əlavə et</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
