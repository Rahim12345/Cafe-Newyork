<?php

namespace App\Http\Controllers;

use App\Models\HomeBanner;
use App\Http\Requests\StoreHomeBannerRequest;
use App\Http\Requests\UpdateHomeBannerRequest;
use Illuminate\Support\Facades\File;
use function Sodium\add;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.pages.home.home-banner-index',[
            'banners'=>HomeBanner::orderBy('id','desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.home.home-banner-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeBannerRequest $request)
    {
        $file = $request->src;
        $new_name   = $file->hashName();
        $file->move(public_path('files/home/banner'), $new_name);

        HomeBanner::create([
            'src'=>$new_name,
            'title_az'=>$request->title_az,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
            'sub_title_az'=>$request->sub_title_az,
            'sub_title_en'=>$request->sub_title_en,
            'sub_title_ru'=>$request->sub_title_ru
        ]);

        toastSuccess('Data əlavə edildi');
        return redirect()->route('home-banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeBanner $homeBanner)
    {
        return view('back.pages.home.home-banner-edit',[
            'banner'=>$homeBanner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeBannerRequest  $request
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeBannerRequest $request, HomeBanner $homeBanner)
    {
        $new_name   = $homeBanner->src;
        if ($request->src)
        {
            if (File::exists(public_path('files/home/banner/'.$homeBanner->src)))
            {
                File::delete(public_path('files/home/banner/'.$homeBanner->src));
            }

            $file = $request->src;
            $new_name   = $file->hashName();
            $file->move(public_path('files/home/banner'), $new_name);
        }

        $homeBanner->update([
            'src'=>$new_name,
            'title_az'=>$request->title_az,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
            'sub_title_az'=>$request->sub_title_az,
            'sub_title_en'=>$request->sub_title_en,
            'sub_title_ru'=>$request->sub_title_ru
        ]);

        toastSuccess('Data redaktə edildi');
        return redirect()->route('home-banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeBanner $homeBanner)
    {
        if (File::exists(public_path('files/home/banner/'.$homeBanner->src)))
        {
            File::delete(public_path('files/home/banner/'.$homeBanner->src));
        }

        $homeBanner->delete();

        toastSuccess('Data silindi');
        return redirect()->route('home-banner.index');
    }
}
