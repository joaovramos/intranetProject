<!DOCTYPE html>
<html>
    
<head>
    <title>Intranet Corporativa - Agendamento</title>    
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zabuto_calendar.min.css">
    <link rel="stylesheet" href="css/custom_2.css">
</head>    
    
<body>
    
    <div class="index container">
        
        <?php 
        
        include 'templates/cabecalho.php';
        include 'templates/navbar.php';
        
        
        ?>
        <!--fim cabeçalho-->
        
                
        <div class="conteudo row">
        
          <h2>Agendamento</h2>
        
          <!--<div id="my-calendar"></div> Codigo calendario Zabuto-->
          
           <div id='calendar'></div>
           
        </div> <!--fim conteudo-->
        
        <?php include 'templates/footer.php' ?>
      
   </div>    
    
    <script type="text/javascript" src="jquery/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/zabuto_calendar.min.js"></script>
    <script type="text/javascript" src="js/jquery.calendario.min.js"></script>
</body>
    
</html>