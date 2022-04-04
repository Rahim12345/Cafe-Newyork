<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOptionRequest extends FormRequest
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
            'facebook'=>'required|max:255',
            'email'=>'required|max:255',
            'tiktok'=>'required|max:255',
            'tel_view'=>'required|max:255',
            'tel_real'=>'required|max:255',
            'unvan_az'=>'required|max:255',
            'unvan_en'=>'required|max:255',
            'unvan_ru'=>'required|max:255',
            
        ];
    }

    public function attributes()
    {
        return [
            'facebook'=>'Facebook',
            'email'=>'Email',
            'tiktok'=>'Tiktok',
            'tel_view'=>'Telefon(görünüş)',
            'tel_real'=>'Telefon(real)',
            'unvan_az'=>'Ünvan',
            'unvan_en'=>'Address',
            'unvan_ru'=>'Адрес',
            
        ];
    }
}


        