<?php namespace Modules\Banks\Repositories;
    interface BankRepositories{
        public function get($id);

        public function delete($id);

        public function update($id, $data);

        public function create($data);

        public function filter($data);

        /**
         * create user balance
         * @param $userId
         * @param $amount
         * @return bool
         */
        public function createBalance($userId, $amount);

        /**
        * get user card bank info
        * @param $userId
        * @return json
        */
        public function getCardInfo($userId);

        /**
        * update bank info
        * @param $type - type of account
        * @param $userId - userId of bank account
        * @param $data - array of data
        * @return boolean
        */
        public function updateBankInfo($type = 'card', $userId, $data);

        
    }
?>