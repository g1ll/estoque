# estoque
Backend em PHP do sistema de estoque de produtos para o trabalho de Ajax da disciplina de CPW2-IFSUL.

O sistema retorna os produtos cadastrados no banco de dados em formato JSON. Para interagir com o banco e usar o sistema através de requisições HTTP via Ajax siga as seguintes instruçes:
<h3>INSTRUÇÕES</h3>
<ol>
  <li>Listar : 
    <ul><li>Gerar requisição Http GET para as seguintes URLS: <br>http://dominio/estoque/AdminProd/ ou http://dominio/estoque/AdminProd/listProds</li>
    <li>Retorno: ARRAY JSON com lista de produtos cadastrados</li>
    </ul>
    </li>
    <li>
      Retornar Único:
      <ul><li>Gerar requisição Http GET para as seguinte URL: <br>http://dominio/estoque/AdminProd/<b><i>ID</i></b><br> o ID deverá ser passado na url depois do nome da classe AdminProd.
        </li>
    <li>Retorno: OBJETO JSON com o produto cadastrado de acordo com o ID</li>
    </ul>
    </li>
  
  <li>Cadastrar
    <ul>
      <li>Gerar requisição Http <b>POST</b> para a seguinte URL: <br>http://dominio/estoque/AdminProd/<b><i>add</i></b><br>os seguintes parâmetros deverão ser passados:
          <ul>
            <li>descontos</li>
                <li>descricao</li>
                <li>itens</li>
                <li>nome</li>
                <li>origem</li>
                <li>preco</li>
                <li>qtd</li>
            </ul>
        </li>
    <li>Retorno:STRING com mensagem de confirmação !</li>
    </ul>
      
  </li>
  
  <li>
  Editar:
      <ul><li>Gerar requisição Http <b>POST</b> para a seguinte URL: <br>http://dominio/estoque/AdminProd/<b><i>edit</i></b><br>os seguintes parâmetros deverão ser passados:
          <ul>
            <li>descontos</li>
                <li>descricao</li>
                <li>id</li>
                <li>itens</li>
                <li>nome</li>
                <li>origem</li>
                <li>preco</li>
                <li>qtd</li>
            </ul>
        </li>
    <li>Retorno: STRING com mensagem de confirmação !</li>
    </ul>
    </li>
  
  </li>
  <li>
  Deletar:
      <ul><li>Gerar requisição Http <b>POST</b> para a seguinte URL: <br>http://dominio/estoque/AdminProd/<b><i>del</i></b><br>o ID deverá ser passado como parâmetro:
          <ul> <li>id</li>                
            </ul>
        </li>
    <li>Retorno: STRING com mensagem de confirmação !</li>
    </ul>
    </li>
  
  </li>
</ol>
