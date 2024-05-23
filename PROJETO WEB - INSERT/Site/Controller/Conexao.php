<?php
    class Conexao {
        //Cria atributos da conexão e define valores para conseguir se conectar com o banco de dados
        private $host ="localhost";
        private $usuario ="root";
        private $senha ="";
        private $banco ="exemplo_aula_pw";
        private $conexao;

        //Método construtor da classe conexão e também mostra um diagnóstico se alguma falha na conexão acontecer
        public function __construct(){
            $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

            if ($this->conexao->connect_error) {
                die("Falha na conexão: ".$this->conexao->connect_error);
            }
        }
        //Getter da classe conexão
        public function getConexao(){
            return $this->conexao;
        }
    }

?>