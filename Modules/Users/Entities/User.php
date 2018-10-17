<?php namespace Modules\Users\Entities;
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'users';

    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'name', 'email', 'phone', 'password', 'active', 'status'
    ];

}
?>