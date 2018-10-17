<?php namespace Modules\Banks\Entities;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model{
    protected $table = 'user_banks';

    public $timestamps = true;

    protected $fillable = [
        'userId', 'bankInfo', 'visaInfo', 'status'
    ];

}
?>