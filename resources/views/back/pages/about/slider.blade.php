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
                            <form action="{{ route('about.store') }}" id="home-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="action" value="slider">
                                <div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="src">Şəkil</label>
                                        <input type="file" name="src" id="src" class="form-control w-100 @error('src') is-invalid  @enderror">
                                        @error('src')
                                        <small class="text-danger" id="title_az-error">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary float-end" type="submit" id="add">Əlavə et</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <table class="table">
                                <tr>
                                    <td>Şəkil</td>
                                    <td></td>
                                </tr>
                                @foreach($sliders as $slider)
                                <tr>
                                    <td>
                                        <img src="{{ asset('files/about/'.$slider->src) }}" width="200" alt="">
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <div class="dropdown">
                                                <form action="{{ route('about.destroy',$slider->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Silmek istədiyinizdən əminsiniz?')"><i class="fa fa-times"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
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
