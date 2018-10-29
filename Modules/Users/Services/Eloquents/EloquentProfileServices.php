<?php namespace Modules\Users\Services\Eloquents;
	use Modules\Users\Services\ProfileServices;
	use Modules\Users\Repositories\Eloquents\EloquentProfileRepositories;
	use Modules\Users\Entities\Profile;
	use App\Http\Traits\ServiceTrait;
	use Modules\Users\Services\UserServices;
    use Carbon\Carbon;

	class EloquentProfileServices implements ProfileServices{
		use ServiceTrait;
		protected $repositories;
		protected $userServices;

		public function __construct(EloquentProfileRepositories $repositories, UserServices $userServices){
			$this->repositories = $repositories;
			$this->repositories->setModel(new Profile());

			$this->userServices = $userServices;
		}

		/**
        * get profile normal informations
        * @param $userid
        * @return mixed
        */
        public function getProfileNormalInformation($userid){
            return $this->repositories->getProfileNormalInformation($userid);
        }

        /**
         * update personal informations
         * @param $userid
         * @param $data
         * @return bool
         */
        public function updatePersonalInformations($userid, $data){
            $updateName = $this->userServices->update($userid, ['name' => $data['name']]);
            if(!$updateName) return false;
            unset($data['name']);
            $data['birthday'] = (new Carbon($data['birthday']))->format('Y-m-d');
            return $this->repositories->filter(['userId' => $userid])->update($data);
        }

	}
?>