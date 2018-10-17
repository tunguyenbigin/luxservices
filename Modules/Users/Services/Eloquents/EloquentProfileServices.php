<?php namespace Modules\Users\Services\Eloquents;
	use Modules\Users\Services\ProfileServices;
	use Modules\Users\Repositories\Eloquents\EloquentProfileRepositories;
	use Modules\Users\Entities\Profile;
	use App\Http\Traits\ServiceTrait;

	class EloquentProfileServices implements ProfileServices{
		use ServiceTrait;
		protected $repositories;

		public function __construct(EloquentProfileRepositories $repositories){
			$this->repositories = $repositories;
			$this->repositories->setModel(new Profile());
		}

		/**
        * get profile normal informations
        * @param $userid
        * @return mixed
        */
        public function getProfileNormalInformation($userid){
            return $this->repositories->getProfileNormalInformation($userid);
        }

	}
?>