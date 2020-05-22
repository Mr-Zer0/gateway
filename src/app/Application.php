<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Application extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'key', 'user_id', 'disabled'];

    /**
     * Many to one relation to user table
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Scoped by specific user
     * 
     * @param   \Illuminate\Database\Eloquent\Builder
     * @param   App\User (or) int
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOwnBy($query, $user)
    {
        $userId = ($user instanceof User) ? $user->id : $user;

        return $query->where('user_id', $userId); 
    }
}
