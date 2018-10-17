<?php
namespace App\Http\Services;
class GenerateCodeServices{
    public function getCode(){
        return 'LUX-'. substr(str_shuffle("0123456789"), 0, 5);
    }
}
?>