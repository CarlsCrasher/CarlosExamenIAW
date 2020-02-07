function quotesJS(){
	var info = document.getElementById("info").value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		    document.getElementById("demo").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "main.php?quote=" + info, true);
	xhttp.send();

}