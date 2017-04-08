<?php
function recurse_copy($src,$dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($src . '/' . $file) ) {
                recurse_copy($src . '/' . $file,$dst . '/' . $file);
            }
            else {
                copy($src . '/' . $file,$dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}
$cat_name = $_GET['cat_name'];
$theme_name = $_GET['theme_name'];
$src = '../../_templates/'.$cat_name.'/'.$theme_name;
$dst = '../../_downloads/'.$theme_name.time();
recurse_copy($src,$dst);
header('Location: '.$dst);
?>
