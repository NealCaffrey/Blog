<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
