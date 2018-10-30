<?php
    namespace Modules\Banks\Http\Controllers;
    use Illuminate\Routing\Controller;
    use Modules\Banks\Services\BankServices;
    use Modules\Banks\Http\Requests\UpdateStripeRequest;
    use Modules\Banks\Http\Requests\UpdateBankRequest;
    class AjaxController extends Controller{
        protected $bankServces;

        public function __construct(BankServices $bankServces){
            $this->bankServces = $bankServces;
        }

        public function __call($method, $parameters){
            return response()->json(['status'=>'error', 'msg'=>'Call to undefined function('.$method.') in '.__CLASS__]);
        }

        public function updateStripeAccount(UpdateStripeRequest $req){
            $update = $this->bankServces->updateBankInfo('card', auth()->user()->id, $req->all());
            if($update)
                return response()->json(['status'=>'success', 'msg'=>'Update banks success!']);
            return response()->json(['status'=>'error', 'msg'=>'There were an error, please try again!']);
        }

        public function updateBankAccount(UpdateBankRequest $req){
            $update = $this->bankServces->updateBankInfo('bank', auth()->user()->id, $req->all());
            if($update)
                return response()->json(['status'=>'success', 'msg'=>'Update banks success!']);
            return response()->json(['status'=>'error', 'msg'=>'There were an error, please try again!']);
        }

    }
?>