<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;

    protected $table = 'banners';

    protected $fillable = [
        'page',
        'url',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    private $page = [
        'HOME',
        'DEAL',
        'MEETING',
        'WEEDING',
        'NEWS'
    ];
}
