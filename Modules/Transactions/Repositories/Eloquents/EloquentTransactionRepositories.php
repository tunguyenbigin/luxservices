<?php namespace Modules\Transactions\Repositories\Eloquents;
	use Modules\Transactions\Repositories\TransactionRepositories;
	use App\Http\Traits\EloquentTrait;
	use Modules\Transactions\Entities\Transaction;
	class EloquentTransactionRepositories implements TransactionRepositories {
		use EloquentTrait;
        public function __construct(){
            $this->setModel( new Transaction());
        }
        
	}
?>