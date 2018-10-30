<?php namespace Modules\Transactions\Services\Eloquents;
	use Modules\Transactions\Services\TransactionServices;
	use Modules\Transactions\Repositories\TransactionRepositories;
	use App\Http\Traits\EloquentTrait;
	use Modules\Transactions\Entities\Transaction;
	class EloquentTransactionServices implements TransactionServices{
		use EloquentTrait;
        protected $repositories;
        public function __construct(TransactionRepositories $repositories){
            $this->repositories = $repositories;
            $this->setModel( new Transaction());
        }
        
	}
?>