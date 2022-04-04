<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\Option;
use App\Traits\FileUploader;

class AboutController extends Controller
{
    use FileUploader;
    public function backAbout($slug)
    {
        return view('back.pages.about.about', compact('slug'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.about.slider',[
            'sliders'=>About::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutRequest $request)
    {
        if ($request->action == 'slider')
        {
            About::create([
               'src'=>$this->fileSave('files/about',$request->src)
            ]);
        }
        else
        {
            foreach ($request->keys() as $key)
            {
                if ($key != '_token' && $key != 'slug')
                {
                    Option::updateOrCreate(
                        ['key'   => $request->slug.'_'.$key],
                        [
                            'value' => $request->post($key)
                        ]
                    );
                }
            }
        }

        toastSuccess('Data əlavə edildi');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $this->fileDelete('files/about/'.$about->src);
        $about->delete();
        toastSuccess('Data silindi');
        return redirect()->route('about.create');
    }
}
