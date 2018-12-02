<?php

class ProdutoDAO extends Model {

    private $listProdutos;

    public function __construct() {
        parent::__construct();
        $this->listProdutos = [];
    }

    public function getListProdutos() {
        $sql = "SELECT * FROM produto";
        $result = $this->ExecuteQuery($sql, []);
        foreach ($result as $row) {
            $prod = new Produto($row['nome'], $row['descricao'], $row['qtd'], 
               $row['preco'], $row['origem'], $row['descontos'],
                $row['itens'], $row['id']);
            $this->listProdutos[] = $prod;
        }
        return $this->listProdutos;
    }
    
    public function getProdById($id) {
        $sql = "SELECT * FROM produto WHERE id=:id";
        $result = $this->ExecuteQuery($sql, [':id'=>$id]);
        foreach ($result as $row) {
            $prod = new Produto($row['nome'], $row['descricao'], $row['qtd'], 
               $row['preco'], $row['origem'], $row['descontos'],
                $row['itens'], $row['id']);
            return $prod;
        }
        return null;
    }

    public function insert(Produto $prod) {
        $sql = "INSERT INTO produto(nome,descricao,qtd,preco,origem,descontos,itens)"
                . " VALUES(:no,:desc,:qtd,:prec,:ori,:desco,:it)";
        
        $param = [':no' => $prod->getNome(), ':desc' => $prod->getDescricao(),
            ':qtd' => $prod->getQtd(), ':prec' => $prod->getPreco(),
            ':ori' => $prod->getOrigem(),':desco' =>  $prod->getDescontos(),
            ':it' => $prod->getItens()];
        
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function delete($id) {
        $sql = "DELETE FROM produto WHERE id = :id";
        $result = $this->ExecuteCommand($sql, [':id'=>$id]);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    public function update(Produto $prod) {
        $sql = "UPDATE produto SET nome = :no,descricao =:desc,qtd=:qtd,"
                . "preco=:prec,origem=:ori,descontos=:desco,itens=:it"
                . " WHERE id = :id";       
        $param = [':no' => $prod->getNome(), ':desc' => $prod->getDescricao(),
            ':qtd' => $prod->getQtd(), ':prec' => $prod->getPreco(),
            ':ori' => $prod->getOrigem(),':desco' =>  $prod->getDescontos(),
            ':it' => $prod->getItens(),':id'=>$prod->getId()];
        
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }

}
