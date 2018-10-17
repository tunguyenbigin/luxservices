<?php namespace Modules\Users\Repositories;
    interface UserRepositories{
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
         * get user by phone
         * @param $phone
         * @return mixed
         */
        public function getUserByPhone($phone);

        /**
         * create user profile
         * @param $userId
         * @param $nickName
         * @param $birthday
         * @param $experience
         * @param $address
         * @param $avatar
         * @param $wallpaper
         * @return boolean
         *
         */
        public function createProfile($userId, $nickName, $birthday, $experience, $address, $avatar, $wallpaper);

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
        * get customer tmp data by field options
        * @param $field
        * @param $value
        * @return mixed 
        */
        public function getCustomerTMPByOptions($field, $value);

    }
?>