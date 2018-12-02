<?php
/**
 * Classe que representa um Produto cadastrado no banco de dados
 *
 * @author Gill
 */
class Produto implements JsonSerializable{
    
    private $id;
    private $nome;
    private $descricao;
    private $qtd;
    private $preco;
    private $origem;
    private $descontos;
    private $itens;
    
    function __construct($nome, $descricao, $qtd, $preco, $origem, $descontos, $itens,$id=null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->qtd = $qtd;
        $this->preco = $preco;
        $this->origem = $origem;
        $this->descontos = $descontos;
        $this->itens = $itens;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQtd() {
        return $this->qtd;
    }

    function getPreco() {
        return $this->preco;
    }

    function getOrigem() {
        return $this->origem;
    }

    function getDescontos() {
        return $this->descontos;
    }

    function getItens() {
        return $this->itens;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQtd($qtd) {
        $this->qtd = $qtd;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setOrigem($origem) {
        $this->origem = $origem;
    }

    function setDescontos($descontos) {
        $this->descontos = $descontos;
    }

    function setItens($itens) {
        $this->itens = $itens;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    
}
