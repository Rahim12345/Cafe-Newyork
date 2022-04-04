<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeBannerRequest extends FormRequest
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
            'src'=>'nullable|image|max:2048',
            'title_az'=>'required|max:255',
            'title_en'=>'required|max:255',
            'title_ru'=>'required|max:255',
            'sub_title_az'=>'required|max:255',
            'sub_title_en'=>'required|max:255',
            'sub_title_ru'=>'required|max:255'
        ];
    }

    public function attributes()
    {
        return [
            'src'=>'Şəkil',
            'title_az'=>'Başlıq(AZ)',
            'title_en'=>'Başlıq(EN)',
            'title_ru'=>'Başlıq(RU)',
            'sub_title_az'=>'Sub Başlıq(AZ)',
            'sub_title_en'=>'Sub Başlıq(EN)',
            'sub_title_ru'=>'Sub Başlıq(RU)'
        ];
    }
}
