/*
 * Script primário do web app Iot Dashboard
*/
var iotdash = angular.module('iotdash', []);

var openWeatherUrl = 'http://api.openweathermap.org/data/2.5/weather?id=&';
var openWeatherAppId = 'APPID=ac3b022087af1a1bc512b92760dbfe9d';

// Controller para sensores. Menu 1 do Dashboard (Home)
iotdash.controller('c_sensores_m1', function($scope){
	
});

//Controller para atuadores. Menu 1 do Dashboard (Home)
iotdash.controller('c_atuadores_m1', function($scope){
	
});



/*Controller para exercícios aula 3. 
* Seleção de Cidades
* Exemplo:
			"id": 707860,
			"name": "Hurzuf",
			"country": "UA",
			"coord": {
			  "lon": 34.283333,
			  "lat": 44.549999
			}

iotdash.controller('listacidades', 
		function($scope, $http){
			$scope.GetData = function(){
								$http.get('city.list.json').then(function(response){
									$scope.id 	= response.id;
									$scope.pais = response.country;
									$scope.nome	= responde.name;
								});
			};
		});
		*/

iotdash.controller('listacidades', function($scope){
		$scope.id = "cid12345";
		$scope.pais = 'BR';
		$scope.nome = 'Ktá';
});

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