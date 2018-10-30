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

        /**
        * get user card bank info
        * @param $userId
        * @return json
        */
        public function getCardInfo($userId){
            $bankInfo = Bank::where('userId', (int)$userId)->first();
            if($bankInfo){
                $cardInfo = $bankInfo->visaInfo;
                $cardData = [
                    'card_number'           => '',
                    'card_holder_name'      => '',
                    'card_expiry'           => '',
                    'card_cvc'              => ''
                ];
                if($cardInfo){
                    $cardInfo = unserialize($cardInfo);
                    $cardData['card_number']        = $cardInfo->card_number;
                    $cardData['card_holder_name']   = $cardInfo->card_holder_name;
                    $cardData['card_expiry']        = $cardInfo->card_expiry;
                    $cardData['card_cvc']           = $cardInfo->card_cvc;
                }
                return json_encode($cardData);
            }
            return false;
        }

        /**
        * get user bank info
        * @param $userId
        * @return json
        */
        public function getBankInfo($userId){
            $bankInfo = Bank::where('userId', (int)$userId)->first();
            if($bankInfo){
                $cardInfo = $bankInfo->bankInfo;
                $bankData = [
                    'bank_name'             => '',
                    'bank_branch'           => '',
                    'bank_account_number'   => '',
                    'bank_card_holder_name' => ''
                ];
                if($cardInfo){
                    $cardInfo = unserialize($cardInfo);
                    $bankData['bank_name']                  = $cardInfo->bank_name;
                    $bankData['bank_branch']                = $cardInfo->bank_branch;
                    $bankData['bank_account_number']        = $cardInfo->bank_account_number;
                    $bankData['bank_card_holder_name']      = $cardInfo->bank_card_holder_name;
                }
                return json_encode($bankData);
            }
            return false;
        }

        /**
        * update bank info
        * @param $type - type of account
        * @param $userId - userId of bank account
        * @param $data - array of data
        * @return boolean
        */
        public function updateBankInfo($type, $userId, $data){
            $bankInfo = $this->getCardInfo($userId);
            $bankAccount = $this->getBankInfo($userId);
            if(!$bankInfo || !$bankAccount) return false;
            if($type === 'card'){//update card info
                $card = new \stdClass;
                $card->card_number      = $data['card_number'];
                $card->card_holder_name = $data['card_holder_name'];
                $card->card_expiry      = $data['card_expiry'];
                $card->card_cvc         = $data['card_cvc'];
                $updated = Bank::where('userId', (int)$userId)->update(['visaInfo' => serialize($card)]);
                return $updated;
            }else{//update bank account
                $account = new \stdClass;
                $account->bank_name             = $data['bank_name'];
                $account->bank_branch           = $data['bank_branch'];
                $account->bank_account_number   = $data['bank_account_number'];
                $account->bank_card_holder_name = $data['bank_card_holder_name'];
                $updated = Bank::where('userId', (int)$userId)->update(['bankInfo' => serialize($account)]);
                return $updated;
            }
        }

    }
?>