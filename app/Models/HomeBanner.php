<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;

    protected $table = 'home_banners';

    protected $fillable = [
        'src',
        'title_az',
        'title_en',
        'title_ru',
        'sub_title_az',
        'sub_title_en',
        'sub_title_ru'
    ];
}
