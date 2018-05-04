<?php

namespace App;

use App\Traits\CreatedUpdatedDeleted;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;

class User extends SentinelUser
{
    use SoftDeletes;
    use Notifiable;
    use CreatedUpdatedDeleted;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 'email', 'password','first_name','last_name'
    ];
    protected $user = ['created_by', 'updated_by', 'deleted_by'];
    /**
     * Array of login column names.
     *
     * @var array
     */
    protected $loginNames = ['dni'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeSearch($query, $searchTerm) {
        return $query
            ->where('last_name', 'like', "%" . $searchTerm . "%")
            ->orWhere('first_name', 'like', "%" . $searchTerm . "%")
            ->orWhere('email', 'like', "%" . $searchTerm . "%")
            ->orWhere('dni', 'like', "%" . $searchTerm . "%");
    }
}
