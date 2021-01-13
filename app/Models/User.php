<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'isActive'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isInactive()
    {
        return $this->state === false;
    }

    public function isActive()
    {
        return $this->isActive = true;
    }

    public function owns(Model $model)
    {
        return $this->id === $model->user_id;
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('name', 'LIKE', '%' . $name . '%');
        }
    }
    public function scopeEmail($query, $email)
    {
        if (trim($email) != "") {
            $query->where('email', 'LIKE', '%' . $email . '%');
        }
    }
}
