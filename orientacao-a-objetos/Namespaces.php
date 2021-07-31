<?php

/**
 * Name cllisions between code you create, and internal PHP
 * classes/funcitions/constants or third-party classes/functions/constants.
 * 
 * Abilitis to alias (or shorten) Extra_Long_Names designed to alleviate the
 * first problem, improving readability of source code.
 */


 namespace app\models\site;

 class UserModel{

public function cadastrar(){
    return 'Cadastrar com namespace no site';
}

 }

namespace app\models\admin;

class UserModel{
    public function cadastrar(){
        return 'Cadastrar com namespace no admin';
    }

}

use app\models\site\UserModel as user;
use app\models\admin\UserModel as userAdmin;

 $user = new user();
 echo $user->cadastrar();
 

 echo ' <br />';

 $userAdmin = new userAdmin();
 echo $userAdmin->cadastrar();