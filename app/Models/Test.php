<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'slug',
        'summary',
        'content',
        'seo',
    ];


    protected $casts = [
        'seo' => 'array',
    ];



    ############################## Relations ################################
    public function service(){
        return  $this -> belongsTo("App\Models\Service") ;
    }

}
