<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

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
}
