<?php namespace Modules\Banks\Entities;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model{
    protected $table = 'balances';

    public $timestamps = true;

    protected $fillable = [
        'userId', 'amount', 'status'
    ];

}
?>