<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentType extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title', 'slug', 'isActive'];
    protected $casts = [
        'isActive' => 'boolean',
    ];
    public $timestamps = false;
    public function user()
    {
        return $this->belongTo('App\Models\User','user_id');
    }

    public function components()
    {
        return $this->belongsTo('App\Models\Component');
    }
}
