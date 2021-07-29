<?php

class Pessoa{

	public $nome = 'Domicio: estudando php';

	public function  __construct( $nome ){
		echo 'Meu nome é ' .$this->nome;
	}

	public function meusDados(){
		return ' meus dados ';

	}

}
$pessoa = new Pessoa(' Domicio, programador aprendiz');
//echo $pessoa->meusDados();s