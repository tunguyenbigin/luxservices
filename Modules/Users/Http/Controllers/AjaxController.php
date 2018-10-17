<?php namespace Modules\Users\Http\Controllers;
    use Modules\Users\Http\Requests\RegisterRequest;
    use Illuminate\Routing\Controller;
    use Modules\Users\Services\UserServices;
    use Illuminate\Support\Facades\Session;
    use Modules\Users\Entities\UserTMP;
    use Carbon\Carbon;

    class AjaxController extends Controller{

        protected $userServices;

        public function __construct(UserServices $userServices){
            $this->userServices  = $userServices;
        }

        public function register( RegisterRequest $request ){

            $userData = Session::get('userTMP');
            if(!in_array(request()['step'], $userData['step'])){
                array_push($userData['step'], request()['step']);
            }
            foreach($request->all() as $reqKey => $req){
                if($reqKey != 'step')
                    $userData[$reqKey] = $req;
            }
            Session::put('userTMP', $userData);
            Session::save();

            $step = request()['step'];

            if($step == 1){
                $sendCode = $this->userServices->sendVerifyCode(request()['phone']);
                if($sendCode)
                    return response()->json(['status' => 'success', 'message' => 'Go to step '. $request->get('step')]);
                return response()->json(['status' => 'error', 'message' => 'Something went wrong, please try again.']);
            }

            if($step == 5){
                $checkPhone = $this->userServices->getCustomerTMPByOptions('phone', $userData['phone']);
                $checkEmail = $this->userServices->getCustomerTMPByOptions('email', $userData['email']);
                if(!$checkPhone && !$checkEmail){
                    if(intval($userData['type']) === 1){ //employee
                        $user = $this->userServices->createCustomerTMP($userData['phone'], $userData['email'], $userData['desc'], $userData['name'], $userData['lat'], $userData['lng'], $userData['address'], $userData['password']);
                        if($user)
                            return response()->json(['status'=>'success', 'message'=>'Customer has been created success!']);
                        return response()->json(['status'=>'error', 'message'=>'Something went wrong!']);
                    }
                    if(intval($userData['type']) === 2){//users
                        $user = $this->userServices->createUser($userData);
                        if($user)
                            return response()->json(['status'=>'success', 'message'=>'User has been created success!']);
                        return response()->json(['status'=>'error', 'message'=>'Something went wrong!']);
                    }
                }
                else{
                    return response()->json(['status'=>'error', 'message'=>'User already exist in system!']);
                }
            }

            return response()->json(['status' => 'success', 'message' => 'Go to step '. $request->get('step')]);

        }

        public function resendCode(){
            $userData = Session::get('userTMP');
            if(isset($userData['phone']) && $userData['phone']){
                $userTmp = UserTMP::where('phone', $userData['phone'])->first();
                if($userTmp){
                    if($userTmp->time> env('TIME_SPAM_PHONENUMBER', 5) )
                        return response()->json(['status' => 'error', 'message' => 'Your phone number has been blocked forever because of spam!']);
                    $time = Carbon::parse($userTmp->updated_at)->addMinutes(1)->timestamp;
                    $elapsed = $time - now()->timestamp;
                    if($elapsed>0) return response()->json(['status' => 'error', 'message' => 'Please wait '.$elapsed.'(s) to resend verify code!']);
                    $sendCode = $this->userServices->sendVerifyCode($userData['phone']);
                    if($sendCode)
                        return response()->json(['status' => 'success', 'message' => 'A new code has been sent to your phone number via sms.']);
                    return response()->json(['status' => 'error', 'message' => 'Something went wrong, please try again.']);
                }
                return response()->json(['status' => 'error', 'message' => 'Something went wrong, please try again.']);
            }
            return response()->json(['status' => 'error', 'message' => 'Something went wrong, please try again.']);
        }

    }
?>