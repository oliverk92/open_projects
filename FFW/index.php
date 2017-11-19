<?php
  session_start();
  $pdo = new PDO('mysql:host=localhost;dbname=ffw', 'root', '');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FFW Heynitz</title>

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 800px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 600px;
}
</style>

  </head>
  <body>
    <h1>Freiwillige Feuerwehr Heynitz</h1>
    <hr>
    <input type="button" name="login" value="Login" id="login">
    <hr>
    <div class="tab">
  <button class="tablinks" onclick="openTab(event, 'default')" id="defaultOpen">&Uuml;bersicht</button>
  <button class="tablinks" onclick="openTab(event, 'Karte')">Karte</button>
  <button class="tablinks" onclick="openTab(event, 'Verwaltung')">Verwaltung</button>
</div>

<div id="default" class="tabcontent">
  <h3>&Uuml;bersicht</h3>
  <ul>
    <li>Nächster Dienst</li>
    <li>Letzter Einsatz</li>
  </ul>
</div>

<div id="Karte" class="tabcontent">
  <h3>Karte</h3>
  <!-- -->
  <iframe height="350" src="http://www.openstreetmap.org/export/embed.html?bbox=13.382538557052614%2C51.07718703250423%2C13.396700620651247%2C51.083051014777475&amp;layer=mapnik" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border: 1px solid black"></iframe>
</div>

<div id="Verwaltung" class="tabcontent">
  <h3>Verwaltung</h3>
  <p>Nutzer hinzufügen</p>
  <p>Nutzerrechte setzen</p>

<table border="1">
  <tr>
    <td>Name</td>
    <td>Blockiert</td>
    <td>Adminrechte</td>
    <td>Karte</td>
  </tr>

</table>
</div>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

  </body>
</html>
