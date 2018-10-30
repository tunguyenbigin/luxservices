<?php namespace Modules\Pages\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Modules\Users\Services\UserServices;
    use Modules\Users\Services\ProfileServices;
    use Modules\Banks\Services\BankServices;
    use Modules\Transactions\Services\TransactionServices;
    use Illuminate\Http\Request;

    class PanelController extends Controller{

    	protected $userServices;
    	protected $profileServices;
    	protected $bankServices;
    	protected $transactionServices;

    	public function __construct( UserServices $userServices, ProfileServices $profileServices, BankServices $bankServices, TransactionServices $transactionServices ){
    		$this->userServices 		= $userServices;
    		$this->profileServices 		= $profileServices;
    		$this->bankServices 		= $bankServices;
    		$this->transactionServices 	= $transactionServices;
    	}

    	/**
	     * Show the dashboard page
	     * @return Response
	     */
        public function dashboard(){
            return view('pages::dashboard');
        }

        /**
	     * Show the profile page
	     * @return Response
	     */
	    public function profile(){
	    	//if id get profile infor by id//
	    	//if id # auth -> check setting of this user -> block or unblock
	    	//if id # auth and this user block -> 404 else show page
	    	//get sessting of this user
	    	//if has tab get info by tab and profile id
	    	//if id no tab -> get default activities
	    	//if id not found --> 404 not found
	    	//
	    	$id 	= request()['id'];
	    	$tab 	= request()['tab'];
	    	$userid = auth()->user()->id;
	    	//data return views -  default owner/ tab activities

	    	$profile = $this->profileServices->getProfileNormalInformation($userid);
	    	if( !empty($id) ){
	    		$user = $this->userServices->get($id);
	    		if(!$user) abort(404);

	    		$tabs = config('users.profileActivities');
	    		$profile = $this->profileServices->getProfileNormalInformation($id);//by userid
	    		if( $id === auth()->user()->id){//owner
	    			if( in_array($tab, $tabs) ){
	    				//override data to views
	    				return view('pages::sections.profile.'.$tab, compact('profile'));
	    			}

	    		} else {// diff profile
	    			//override data to views default activities page
	    			if( in_array($tab, $tabs) ){
	    				//override data to views
	    				return view('pages::sections.profile.'.$tab, compact('profile'));
	    			}
	    		}
	    	}//default show owner profile
	        return view('pages::sections.profile.activities', compact('profile'));
	    }


	    /**
	    * Find people around in map
	    * Default result: mix of user and employee
	    * advance @request
	    * @return list of users
	    **/
	    public function findAround(Request $req){
	    	return view('pages::find');
	    }

	    /**
	    * Message 
	    * 
	    * advance @request
	    * @return list of users
	    **/
	    public function messenger(){
	    	return view('pages::messenger');
	    }


	    public function wallet(){
	    	$card = $this->bankServices->getCardInfo(auth()->user()->id);
	    	$bank = $this->bankServices->getBankInfo(auth()->user()->id);
	    	if(!$card || !$bank) abort(404);
	    	$cardInfo = json_decode($card);
	    	$bankInfo = json_decode($bank);
	    	return view('pages::wallet', compact('cardInfo', 'bankInfo'));
	    }

	    public function services(){
	    	return view('pages::service');
	    }

	    public function servicesCat($cat_slug){
	    	return view('pages::services_cat');
	    }

	    public function cart(){
	    	return view('pages::cart');
	    }

	    public function order(){
	    	return view('pages::order');
	    }

	    public function invoice($id){
	    	return view('pages::invoice');
	    }


    }
?>