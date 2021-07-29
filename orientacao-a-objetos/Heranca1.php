<?php

class Heranca1{

	public $nome = 'Domicio Silva';

	public function listar( $tabela){
		return 'listar todos os dados da tabela ' .$tabela;
	}

	public function deletar( $id){
		return 'deletar o registro ' .$id;
	}

	public function meusDados(){
		return 'meus dados';

	}

}
//$pessoa = new Heranca1(' Domicio, programador aprendiz');
//echo $pessoa->meusDados();