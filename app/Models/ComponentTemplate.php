<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_id',
        'component_id',
        'title_component',
        'parameters',
        'content',
    ];

    public function getRouteKey()
    {
        return $this->slug;
    }

    public function template()
    {
        return $this->belongsTo('App\Models\Template');
    }
}
