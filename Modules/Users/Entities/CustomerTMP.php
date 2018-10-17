<?php namespace Modules\Users\Entities;
    use Illuminate\Database\Eloquent\Model;
    class CustomerTMP extends Model{
        protected $table = 'customer_tmp';

        public $timestamps = true;

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password'
        ];

        protected $fillable = [
            'phone', 'email', 'name', 'password', 'skill', 'lat', 'lng', 'address', 'status'
        ];

    }
?>