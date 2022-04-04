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
                        <div class="content p-3">
                            <form action="{{ route('home-about.store') }}" id="home-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="title_az">Başlıq(AZ)</label>
                                        <input type="text" name="title_az" id="title_az" class="form-control w-100 @error('title_az') is-invalid  @enderror" value="{{ old('title_az', \App\Helpers\Options::getOption('home_title_az')) }}">
                                        @error('title_az')
                                        <small class="text-danger" id="title_az-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="title_en">Başlıq(EN)</label>
                                        <input type="text" name="title_en" id="title_en" class="form-control w-100 @error('title_en') is-invalid  @enderror" value="{{ old('title_en', \App\Helpers\Options::getOption('home_title_en')) }}">
                                        @error('title_en')
                                        <small class="text-danger" id="title_en-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="title_ru">Başlıq(RU)</label>
                                        <input type="text" name="title_ru" id="title_ru" class="form-control w-100 @error('title_ru') is-invalid  @enderror" value="{{ old('title_ru', \App\Helpers\Options::getOption('home_title_ru')) }}">
                                        @error('title_ru')
                                        <small class="text-danger" id="title_ru-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="about_az">Haqqımızda(AZ)</label>
                                        <input type="text" name="about_az" id="about_az" class="form-control w-100 @error('about_az') is-invalid  @enderror" value="{{ old('about_az', \App\Helpers\Options::getOption('home_about_az')) }}">
                                        @error('about_az')
                                        <small class="text-danger" id="about_az-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="about_en">Haqqımızda(EN)</label>
                                        <input type="text" name="about_en" id="about_en" class="form-control w-100 @error('about_en') is-invalid  @enderror" value="{{ old('about_en', \App\Helpers\Options::getOption('home_about_en')) }}">
                                        @error('about_en')
                                        <small class="text-danger" id="about_en-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="about_ru">Haqqımızda(RU)</label>
                                        <input type="text" name="about_ru" id="about_ru" class="form-control w-100 @error('about_ru') is-invalid  @enderror" value="{{ old('about_ru', \App\Helpers\Options::getOption('home_about_ru')) }}">
                                        @error('about_ru')
                                        <small class="text-danger" id="about_ru-error">{{ $message }}</small>
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
