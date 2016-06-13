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
        include 'templates/navbar.php';
        
        
        ?> 
       
       <!--fim cabeçalho-->
        
                
        <div class="conteudo row">
        
            <h2>Restaurante</h2>
			
            <div class="text-center col-md-12">
                 <div id="myCarousel" class="carousel slide col-md-offset-2">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="img/rest01.jpg" alt="Foto 01">
                    </div>

                    <div class="item">
                      <img src="img/rest02.jpg" alt="Foto 02">
                    </div>

                    <div class="item">
                      <img src="img/rest03.jpg" alt="Foto 03">
                    </div>

                    <div class="item">
                      <img src="img/rest04.jpg" alt="Foto 04">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
              
           
        </div> <!--fim conteudo-->
        
    <?php include 'templates/footer.php' ?>
    
   </div>    
    
    <script type="text/javascript" src="jquery/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
    
</body>
    
</html>