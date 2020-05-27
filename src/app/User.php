<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
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

    /**
     * One to many relation to applications table
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     **/
    public function applications()
    {
        return $this->hasMany('App\Application');
    }

    /**
     * Promote specific user to admin
     * 
     * @return boolean
     */
    public function promote()
    {
        return $this->changeRole('admin');
    }

    /**
     * Demote specific user to client
     * 
     * @return boolean
     */
    public function demote()
    {
        return $this->changeRole('client');
    }

    /**
     * Change the role of specific user
     * 
     * @return boolean
     */
    public function changeRole($designation)
    {
        switch ($designation) {
            case 'admin':
                $this->role = 1;
            break;

            case 'client':
            default:
                $this->role = 2;
            break;
        }

        return $this->save();
    }

    public function getRoleNameAttribute()
    {
        return config('user.role.' . $this->getAttributes()['role']);
    }

    /**
     * Determine whether the user is admin or not
     *
     * @return boolean
     */
    public function isAdmin()
    {
        return ($this->role == 0) ? true : false;
    }
 }
