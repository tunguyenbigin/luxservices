<?php
namespace App\Http\Services;

class SMSServices{
    public function sendMessage($phone, $message){
        $content=$message;
        $sendContent=urlencode($content);
        $APIKey=env('SMS_APIKey');
        $SecretKey=env('SMS_SecretKey');
        $data="http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$phone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$sendContent&SmsType=8";
        $curl = curl_init($data);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        $obj = json_decode($result,true);
        if($obj['CodeResult']==100)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}
?>