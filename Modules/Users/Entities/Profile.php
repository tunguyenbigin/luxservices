<?php namespace Modules\Users\Entities;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    protected $table = 'profiles';

    public $timestamps = true;

    protected $fillable = [
        'userId', 'firstName', 'lastName', 'birthday', 'experience', 'address', 'avatar', 'wallaper'
    ];
}
?>