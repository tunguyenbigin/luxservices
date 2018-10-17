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
    }
?>