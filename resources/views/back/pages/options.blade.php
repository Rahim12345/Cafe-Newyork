@extends('back.layout.master')

@section('meta')

@endsection

@section('title') Options @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <form action="{{ route('option.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="facebook">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid  @enderror" id="facebook" name="facebook" value="{{ old('facebook',$facebook) }}">
                        @error('facebook')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            <div class="form-group mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" value="{{ old('email',$email) }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            <div class="form-group mb-3">
                        <label class="form-label" for="tiktok">Tiktok</label>
                        <input type="text" class="form-control @error('tiktok') is-invalid  @enderror" id="tiktok" name="tiktok" value="{{ old('tiktok',$tiktok) }}">
                        @error('tiktok')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            <div class="form-group mb-3">
                        <label class="form-label" for="tel_view">Telefon(görünüş)</label>
                        <input type="text" class="form-control @error('tel_view') is-invalid  @enderror" id="tel_view" name="tel_view" value="{{ old('tel_view',$tel_view) }}">
                        @error('tel_view')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            <div class="form-group mb-3">
                        <label class="form-label" for="tel_real">Telefon(real)</label>
                        <input type="text" class="form-control @error('tel_real') is-invalid  @enderror" id="tel_real" name="tel_real" value="{{ old('tel_real',$tel_real) }}">
                        @error('tel_real')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            <div class="form-group mb-3">
                        <label class="form-label" for="unvan_az">Ünvan</label>
                        <input type="text" class="form-control @error('unvan_az') is-invalid  @enderror" id="unvan_az" name="unvan_az" value="{{ old('unvan_az',$unvan_az) }}">
                        @error('unvan_az')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            <div class="form-group mb-3">
                        <label class="form-label" for="unvan_en">Address</label>
                        <input type="text" class="form-control @error('unvan_en') is-invalid  @enderror" id="unvan_en" name="unvan_en" value="{{ old('unvan_en',$unvan_en) }}">
                        @error('unvan_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            <div class="form-group mb-3">
                        <label class="form-label" for="unvan_ru">Адрес</label>
                        <input type="text" class="form-control @error('unvan_ru') is-invalid  @enderror" id="unvan_ru" name="unvan_ru" value="{{ old('unvan_ru',$unvan_ru) }}">
                        @error('unvan_ru')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <button class="btn btn-primary float-end" type="submit">Əlavə et</button>
                    </div>
                </form>
            </div>
        </div>
        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection

    