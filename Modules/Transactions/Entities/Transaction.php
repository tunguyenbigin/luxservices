<?php namespace Modules\Transactions\Entities;
	use Illuminate\Database\Eloquent\Model;
	class Transaction extends Model{

		protected $table='transactions';

		public $timestamps = true;

		protected $fillable = ['userId', 'type', 'fromUserId', 'toUserId', 'amount', 'status', 'note'];
	}
?>