<?php

//Importa o arquivo pessoa.php com maior prioridade
require_once "../model/pessoa.php";

//Classe pessoa controller
class PessoaController{
    private $pessoa;

    //Método construtor da classe PessoaController
    public function __construct(){
        $this->pessoa = new Pessoa();
        $this->inserir();
    }

    //Método para inserir os valores do formulário em seus respectivos atributos equivalentes(na classe pessoa)
    public function inserir(){
            $this->pessoa->setNome($_POST['nome']);
            $this->pessoa->setEndereco($_POST['endereco']);
            $this->pessoa->setBairro($_POST['bairro']);
            $this->pessoa->setCep($_POST['cep']);             
            $this->pessoa->setCidade($_POST['cidade']);             
            $this->pessoa->setEstado($_POST['estado']);            
            $this->pessoa->setTelefone($_POST['telefone']);             
            $this->pessoa->setCelular($_POST['celular']);

            //Armazena o método inserir dentro do atributo pessoa
            $this->pessoa->inserir();

    }
}
//Cria um objeto da classe PessoaController
new PessoaController();

?>