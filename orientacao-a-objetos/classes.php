<?php 

class Pessoa{

	/**
	 *  Atributo sao as Variaveis
	 */
	public $nome;
	public $idade;
	/**
	 *  Metodos sao as funcoes
	 */

	public function meusDados(){
		return 'meu nome é Domicio';
	}

	public function dadosPessoa(){
		return $this->meusDados();

	}

}
/** Instanciar classe
 */
$pessoa = new Pessoa();
echo $pessoa->dadosPessoa();

 ?>