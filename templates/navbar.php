<?php
session_start();

?>

<div class="navbar row">

            <nav class="navbar navbar-default col-md-10">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="ti.php">HOME</a>
				  <a class="navbar-brand" href="noticias.php">Informativos</a>
                  <a class="navbar-brand" href="ramais.php">Ramais</a>
                  <a class="navbar-brand" href="downloads.php">Downloads</a>
                  <a class="navbar-brand" href="restaurante.php">Restaurante</a>
                  <a class="navbar-brand" href="agendamento.php">Agendamento</a>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Pesquisar">
                    </div>
                       <button type="submit" class="btn btn-default">Buscar</button>
                  </form>
                </div>
              </div>
            </nav>

                <div class="col-md-2">
                    <div class="logout">Logado como: <?php echo $_SESSION['usuario']; ?></div>
                    <a href="logout.php">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-log-out"></span> Log out
                        </button>
                    </a>
                </div>
            <!--<a href="login.php"><button type="submit" class="btn btn-success col-md-1 col-md-offset-1">Login</button></a>-->
        </div>
