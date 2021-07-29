<?php

// Classe abstrada nao pode ser instanciada, somente herdada
// Models sao as classe para trabalhar com o banco de dados
class Crud{

    public function cadastrar(){
        return 'Domicio,   Aula 11 Classe abstrata , Domicio,  Aula 12 Níveis de acesso ';
         
    }

}

class UserModel extends Crud{

}

//$crud = new Crud();
$user = new UserModel();
/*echo  $user->nome();  ==> Aqui dtem que mudar o (nome) por (cadastrar) senão dá erro*/
echo  $user->cadastrar();