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
        include 'templates/navbar.php';
        
        
        ?>
        
        <!--fim cabeçalho-->
        
                
        <div class="conteudo row">
        
			<h2>Lista Ramais</h2>
			  
			  <div class="ramalList col-md-12">
                  <div class="leftSide col-md-6">

                      <table class="table table-bordered">
                        <thead>
                          <tr class="warning">
                            <th>Setor</th>
                            <th>Funcionário</th>
                            <th>Ramal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>TI</td>
                            <td>Joao</td>
                            <td>8101</td>
                          </tr>
                          <tr>
                            <td>Comercial</td>
                            <td>Maria</td>
                            <td>8111</td>
                          </tr>
                          <tr>
                            <td>Suprimentos</td>
                            <td>Joaquim</td>
                            <td>8133</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                  
                   <div class="rightSide col-md-6">

                      <table class="table table-bordered">
                        <thead>
                          <tr class="warning">
                            <th>Setor</th>
                            <th>Funcionário</th>
                            <th>Ramal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>TI</td>
                            <td>Joao</td>
                            <td>8101</td>
                          </tr>
                          <tr>
                            <td>Comercial</td>
                            <td>Maria</td>
                            <td>8111</td>
                          </tr>
                          <tr>
                            <td>Suprimentos</td>
                            <td>Joaquim</td>
                            <td>8133</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
               </div>
            
           
        </div> <!--fim conteudo-->
        
       <?php include 'templates/footer.php' ?>
      
   </div>    
    
    <script type="text/javascript" src="jquery/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
    
</html>