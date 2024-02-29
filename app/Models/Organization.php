<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    public static $provinces = [
        'CERCADO',
        'GRAL. JOSE BALLIVIAN',
        'ITENEZ',
        'MAMORE',
        'MARBAN',
        'MOXOS',
        'VACA DIEZ',
        'YACUMA',
    ];

    protected $fillable = [
        'legal_name',
        'active',
    ];
}
