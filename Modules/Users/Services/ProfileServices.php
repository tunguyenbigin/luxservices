<?php namespace Modules\Users\Services;
 	interface ProfileServices{
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

        /**
        * get profile normal informations
        * @param $userid
        * @return mixed
        */
        public function getProfileNormalInformation($userid);

        /**
         * update personal informations
         * @param $userid
         * @param $data
         * @return bool
         */
        public function updatePersonalInformations($userid, $data);
        
 	}
?>