<?php namespace Modules\Users\Repositories\Eloquents;
    use Modules\Users\Repositories\UserRepositories;
    use Modules\Users\Entities\UserTMP;
    use Modules\Users\Entities\User;
    use Modules\Users\Entities\Profile;
    use Modules\Users\Entities\CustomerTMP;
    use App\Http\Traits\EloquentTrait;
    use Illuminate\Support\Facades\Hash;
    use DB;
    class EloquentUserRepositories implements UserRepositories{
        use EloquentTrait;
        public function __construct(){
            $this->setModel(new User());
        }

        /**
         * get user tmp by phone
         * @var phone
         * @return object
         */
        public function getTMPByPhone($phone){
            return UserTMP::where('phone', $phone)->first();
        }

        /**
         * get user by phone
         * @param $phone
         * @return mixed
         */
        public function getUserByPhone($phone){
            return $this->filter([ 'phone' => $phone])->first();
        }

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
        public function createProfile($userId, $nickName, $birthday, $experience, $address, $avatar, $wallpaper){
            DB::beginTransaction();
            try{
                $dataProfile = [
                    'userId'        => $userId,
                    'nickName'      => $nickName,
                    'birthday'      => $birthday,
                    'experience'    => $experience,
                    'address'       => $address,
                    'avatar'        => $avatar,
                    'wallpaper'     => $wallpaper
                ];
                $profile = Profile::create($dataProfile);
                if(!$profile) return false;
                DB::commit();
                return true;
            }catch(\Exception $e){
                dd($e);
                DB::rollBack();
            }
        }

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
        public function createCustomerTMP($phone, $email, $skill, $name, $lat, $lng, $address, $password){
            DB::beginTransaction();
            try{
                $dataUser  = [
                    'phone'     => $phone,
                    'email'     => $email,
                    'skill'     => $skill,
                    'name'      => $name,
                    'lat'       => $lat,
                    'lng'       => $lng,
                    'address'   => $address,
                    'password'  => Hash::make($password)
                ];
                $result = CustomerTMP::create($dataUser);
                DB::commit();//commit before return
                return $result;
            }catch (\Exception $e){
                dd($e);
                DB::rollBack();
            }
        }

        /**
        * get customer tmp data by field options
        * @param $field
        * @param $value
        * @return mixed 
        */
        public function getCustomerTMPByOptions($field, $value){
            return CustomerTMP::where($field, $value)->first();
        }

    }
?>