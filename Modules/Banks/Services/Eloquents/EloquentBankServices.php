<?php namespace Modules\Banks\Services\Eloquents;
    use Modules\Banks\Services\BankServices;
    use Modules\Banks\Repositories\BankRepositories;
    use App\Http\Traits\EloquentTrait;
    use Modules\Banks\Entities\Bank;
    class EloquentBankServices implements BankServices{
        use EloquentTrait;
        protected $repositories;
        public function __construct(BankRepositories $repositories){
            $this->repositories = $repositories;
            $this->setModel( new Bank());
        }

        /**
         * create user balance
         * @param $userId
         * @param $amount
         * @return bool
         */
        public function createBalance($userId, $amount){
            return $this->repositories->createBalance($userId, $amount);
        }
    }
?>