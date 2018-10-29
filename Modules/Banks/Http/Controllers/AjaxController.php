<?php
    namespace Modules\Banks\Http\Controllers;
    use Illuminate\Routing\Controller;
    use Modules\Banks\Services\BankServices;
    use Modules\Banks\Http\Requests\UpdateStripeRequest;
    class AjaxController extends Controller{
        protected $bankServces;

        public function __construct(BankServices $bankServces){
            $this->bankServces = $bankServces;
        }

        public function __call($method, $parameters)
        {
            return response()->json(['status'=>'error', 'message'=>'Call to undefined function('.$method.') in '.__CLASS__]);
        }

        public function updateStripeAccount(UpdateStripeRequest $req){
            dd($req->all());
        }

    }
?>