<!DOCTYPE html>
<html>
<head>
	<title>Inventorizacija</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-8">
				<table class="table table-inverse">
				  <thead>
				    <tr>
				      <th>Prekes kodas</th>
				      <th>Pavadinimas</th>
				      <th>Aprašymas</th>
				      <th>Kaina</th>
				      <th>Kiekis</th>
				      <th>Galutine suma</th>
				      <th>Data</th>
				    </tr>
				  </thead>
				  <tbody id="tr">
				  </tbody>
				</table>
			</div>
			<div class="col-4">
	    	<input class="form-control" type="text" id="pirmas" placeholder="Prekes kodas">
	    	<input class="form-control" type="text" id="antras" placeholder="Pavadinimas">
	    	<input class="form-control" type="text" id="trecias" placeholder="Aprašymas">
	    	<input class="form-control" type="text" id="ketvirtas" placeholder="Kaina">
	    	<input class="form-control" type="text" id="penktas" placeholder="Kiekis">
	    	
	    	<button onclick="add()" class="btn">Add</button>
	   		</div>
	    
		</div>
	</div>
<script >
	function add() {

	var table = document.getElementById("tr");
	var pirmas = document.getElementById('pirmas').value;
	var antras = document.getElementById('antras').value;
	var trecias = document.getElementById('trecias').value;
	var ketvirtas = document.getElementById('ketvirtas').value;
	var penktas = document.getElementById('penktas').value;
	if (pirmas == 0) {
		alert('Nieko nera įvesta');
	} else if (antras == 0) {
		alert('Nieko nera įvesta');
	} else if (trecias == 0) {
		alert('Nieko nera įvesta');
	} else if (ketvirtas == 0) {
		alert('Nieko nera įvesta');
	} else if (penktas == 0) {
		alert('Nieko nera įvesta');
	
	} else {

	ketvirtas = parseInt(ketvirtas);
	penktas = parseInt(penktas);
	var n = new Date();
	var m = n.getMonth();
	if (m == 0) {
		m = "Sausis";
	}	else if (m == 1) {
		m = "Vasaris"
	}	else if (m == 2) {
		m = "Kovas"
	}	else if (m == 3) {
		m = "Balandis"
	}	else if (m == 4) {
		m = "Gegužė"
	}	else if (m == 5) {
		m = "Birželis"
	}	else if (m == 6) {
		m = "Liepa"
	}	else if (m == 7) {
		m = "Rugpjūtis"
	}	else if (m == 8) {
		m = "Rugsėjis"
	}	else if (m == 9) {
		m = "Spalis"
	}	else if (m == 10) {
		m = "Lapkritis"
	}	else if (m == 11) {
		m = "Gruodis"
	}	
	
	var suma = ketvirtas + penktas;
	var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    cell1.innerHTML = pirmas;
    cell2.innerHTML = antras;
    cell3.innerHTML = trecias;
    cell4.innerHTML = ketvirtas;
    cell5.innerHTML = penktas;
    cell6.innerHTML = suma;
    cell7.innerHTML =  n.getFullYear() + " " + m + " " + n.getDate() + " " + n.getHours() + ":" + n.getMinutes() + ":" + n.getSeconds();
	}
	}


	function sleep(ms) {
		return new Promise(resolve => setTimeout(resolve, ms));
	}
	async function showtime() {
		while(true) {
			var d = new Date();
			console.log(d);
			document.getElementById("")
			await sleep(1000);
		}
	}
	showtime()
</script>
</body>
</html>