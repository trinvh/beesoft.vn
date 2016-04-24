<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use \Dimsav\Translatable\Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['name', 'content'];

    protected $dates = ['deleted_at'];
}
