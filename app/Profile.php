<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'image', 'phone', 'city', 'state', 'address'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getNameAttribute()
    {
    	return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }
}
