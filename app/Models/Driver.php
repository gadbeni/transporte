<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    public function scopeCurrentUser($query)
    {
        if (Auth::user()->hasRole('admin')) {
            $query = null;
        } else {
            $query->where('user_id', Auth::user()->id);
        }
        return $query;
    }
}
