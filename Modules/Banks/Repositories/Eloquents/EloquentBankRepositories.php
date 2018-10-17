<?php namespace Modules\Banks\Repositories\Eloquents;
    use Modules\Banks\Repositories\BankRepositories;
    use App\Http\Traits\EloquentTrait;
    use Modules\Banks\Entities\Bank;
    use Modules\Banks\Entities\Balance;
    use Illuminate\Support\Facades\DB;
    class EloquentBankRepositories implements BankRepositories{
        use EloquentTrait;
        public function __construct(){
            $this->setModel( new Bank());
        }

        /**
         * create user balance
         * @param $userId
         * @param $amount
         * @return bool
         */
        public function createBalance($userId, $amount){
            DB::beginTransaction();
            try{
                $dataBalance = [
                    'userId'        => $userId,
                    'amount'        => $amount
                ];
                $balance = Balance::create($dataBalance);
                if(!$balance) return false;
                DB::commit();
                return true;
            }catch(\Exception $e){
                dd($e);
                DB::rollBack();
            }
        }
    }
?>