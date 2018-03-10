<?php
header('Content-type: text/html; charset=ISO-8859-1');
include('php_src/header.php');
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
        <li><a href="#">Menu 4</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <!-- TRR: Barra de Nageção Lateral -->
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title alinhaEsq"><span class="glyphicon glyphicon-home"></span>
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
              Casa 1</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse in alinhaEsq">
            <div class="panel-body texto-pequeno">Rua Efigenia Rufino de Souza, 45 / 101 - Colinas 2. Cataguases, MG.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title alinhaEsq"><span class="glyphicon glyphicon-home"></span>
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
              Casa 2</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse alinhaEsq">
            <div class="panel-body texto-pequeno">Rua Manoel Silveira, 271 - Bandeirantes II. Cataguases, MG.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title alinhaEsq"><span class="glyphicon glyphicon-briefcase"></span>
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
              Loja X</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse alinhaEsq">
            <div class="panel-body texto-pequeno">Av. Humberto Mauro, 100 - Centro. Cataguases, MG.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Sensores</h1>
      <table>
      	<tr>
      		<th>Local</th>
      		<th>Sensor</th>
      		<th>Descrição</th>
      		<th>Leitura</th>
      	</tr>
      	<tr>
      		<td>Sala</td>
      		<td>SLum_1</td>
      		<td>Luminosidade Ambiente</td>
      		<td id="Slum_1">200 lumens</td>
      	</tr>
      	<tr>
      		<td>Quarto Casal</td>
      		<td>STemp_1</td>
      		<td>Temperatura</td>
      		<td id="STemp_1">28°C</td>
      	</tr>
      </table>
      <hr>
      <h1>Atuadores</h1>
      <table>
      	<tr>
      		<th>Local</th>
      		<th>Atuador</th>
      		<th>Descrição</th>
      		<th>Status</th>
      		<th>Ação</th>
      	</tr>
      	<tr>
      		<td>Sala</td>
      		<td>ALum_1</td>
      		<td>Luminosidade Ambiente</td>
      		<td>Desligado</td>
      		<td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-flash"></span> Desligar</a></td>
      	</tr>
      	<tr>
      		<td>Quarto Casal</td>
      		<td>ATemp_1</td>
      		<td>Temperatura</td>
      		<td>Ligado</td>
      		<td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-flash"></span> Desligar</a></td>
      	</tr>
      </table>
    </div>
  </div>
</div>

<?php
include('php_src/footer.php');
?>
