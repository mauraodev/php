<?php 

class Funcionario {

    private $_nome;
    private $_salario;
    private $_lista;

    public function __construct($nome, $salario) {

        $this->setNome($nome);
        $this->setSalario($salario);
        $this->setLista();
    }

    public function setNome($nome)
    {
        $this->_nome = $nome;
    }

    public function getNome()
    {
        return $this->_nome;
    }

    public function setSalario($salario)
    {
        $this->_salario = $salario;
    }

    public function getSalario()
    {
        return $this->_salario;
    }

    public function setLista() {
        $this->_lista[$this->getNome()] = array('nome' => $this->getNome(), 'salario' => $this->getSalario());
    }

    public function getLista() {
        return $this->_lista;
    }

}