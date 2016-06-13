<!DOCTYPE html>
<html>
    
<head>
    <title>Intranet Corporativa - Restaurante</title>    
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>    
    
<body>
    
    <div class="index container">
        

        <?php 
        
        include 'templates/cabecalho.php';

        ?>
        <!--fim cabeçalho-->
        
                
        <div class="conteudo row">
        
            <div class="row cabec_top">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Login do Usuário</h3>
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-12">
                                      <form method="POST" action="valida_usuario.php">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label for="usuario">Usuário:</label>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <input id="usuario" name="usuario" type="text"
                                                            maxlength="10" placeholder="Informe seu login"
                                                            class="form-control" />
                                                  <label id="erro_usuario" class="bg-danger invisivel"></label>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12 margem-campo-form">
                                                  <label for="senha">Senha:</label>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <input id="senha" name="senha" type="password" maxlength="10"
                                                            placeholder="Informe sua senha"
                                                            class="form-control" />

                                              </div>
                                          </div>
                                          <div class="row  margem-campo-form">
                                              <div class="col-md-6">
                                                  <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox" name="lembrar"> Lembrar-me
                                                    </label>
                                                  </div>
                                              </div>
                                              <div class="col-md-6 text-right">
                                                  <input id="enviar" type="submit" class="btn btn-primary" value="Entrar" />
                                              </div>
                                          </div>
                                    </form>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        </div> <!--fim conteudo-->
        
        <?php include 'templates/footer.php' ?>
      
   </div>    
    
    <script type="text/javascript" src="jquery/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
    
</html>