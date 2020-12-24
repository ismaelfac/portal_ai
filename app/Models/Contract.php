<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'isActive',
    ];

    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function components()
    {
        return $this->belongsToMany('App\Models\Component')->using('App\Models\ComponentContract');
    }

    public function templates()
    {
        return $this->hasMany('App\Models\Template','contract_id');
    }
}
