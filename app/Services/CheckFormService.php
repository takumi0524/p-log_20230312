<?php

namespace App\Services;

class CheckFormService
{
    public static function checkGender($data){

        if($data->gender === 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }
        
        return $gender;
    }

    public static function checkAge($data){

        if($data->age === 1){ $age = '0～5歳';}
        if($data->age === 2){ $age = '6～9歳';}
        if($data->age === 3){ $age = '10～14歳';}
        if($data->age === 4){ $age = '15～18歳';}
        if($data->age === 5){ $age = '19～22歳';}
        if($data->age === 6){ $age = '23～30歳';}
        if($data->age === 7){ $age = '31～40歳';}
        if($data->age === 8){ $age = '41～50歳';}
        if($data->age === 9){ $age = '51～60歳';}
        if($data->age === 10){ $age = '61歳～';}
        
        return $age;
    }

    public static function checkPstartage($data){

        if($data->pstartage === 1){ $pstartage = '0～5歳';}
        if($data->pstartage === 2){ $pstartage = '6～9歳';}
        if($data->pstartage === 3){ $pstartage = '10～14歳';}
        if($data->pstartage === 4){ $pstartage = '15～18歳';}
        if($data->pstartage === 5){ $pstartage = '19～22歳';}
        if($data->pstartage === 6){ $pstartage = '23～30歳';}
        if($data->pstartage === 7){ $pstartage = '31～40歳';}
        if($data->pstartage === 8){ $pstartage = '41～50歳';}
        if($data->pstartage === 9){ $pstartage = '51～60歳';}
        if($data->pstartage === 10){ $pstartage = '61歳～';}

        return $pstartage;
    }

    public static function checkTotalhistory($data){

        if($data->totalhistory === 1){ $totalhistory = '～1年';}
        if($data->totalhistory === 2){ $totalhistory = '1～3年';}
        if($data->totalhistory === 3){ $totalhistory = '3～5年';}
        if($data->totalhistory === 4){ $totalhistory = '5～7年';}
        if($data->totalhistory === 5){ $totalhistory = '7～10年';}
        if($data->totalhistory === 6){ $totalhistory = '10～15年';}
        if($data->totalhistory === 7){ $totalhistory = '15～20年';}
        if($data->totalhistory === 8){ $totalhistory = '20～30年';}
        if($data->totalhistory === 9){ $totalhistory = '30年～';}

        return $totalhistory;
    }

    public static function checkPianohon($data){

        if($data->pianohon === 1){ $pianohon = 'グランドピアノ';}
        if($data->pianohon === 2){ $pianohon = 'アップライトピアノ';}
        if($data->pianohon === 3){ $pianohon = '電子ピアノ';}
        if($data->pianohon === 4){ $pianohon = 'キーボードその他';}
        if($data->pianohon === 5){ $pianohon = '所持なし';}
        
        return $pianohon;
    }

    public static function checkSoundproofhon($data){
        if ($data->soundproofhon === 0) {
            $soundproofhon = '有';
        } else {
            $soundproofhon = '無';
        }

        return $soundproofhon;
    }


}