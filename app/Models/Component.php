<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'content', 'isActive'];

    protected $casts = ['isActive' => 'boolean'];

    // protected static function boot() {
    //     parent::boot();
    //     self::creating(function ($table) {
    //         if(! app()->runningInConsole()) {
    //             $table->user_id = auth()->id();
    //         }
    //     });
    // }

    public function contracts()
    {
        return $this->belongsToMany('App\Models\Contract')->using('App\Models\ComponentContract');
    }
}
