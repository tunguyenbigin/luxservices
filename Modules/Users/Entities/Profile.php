<?php namespace Modules\Users\Entities;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Profile extends Model{
    protected $table = 'profiles';

    public $timestamps = true;

    protected $fillable = [
        'userId', 'firstName', 'lastName', 'birthday', 'experience', 'address', 'avatar', 'wallaper'
    ];

    public function setBirthdayAttribute( $value ) {
        $this->attributes['birthday'] = (new Carbon($value))->format('Y-m-d');
    }
}
?>