<?php

    session_start();
    // $dir = "".dirname(dirname(dirname(__FILE__)));

    // $search = '\\';
    // $tmp = explode($search,$dir);
    // $dir_name = end($tmp);
    $zip_file = $_SESSION['file_name'].'.zip';

    set_time_limit(0); // disable the time limit for this script

    $path = "../../../"; // change the path to fit your websites document structure

    $dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $zip_file); // simple file name validation
    $dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); // Remove (more) invalid characters
    $fullPath = $path.$dl_file;

    if ($fd = fopen ($fullPath, "r")) {
        $fsize = filesize($fullPath);
        $path_parts = pathinfo($fullPath);
        $ext = strtolower($path_parts["extension"]);
        switch ($ext) {
            case "pdf":
            header("Content-type: application/pdf");
            header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
            break;
            // add more headers for other content types here
            default;
            header("Content-type: application/octet-stream");
            header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
            break;
        }
        header("Content-length: $fsize");
        header("Cache-control: private"); //use this to open files directly
        while(!feof($fd)) {
            $buffer = fread($fd, 2048);
            echo $buffer;
        }
    }
    fclose ($fd);
    echo "Done";
?>
