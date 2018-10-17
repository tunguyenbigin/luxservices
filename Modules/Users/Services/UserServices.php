<?php namespace Modules\Users\Services;
    interface UserServices{
        /**
        * Get data by id
        * @var $id
        * @return mixed
        */
        public function get($id);

        /**
        * Remove data by id
        * @var $id
        * @return mixed
        */
        public function delete($id);

        /**
        * Update data by id and (array) data
        * @var $id
        * @var $data
        * @return mixed
        */
        public function update($id, $data);

        /**
        * Create default data with fields enable in fillable model
        * @var $data
        * @return boolean
        */
        public function create($data);

        /**
        * Get data by conditions
        * @var (array) $data
        * @return eloquents
        */
        public function filter($data);

        /**
         * get user tmp by phone
         * @var phone
         * @return object
         */
        public function getTMPByPhone($phone);

        /**
         * send phone verify code
         * @param $phone
         */
        public function sendVerifyCode($phone);

        /**
         * @param $phone
         * @param $email
         * @param $skill
         * @param $name
         * @param $lat
         * @param $lng
         * @param $address
         * @param $password
         * @return boolean
         */
        public function createCustomerTMP($phone, $email, $skill, $name, $lat, $lng, $address, $password);

        /**
         * create user
         * @param $data
         * @return bool
         */
        public function createUser($data);

        /**
        * get customer tmp data by field options
        * @param $field
        * @param $value
        * @return mixed 
        */
        public function getCustomerTMPByOptions($field, $value);


        
    }
?>