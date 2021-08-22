<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){

        return $this->hasOne(Profiler::class);
    }

    public function level(){

        return $this->belongsTo(Level::class);
    }

    public function groups(){

        return $this->belongsToMany(Level::class)->withTimestamps();
    }

    public function location(){

        return $this->hasOneThrough(Location::class, Profiler::class);
    }

    public function posts(){

        return $this->hasMany(Post::class);
    }

    public function videos(){

        return $this->hasMany(Video::class);
    }

    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
