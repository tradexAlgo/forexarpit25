<?php
namespace App\Gates;

class AdminGate{
    public function check_admin($user){
        if($user->email==='codingcrazie@gmail.com'){
            return true;
        }else{
            return false;
        }
    }  
}

