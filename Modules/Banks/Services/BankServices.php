<?php namespace Modules\Banks\Services;
    interface BankServices{
        /**
         * create user balance
         * @param $userId
         * @param $amount
         * @return bool
         */
        public function createBalance($userId, $amount);

        public function get($id);

        public function delete($id);

        public function update($id, $data);

        public function create($data);

        public function filter($data);
    }
?>