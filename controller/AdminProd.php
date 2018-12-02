<?php

class AdminProd extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ProdutoDAO();
    }

    public function index() {
        $this->listProds();
    }

    public function listProds() {
        $prods = $this->model->getListProdutos();
        if ($prods) {
            echo json_encode($prods);
        } else {
            echo json_encode(null);
        }
    }

    public function prodById($id = null) {
        $prod = $this->model->getProdbyId($id);
        if ($prod) {
            echo json_encode($prod);
        } else {
            echo json_encode(null);
        }
    }

    public function add() {//Recebe dados de produto[nome, ...] via POST
        $msg = ""; //Mensagem de retorno
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $descricao = filter_input(0, 'descricao', 513);
        $qtd = filter_input(0, 'qtd', 513);
        $preco = filter_input(0, 'preco', 513);
        $origem = filter_input(0, 'origem', 513);
        $descontos = implode('<br>', filter_input(0, 'descontos', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY));
        $itens = implode('<br>', filter_input(INPUT_POST, 'itens', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY));

        if ($nome && $descricao && $qtd && $preco && $origem && $descontos && $itens) {
            if ($this->model->insert(new Produto($nome, $descricao, $qtd, $preco, $origem, $descontos, $itens))) {
                $msg = "Produto cadastrado com sucesso!";
            } else {
                $msg = "Erro ao cadastrar produto!";
            }
        } else {
            $msg = "Preencha todos os campos de cadastro!";
        }
        echo $msg;
    }

    public function del() {//Recebe id do produto via POST
        $msg = ""; //Mensagem de retorno
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        if ($id) {
            if ($this->model->delete($id)) {
                $msg = "Produto com ID = $id foi excluído!";
            } else {
                $msg = "Erro ao excluir produto do banco!";
            }
        } else {
            $msg = "Erro na requisição!";
        }
        echo $msg;
    }

    public function edit() {
        $msg = ""; //Mensagem de retorno
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $descricao = filter_input(0, 'descricao', 513);
        $qtd = filter_input(0, 'qtd', 513);
        $preco = filter_input(0, 'preco', 513);
        $origem = filter_input(0, 'origem', 513);
        $descontos = implode('<br>', filter_input(0, 'descontos', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY));
        $itens = implode('<br>', filter_input(INPUT_POST, 'itens', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY));

        if ($id && $nome && $descricao && $qtd && $preco && $origem && $descontos && $itens) {
            if ($this->model->update(new Produto($nome, $descricao, $qtd, $preco, $origem, $descontos, $itens, $id))) {
                $msg = "Produto atualizado com sucesso!";
            } else {
                $msg = "Erro ao atualizar produto!";
            }
        } else {
            $msg = "Preencha todos os campos de cadastro!";
        }
        echo $msg;
    }

}
