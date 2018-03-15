/*
 * 
function gera_randomico(){
	setInterval(alertFunc, 3000);

	var rdm = Math.floor((Math.random() * 100) + 1);
	document.getElementById('Stemp_1').innerHTML = rdm;

}
 */
/*
function geraRandomico(tempo, elementId, undMed){
	var elemento = document.getElementById(elementId);
	setTimeout(function(){
						var rdm = Math.floor((Math.random() * 100) + 1);
						elemento.innerHTML = rdm + undMed;
				}, tempo);
}*/

function geraRandomico(){
	var table = document.getElementById("sensores");
	for (var i = 1; i < table.getElementsByTagName("tr").length; i++) {
		var rowCel = table.getElementsByTagName("tr")[i].cells;
		var val = rowCel.item(3);
		
		var rdm = Math.floor((Math.random() * 100) + 1);
		val.innerHTML = rdm;
	}	
}

function alteraEstado(elementId){
	if (document.getElementById(elementId).innerHTML == 'Desligar'){
		document.getElementById(elementId).innerHTML = 'Ligar';
		document.getElementById(elementId+'-icon').setAttribute('src', 'imagens/off.png');
	} else {
		document.getElementById(elementId).innerHTML = 'Desligar';
		document.getElementById(elementId+'-icon').setAttribute('src', 'imagens/on.png');
	}
}

/*
function alteraEstado(elementId, oldClassName){
	var newClassName;
	var newValor;
	if (oldClassName == 'btn btn-success') {
		newClassName = 'btn btn-danger';
		newValor	 = ' Desligar';
	}else{
		newClassName = 'btn btn-success';
		newValor	 = ' Ligar';
	}
	document.getElementById(elementId).setAttribute('class', newClassName);
	document.getElementById(elementId).innerHTML = newValor;
}*/