<?php namespace Modules\Users\Services\Eloquents;
    use Modules\Users\Services\UserServices;
    use Modules\Users\Repositories\UserRepositories;
    use App\Http\Services\SMSServices;
    use App\Http\Services\GenerateCodeServices as CodeServices;
    use Modules\Users\Entities\UserTMP;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;
    use Modules\Banks\Services\BankServices;
    use Modules\Locations\Services\LocationServices;
    use App\Http\Traits\ServiceTrait;
    use Modules\Users\Entities\User;
    class EloquentUserServices implements UserServices{
        use ServiceTrait;
        protected $repositories;
        protected $codeServices;
        protected $smsServices;
        protected $bankServices;
        protected $locationsServices;

        public function __construct(UserRepositories $repositories, CodeServices $codeServices, SMSServices $smsServices, BankServices $bankServices, LocationServices $locationServices){
            $this->repositories = $repositories;

            $this->codeServices = $codeServices;
            $this->smsServices  = $smsServices;
            $this->bankServices = $bankServices;
            $this->locationsServices = $locationServices;

            $this->repositories->setModel(new User());
        }

        /**
         * get user tmp by phone
         * @var phone
         * @return object
         */
        public function getTMPByPhone($phone){
            return $this->repositories->getTMPByPhone($phone);
        }

        /**
         * send phone verify code
         * @param $phone
         * @return boolean
         */
        public function sendVerifyCode($phone){
            $dataUser = $this->getTMPByPhone($phone);
            $code = $this->codeServices->getCode();
            //$timeLeft = date('Y-m-d H:i:s', strtotime("+5 min"));
            if($dataUser){//update code
                $update = UserTMP::where('id', $dataUser->id)->update([ 'code' => $code, 'time' => ($dataUser->time + 1)]);

                if(!$update) return false;
                //$result = $this->smsServices->sendMessage($phone, $code);
                //if(!$result) return false;
                return true;

            }else{//create new data
                $userData  = [
                    'phone'         => $phone,
                    'code'          => $code,
                ];

                $created = UserTMP::create($userData);

                if(!$created) return false;
                //$result = $this->smsServices->sendMessage($phone, $code);
                //if(!$result) return false;
                return true;

            }
        }

        /**
        * get customer tmp data by field options
        * @param $field
        * @param $value
        * @return mixed 
        */
        public function getCustomerTMPByOptions($field, $value){
            return $this->repositories->getCustomerTMPByOptions($field, $value);
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
            return $this->repositories->createCustomerTMP($phone, $email, $skill, $name, $lat, $lng, $address, $password);
        }

        /**
         * create user
         * @param $data
         * @return bool
         */
        public function createUser($data){
            DB::beginTransaction();
            try{
                $dataUser = [
                    'name'      => $data['name'],
                    'email'     => $data['email'],
                    'phone'     => $data['phone'],
                    'password'  => Hash::make($data['password']),
                ];
                $user = $this->repositories->create($dataUser);
                if(!$user) return false;//rollback db and stop process

                $dataProfile = array();
                //dd($dataProfile);

                $profile = $this->repositories->createProfile($user->id, null, null, $data['desc'], $data['address'], null, null);
                if(!$profile) return false; //rollback db and stop process

                $bank = $this->bankServices->create([ 'userId' => $user->id]);
                if(!$bank) return false;//rollback db and stop process

                $balance = $this->bankServices->createBalance($user->id, 0);
                if(!$balance) return false;//rollback db and stop process

                $locationData = [
                    'userId'    => $user->id,
                    'lat'       => $data['lat'],
                    'lng'       => $data['lng']
                ];
                $location = $this->locationsServices->create($locationData);
                if(!$location) return false;

                DB::commit();
                return true;

            }catch(\Exception $e){
                dd($e);
                DB::rollBack();
            }
        }


    }
?>