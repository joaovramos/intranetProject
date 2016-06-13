<!DOCTYPE html>
<html>

<head>
    <title>Intranet Corporativa - index</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="index container">

        <?php

        include 'templates/cabecalho.php';
        include 'templates/navbar.php';


        ?><!--fim cabeçalho-->

            <div class="conteudo row">

              <div class="col-sm-3">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-info">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-flash">
                              </span>Links</a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                          <span class="text-primary"></span><a target='_blank' href="http://suporte/chamados">GLPI</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="text-success"></span><a target='_blank' href="https://10.0.0.101:444">Fortigate</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="text-info"></span><a target='_blank' href="https://10.0.5.1/era">ESET ERA</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="text-success"></span><a target='_blank' href="https://10.0.0.8/">PRTG Admin</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <span class="text-success"></span><a target='_blank' href="http://10.0.5.6/">D-Link Controller</a>
                                      </td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-info">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-phone-alt">
                              </span>Telefonia</a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                          <a class="movel" href="#ti_tel_movel">Movel</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <a href="#">Fixa</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <a href="#">Modens</a>
                                      </td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-info">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-pencil">
                              </span>Indicadores</a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                          <a href="#">Alimentar</a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <a href="#">Progressão</a>
                                      </td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                  </div>


                </div>
                </div>

                <div class="col-sm-9">
                    <div class="panel panel-info">
                      <div class="panel-heading">Sobre os Funcionários</div>
                      <div id="conteudo_ti" class="panel-body">
                          <p class="tab">bla bla bla</p>
                      </div>
                    </div>
                </div>

            </div><!--fim conteudo-->

        <?php include 'templates/footer.php' ?>

    </div><!--fim Container-->
    <script type="text/javascript" src="jquery/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
