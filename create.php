<?php
$txt = "data.txt"; 
if (isset($_POST['message']) && isset($_POST['sender'])) { // check if both fields are set
    $fh = fopen($txt, 'a'); 
    $txt=$_POST['message'].' - '.$_POST['sender']; 
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
?>