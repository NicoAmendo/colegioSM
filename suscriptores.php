
<?php

$nombre = $_POST['email'];

echo $nombre;

$json = json_encode($nombre);
$bytes = file_put_contents("myfile.json", $json); 

$log_message =  $nombre;
$logFile = fopen("./log.txt", 'a');
fwrite($logFile, "\n" . date("d/m/Y H:i:s") . " $log_message") or die("Error escribiendo en el archivo");
fclose($logFile);

?>