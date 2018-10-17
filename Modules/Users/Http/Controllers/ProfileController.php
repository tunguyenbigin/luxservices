<?php namespace Modules\Users\Http\Controllers;
	use Illuminate\Routing\Controller;
	use Illuminate\Http\Request;
	use Modules\Users\Services\ProfileServices;

	class ProfileController extends Controller
	{
		protected $profileServices;
		function __construct(ProfileServices $profileServices)
		{
			$this->profileServices = $profileServices;
		}


		public function updatePersonal(Request $req){
			dd($req->all());
		}

	}
?>