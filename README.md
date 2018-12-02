# estoque
Backend em PHP do sistema de estoque de produtos para o trabalho de Ajax da disciplina de CPW2-IFSUL.

O sistema retorna os produtos cadastrados no banco de dados em formato JSON. Para interagir com o banco e usar o sistema através de requisições HTTP via Ajax siga as seguintes instruçes:

<h3>INSTALAÇÃO</h3>
<ol>
</li>
      <ul>
        <li>Faça download do sistema ou clone através do repositório. Extraia para a pasta do servidor HTTP (Apache).</li>        </ul>
  </li>
  <li>Configuração:
    <ul>
      <li>Configure o arquivo <b><i>.htaccess</i></b>
        <IfModule mod_rewrite.c>
          RewriteEngine On
          RewriteBase /estoque/
          RewriteCond $1 !^(index\.php|images|assets|robots\.txt|bootstrap.min.css\.map)
          RewriteCond %{REQUEST_FILENAME} !-f
          RewriteCond %{REQUEST_FILENAME} !-d
          RewriteRule ^(.*)$ index.php?query=$1 [L]
        </IfModule>
        <IfModule !mod_rewrite.c>
           ErrorDocument 404 /index.php
        </IfModule> 
      Trocar onde diz "estoque" para o caminho e pasta no servidor até a raiz do sistema.
      </li>
      <li>Configure o arquivo <b><i>config.php</i></b></li>
    </ul>
    </li>
</ol>
<h3>INSTRUÇÕES PARA O USAR O CRUD BACKEND</h3>
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


