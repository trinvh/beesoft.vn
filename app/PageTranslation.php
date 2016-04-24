<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    public $timestamps = false;
    protected $table = 'pages_translations';
    protected $fillable = ['name', 'slug', 'content'];
}
