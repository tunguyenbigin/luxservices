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

        /**
        * get user card bank info
        * @param $userId
        * @return json
        */
        public function getCardInfo($userId){
            return $this->repositories->getCardInfo($userId);
        }
        
        /**
        * get user bank info
        * @param $userId
        * @return json
        */
        public function getBankInfo($userId){
            return $this->repositories->getBankInfo($userId);
        }

        /**
        * update bank info
        * @param $type - type of account
        * @param $userId - userId of bank account
        * @param $data - array of data
        * @return boolean
        */
        public function updateBankInfo($type, $userId, $data){
            return $this->repositories->updateBankInfo($type, $userId, $data);
        }   


    }
?>