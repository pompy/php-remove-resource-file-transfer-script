<?php
//replace mysite.com with your own remote urldecode
$file = 'http://mysite.com/' . $_GET["filename"];
 $newfile = $_SERVER['DOCUMENT_ROOT'] .'/' . $_GET["filename"] ;

if ( copy($file, $newfile) ) {
    echo "Copy success!";
}else{
    echo "Copy failed.";
}
?>