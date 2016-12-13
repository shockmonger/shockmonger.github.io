<?php
if(isset($_POST['message']) && isset($_POST['sender'])) {
    $data = $_POST['message'] . '-' . $_POST['sender'] . "\n";
    $ret = file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>