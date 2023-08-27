<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Employee;
use App\Models\ActivityLog;
use App\Models\RoleTypeUser;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ProfileInformation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'rec_id',
        'email',
        'join_date',
        'phone_number',
        'status',
        'role_name',
        'avatar',
        'designaion',
        'department',
        'password',

    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        //'password' => 'hashed',
    ];



    public function profileInformation()
    {
        return $this->hasOne(ProfileInformation::class);
    }
    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function roleTypeUsers()
    {
        return $this->hasMany(RoleTypeUser::class);
    }
}
