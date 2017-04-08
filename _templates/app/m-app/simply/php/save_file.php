<?php
    $data = $_POST['data'];
    $myfile = fopen("../../index.html", "w") or die("Unable to open file!");
    $str = str_replace('<script src="js/simply.js"></script>',' ',$data);






    $str = str_replace('<button id="clickme">Click</button>',' ',$str);



    fwrite($myfile, $str);
    fclose($myfile);
    echo "Written Successfully!";
    header('Location: ../../');

    $dir = "../../../test";

    include 'zip_convert.php';

?>
