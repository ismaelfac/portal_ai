<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['component_type_id','title', 'slug', 'content', 'isActive'];

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

    public function component_types()
    {
        return $this->belongsTo('App\Models\ComponentType','component_type_id');
    }

    static public function getComponentsActivesAndPublishedWithComponentsType()
    {
        return Component::with('component_types')->where('isActive',true)->where('status', 'PUBLISHED')->get();
    }
}
