<?php
include_once('conexao.php')
?>
 <!DOCTYPE html>
  <html>
    <head>
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
  <body>
    <h1>Lista de Produtos</h1>
    <div class="row">
        <div class="col s12 m8 push-m2">
            <h3 class="light">Produtos Cadastrados</h3>
            <table class="Striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Produtos</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Valor</th>
                    </tr>
                </thead>
            
            <tbody>
                <?php
                $sql = "SELECT * FROM tabelaimg";
                $resultado = mysqli_query($conexao, $sql);
                 
                if(mysqli_num_rows($resultado) > 0)
                {
                    while($dados = mysqli_fetch_array($resultado))
                    {
                      ?>
                      <tr>
                        <td><?php echo $dados['codigo'] ?></td>
                        <td><?php echo $dados['produto'] ?></td>
                        <td><?php echo $dados['descricao'] ?></td>
                        <td><?php echo $dados['imagem'] ?></td>
                        <td><?php echo $dados['valor'] ?></td>
                      </tr>
                    <?php
                    }
                    }
                    ?>
               
                </tbody>
              </table><br>
              <a href="formprodutos.html" class="btn">Adicionar Produtos</a>
        </div>
    </div>
   <!--JavaScript at end of body for optimized loading-->
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>