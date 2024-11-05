<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Associate extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'full_name',
        'ci',
        'expedition_ci',
        'imagen',
        'user_id',
        'active',
        'organization_id',
        'created_at',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

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
