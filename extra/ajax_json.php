<body>
<script>
function tulostaHello(){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		    document.getElementById("result").innerHTML = this.responseText;
	  }
	};
	xmlhttp.open("GET", "../php/tulostahello.php", true);
	xmlhttp.send();	
}
</script>
<button onclick='tulostaHello();'>Klikkaa</button>
<p>Tulos tähän alle</p>
<p id='result'>
</p>
</body>