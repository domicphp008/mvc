<?php

class Pessoa{

	static $nome = 'Domicio Jose da Silva';

	public static function dadosPessoa(){
		return  'Domicio';
	}

}

echo Pessoa::$nome;