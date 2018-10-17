<?php namespace Modules\Users\Entities;
    use Illuminate\Database\Eloquent\Model;

    class UserTMP extends Model{
        protected $table = 'user_tmp';

        public $timestamps = true;

        public $fillable = ['phone', 'code', 'time'];

    }
?>