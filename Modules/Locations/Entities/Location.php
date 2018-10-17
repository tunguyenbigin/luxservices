<?php namespace Modules\Locations\Entities;
use Illuminate\Database\Eloquent\Model;

class Location extends Model{
    protected $table = 'locations';

    public $timestamps = true;


    protected $fillable = [
        'userId', 'lat', 'lng', 'status'
    ];

}
?>