@extends('back.layout.master')

@section('title') {{ __('menus.home') }} @endsection

@section('css')

@endsection

@section('content')
    <script>
        function msg() {

        }
    </script>
    <div class="page">
        @include('back.includes.menu')

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <a href="{{ route('home-banner.create') }}" class="btn btn-primary w-100">Əlavə et</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Şəkil</th>
                        <th>Başlıq(AZ)</th>
                        <th>Sub Başlıq(AZ)</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td>
                                <img src="{{ asset('files/home/banner/'.$banner->src) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                {{ $banner->title_az }}
                            </td>
                            <td>
                                {{ $banner->sub_title_az }}
                            </td>
                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a class="btn btn-primary"
                                       href="{{ route('home-banner.edit',$banner->id) }}"><i class="fa fa-edit"></i></a>
                                    <div class="dropdown">
                                        <form action="{{ route('home-banner.destroy',$banner->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Silmek istədiyinizdən əminsiniz?')"><i class="fa fa-times"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4" align="center">
                            @if($banners->count() == 0)
                                Data tapılmadı
                            @else
                                {{ $banners->links('vendor.pagination.bootstrap-4') }}
                            @endif
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
