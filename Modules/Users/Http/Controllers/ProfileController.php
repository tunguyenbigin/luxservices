<?php namespace Modules\Users\Http\Controllers;
    use Illuminate\Routing\Controller;
	use Illuminate\Http\Request;
	use Modules\Users\Services\ProfileServices;
	use Illuminate\Support\Facades\DB;
	use Modules\Users\Http\Requests\UpdateProfileRequest;

	class ProfileController extends Controller
	{
		protected $profileServices;
		function __construct(ProfileServices $profileServices)
		{
			$this->profileServices = $profileServices;
		}


		public function updatePersonal(UpdateProfileRequest $req){
			DB::beginTransaction();
            try{
                $created = $this->profileServices->updatePersonalInformations(auth()->id(), $req->all());
                DB::commit();
                if($created)
                    return response()->json(['status' => 'success', 'msg' => 'Profile has been updated success']);
                return response()->json(['staus' => 'error', 'msg' => 'Something went wrong']);
            }catch(\Exception $e){
                return response()->json(['staus' => 'error', 'msg' => $e->getMessage()]);
                DB::rollBack();
            }
		}

	}
?>