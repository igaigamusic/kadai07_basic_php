<!-- データ登録 -->
<?php
    $name = $_POST["name"];
    echo $name;

    $file  = fopen("data.csv", "a");
    fwrite($file, $name."\n");
    fclose($file);

    header("Location: index.php");
    exit;

?>