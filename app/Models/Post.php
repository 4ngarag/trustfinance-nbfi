<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title_en', 'full_text_en', 'title_ru', 'full_text_ru', 'title_mn', 'full_text_mn', 'image', 'user_id'];
}
