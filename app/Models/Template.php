<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'contract_id',
        'title',
        'description',
        'isActive',
    ];

    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function contract()
    {
        return $this->belongsTo('App\Models\Contract');
    }

    public function component_templates()
    {
        return $this->belongsTo('App\Models\ComponentTemplate');
    }

}
