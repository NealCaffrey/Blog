<?php
/**
 * Created by PhpStorm
 * User: Neal Caffrey
 * Date: 5/7/2022
 * Time: 1:48 PM
 */

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
