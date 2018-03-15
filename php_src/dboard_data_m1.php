<script>
	setInterval(geraRandomico, 5000);
</script>

<h2 class="text-left">Sensores</h1>
<table class="texto-pequeno" id="sensores">
	<tr>
		<th>Local</th>
		<th>Sensor</th>
		<th>Descrição</th>
		<th>Leitura</th>
	</tr>
	<tbody class="alinhaEsq">
		<tr>
			<td>Sala</td>
			<td>SLum_1</td>
			<td>Luminosidade</td>
			<td id="Slum_1">200</td>
		</tr>
		<tr>
			<td>Quarto Casal</td>
			<td>STemp_1</td>
			<td>Temperatura</td>
			<td id="Stemp_1">28</td>
		</tr>
	</tbody>
</table>
<hr>
<h2 class="text-left">Atuadores</h1>
<table class="texto-pequeno" >
	<tr>
		<th>Local</th>
		<th>Atuador</th>
		<th>Descrição</th>
		<th>Status</th>
		<th>Ação</th>
	</tr>
	<tbody class="alinhaEsq">
		<tr>
			<td>Sala</td>
			<td>ALum_1</td>
			<td>Luminosidade</td>
			<td><img id="ALum_1-icon" src="imagens/on.png"></td>
			<td><button id="ALum_1" class="btn btn-primary" onClick="alteraEstado(this.id)">Desligar</button></td>
		</tr>
		<tr>
			<td>Quarto Casal</td>
			<td>ATemp_1</td>
			<td>Temperatura</td>
			<td><img id="ATemp_1-icon" src="imagens/off.png"></td>
			<td><button id="ATemp_1" class="btn btn-primary" onClick="alteraEstado(this.id)">Ligar</button></td>
		</tr>
	</tbody>
</table>