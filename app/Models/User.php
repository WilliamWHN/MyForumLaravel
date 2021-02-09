<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'pseudo',
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id'
=======
        'first_name',
        'last_name',
        'pseudo',
        'email',
        'password',
        'role_id',
>>>>>>> Dev
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

    // ============= Relationships

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }
<<<<<<< HEAD

    public function role(){
        return $this->belongsTo(Role::class);
    }


=======
>>>>>>> Dev
}
