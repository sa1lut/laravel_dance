<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'login',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];

    protected $guarded = [];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function clients() 
    {
        return $this->hasMany(Client::class, 'user_id', 'id');
    }

    public function getName() {
        if (auth()->user()->role->title === 'client'){
            return Client::where('user_id', '=', auth()->user()->id)->value('name');
        };

        return 'Администратор';
    }
    
    public function getId() {
        if (auth()->user()->role->title === 'client'){
            return Client::where('user_id', '=', auth()->user()->id)->value('id');
        };

        return null;
    }
}
