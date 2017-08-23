<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
    	'is_approved' => 'boolean',
    	'is_super_admin' => 'boolean'
    ];

    protected $dates = ['deleted_at', 'verfied_at'];

    public function profile()
    {
    	return $this->hasOne('App\Profile');
    }

    public function posts()
    {
    	return $this->hasMany('App\Post');
    }

    public function role()
    {
    	return $this->belongsTo('App\Role');
    }

    public function hasRole($role)
    {
    	return !! ($this->role->name == $role);
    }

    public function getIsVerifiedAttribute()
    {
    	return !! ($this->verified_at);
    }

    public function getIsAdminAttribute()
    {
    	return !! ($this->hasRole('admin'));
    }
}
