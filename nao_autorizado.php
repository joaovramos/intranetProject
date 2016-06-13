<!DOCTYPE html>
<html>
    
<head>
    <title>Intranet Corporativa - Ramais</title>    
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
        
             <div class="row margem-topo">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                          <div class="panel-heading">
                            <h3 class="panel-title">Usuário não autorizado!</h3>
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-12 text-justify">
                                      Não foi possível realizar o login no sistema com as credenciais informadas. Por favor tente novamente.
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12 text-center">
                                      <a class="btn btn-primary margem-campo-form" href="index.php" role="button">Voltar</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        </div> <!--fim conteudo-->
        
        <?php include 'templates/footer.php' ?>index.php
      
   </div>    
    
    <link href="bootstrap/js/bootstrap.min.js"/></link>
</body>
    
</html>