<?php

//Importa o arquivo conexão.php
require_once '../controller/conexao.php'; 

class Pessoa{
    //Cria atributos da classe pessoa
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;
    
    //Cria getters e setter da classe pessoa
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }

    //Método construtor cria um objeto da classe Conexão e armazena no atributo conexão da classe pessoa
    public function __construct(){
        $this->conexao = new Conexao();
    }

    //Cria uma função para inserir os dados para o banco de dados
    public function inserir(){
        //Define o nome da tabela no banco de dados, nomes dos campos e quantidade de valores
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        return $stmt->execute();
    }
}

?>