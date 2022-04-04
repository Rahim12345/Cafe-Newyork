<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHomeAboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_az'=>'required|max:255',
            'title_en'=>'required|max:255',
            'title_ru'=>'required|max:255',
            'about_az'=>'required|max:10000',
            'about_en'=>'required|max:10000',
            'about_ru'=>'required|max:10000'
        ];
    }

    public function attributes()
    {
        return [
            'title_az'=>'Başlıq(AZ)',
            'title_en'=>'Başlıq(EN)',
            'title_ru'=>'Başlıq(RU)',
            'about_az'=>'Haqqımızda(AZ)',
            'about_en'=>'Haqqımızda(EN)',
            'about_ru'=>'Haqqımızda(RU)'
        ];
    }
}
