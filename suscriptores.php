
<?php

$nombre = $_POST['email'];

echo $nombre;

$log_message =  $nombre;
$logFile = fopen("./log.txt", 'a');
fwrite($logFile, "\n" . date("d/m/Y H:i:s") . " $log_message") or die("Error escribiendo en el archivo");
fclose($logFile);

?>