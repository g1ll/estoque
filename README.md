# estoque
Backend em PHP do sistema de estoque de produtos para o trabalho de Ajax da disciplina de CPW2-IFSUL.

O sistema retorna os produtos cadastrados no banco de dados em formato JSON. Para interagir com o banco e usar o sistema através de requisições HTTP via Ajax siga as seguintes instruçes:

<h3>INSTALAÇÃO</h3>
<ol>
  <li>Download:
    <ul>
      <li>Faça download do sistema ou clone através do repositório. </li>
    </ul>
</li>
   <li>Instalação:
            <ul>
                  <li>Apenas extraia para a pasta do servidor HTTP (Apache).</li>
                   <li>Instalar o banco de dados de acordo com o arquivo <b><i>db_estoque.sql</i></b> na pasta <i>model</i></li>
            </ul>
       </li>
  <li>Configuração:
    <ul>
      <li>Configure o arquivo <b><i>.htaccess</i></b>
      <pre><code>&lt;IfModule mod_rewrite.c&gt;
          RewriteEngine On
          RewriteBase /estoque/
          RewriteCond $1 !^(index\.php|images|assets|robots\.txt|bootstrap.min.css\.map)
          RewriteCond %{REQUEST_FILENAME} !-f
          RewriteCond %{REQUEST_FILENAME} !-d
          RewriteRule ^(.*)$ index.php?query=$1 [L]
        &lt;/IfModule&gt;
        &lt;IfModule !mod_rewrite.c&gt;
           ErrorDocument 404 /index.php
        &lt;/IfModule&gt; </code></pre>  
      Trocar onde diz "estoque" para o caminho e pasta no servidor onde o sistema foi extraído.
      </li>
      <li>Configure o arquivo <b><i>config.php</i></b>
          <pre><code> &lt;?php
//Inicializa&#231;&#227;o da vari&#225;vel $config
unset($config);
$config = new stdClass();
$config-&gt;defaultClass = &quot;AdminProd&quot;;
//Database
$config-&gt;dbuser = &#39;root&#39;;
$config-&gt;dbpassword = &#39;&#39;;//modificar a senha caso seja necess&#225;rio
$config-&gt;dbname = &#39;estoque&#39;;//nome do banco
$config-&gt;dbhost = &#39;localhost&#39;;//nome do servidor
$config-&gt;dbdrive = &#39;mysql&#39;;</code></pre>            
          </li>
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
      <ul><li>Gerar requisição Http GET para a seguinte URL: <br>http://dominio/estoque/AdminProd/<b><i>prodById</i></b>/<b><i>ID</i></b><br> o ID deverá ser passado na url depois do nome da classe AdminProd.
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


