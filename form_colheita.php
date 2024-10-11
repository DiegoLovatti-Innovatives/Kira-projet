
<?php require_once("validador_de_acesso.php");?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Kira</title>
 <?php require_once("conexao.php");?>
  </head>

  <body class="colheita">

  <?php include_once("nav.php");?>

    <div class="container">    
      <div class="row">

        <div class="janela">
          <div class="card transparente">
            <div class="card-header">
              Registro de Colheita
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="Post" action="registra_colheita.php">
                    <div class="form-group">
                        <label>Funcionario</label>
                        <select class="form-control">
                          <option>Funcionario 1</option>
                          <option>Funcionario 2</option>
                          <option>Funconario 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Talhão</label>
                        <select class="form-control">
                          <option>Talhão 1</option>
                          <option>Talhão 2</option>
                          <option>Talhão 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lote</label>
                        <select class="form-control">
                          <option>Lote 1</option>
                          <option>Lote 2</option>
                          <option>Lote 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Talhão</label>
                        <select class="form-control">
                          <option>Talhão 1</option>
                          <option>Talhão 2</option>
                          <option>Talhão 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="data">Data da colheita:</label>
                      <input type="date" class="form-control" id="data" placeholder="Selecione uma data" required>
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <select class="form-control">
                          <option>Quantidade 1</option>
                          <option>Quantidade 2</option>
                          <option>Quantidade 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Forma de colheita</label>
                        <select class="form-control">
                          <option>Forma 1</option>
                          <option>Forma 2</option>
                          <option>Forma 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Umidade</label>
                      <input type="number" class="form-control" placeholder="Umidade">
                    </div>
                    <div class="form-group">
                        <label>Forma de Preparo</label>
                        <select class="form-control">
                          <option>Forma 1</option>
                          <option>Forma 2</option>
                          <option>Forma 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Escolha o tipo</label>
                      <select class="form-control">
                        <option>tipo 1</option>
                        <option>tipo 2</option>
                        <option>tipo 3</option>
                        <option>tipo 4</option>
                        <option>tipo 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Observação</label>
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="menu.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
