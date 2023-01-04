<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'code',
        'time',
        'components',
        'specimen',
        'instructions',
        'billing_codes',
        'seo',
    ];


    protected $casts = [
        'seo' => 'array',
    ];


}
