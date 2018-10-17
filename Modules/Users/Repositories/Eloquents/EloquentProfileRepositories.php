<?php namespace Modules\Users\Repositories\Eloquents;
	use Modules\Users\Repositories\ProfileRepositories;
	use Modules\Users\Entities\Profile;
	use App\Http\Traits\EloquentTrait;
    use DB;
	class EloquentProfileRepositories implements ProfileRepositories{
		use EloquentTrait;
		public function __construct(){
			$this->setModel(new Profile());
		}
		/**
        * get profile normal informations
        * @param $userid
        * @return mixed
        */
        public function getProfileNormalInformation($userid){
            return DB::table('users')
            ->select('users.id', 'users.name', 'users.email', 'users.phone')
            ->addSelect('profiles.gender', 'profiles.nickName', 'profiles.birthday', 'profiles.experience', 'profiles.address', 'profiles.job', 'profiles.stories', 'profiles.avatar', 'profiles.wallpaper')
            ->join('profiles', 'profiles.userId', '=', 'users.id')
            ->where('users.id', $userid)
            ->where('users.active', config('users.userStatus.active'))
            ->first();
        }
	}
?>