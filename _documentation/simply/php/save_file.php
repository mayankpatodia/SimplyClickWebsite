<?php
    $data = $_POST['data'];
    $myfile = fopen("../../index.html", "w") or die("Unable to open file!");
    $str = str_replace('<link rel="stylesheet" href="simply/css/myEdit.css" type="text/css">',' ',$data);
    $str = str_replace('<div id="clickme" class="glyphicon glyphicon-save"></div>',' ',$data);
    $str = str_replace('<script src="simply/simply.js"></script>',' ',$data);




    fwrite($myfile, $str);
    fclose($myfile);
    echo "Written Successfully!";
    header('Location: ../../');


     include 'zip_convert.php';

?>
