function search() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("name").innerHTML = this.responseText;
      }
    xhttp.open("GET", "myse/about.php");
    xhttp.send();
}