<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css" />
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "chouquettesafci@";
$dbname = "Gallerie_Documents_PDF";
$nodeList=array();
$csv=fopen("listedesfichesjs.csv","listedesficheshtml.csv","listedesfichescss.csv","w");





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  Numerofiche,Titre,Description,Fichier FROM listedesficheshtml";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    echo'<table><tr><th>Numerofiche</th><th>Titre</th><th>Description</th><th>Fichier</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'. $row["Numerofiche"] .'</td><td>'. $row["Titre"] .'</td><td>'. $row["Description"] .'</td><td>'.  $row["Fichier"].'</td></tr>'."<br>";  
    }
    echo'</table>';
} 
else {
    echo "0 results";
}

fclose($csv);
$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  Numerofiche,Titre,Description,Fichier FROM listedesfichescss";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   
    echo'<table><tr><th>Numerofiche</th><th>Titre</th><th>Description</th><th>Fichier</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'. $row["Numerofiche"] .'</td><td>'. $row["Titre"] .'</td><td>'. $row["Description"] .'</td><td>'.  $row["Fichier"].'</td></tr>'."<br>";
    }
    echo'</table>';
} else {
    echo "0 results";
}

fclose($csv);
$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  Numerofiche,Titre,Description,Fichier FROM listedesfichesjs";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    echo'<table><tr><th>Numerofiche</th><th>Titre</th><th>Description</th><th>Fichier</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'. $row["Numerofiche"] .'</td><td>'. $row["Titre"] .'</td><td>'. $row["Description"] .'</td><td>'.  $row["Fichier"].'</td></tr>'."<br>";
    }
    echo'</table>';
} else {
    echo "0 results";
}

fclose($csv);
$conn->close();


?>
    
</body>
</html>