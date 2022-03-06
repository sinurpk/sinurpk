<?php
$txt1 = file_get_contents('my.txt');
$txt1 .= "\n" . file_get_contents('col.txt');
$txt1 .= "\n" . file_get_contents('kal.txt');
$fp = fopen('newText.txt', 'w');
if(!$fp)
    die('Could not create / open text file for writing.');
if(fwrite($fp, $txt1) === false)
    die('Could not write to text file.');
    $filename = "newText.txt";
    $file = fopen( $filename, "r" );
    if( $file == false ) {
       echo ( "Error in opening file" );
       exit();
    } 
    $filesize = filesize( $filename );
    $filetext = fread( $file, $filesize );
    fclose( $file );
    echo ( "File size : $filesize bytes" );
    echo ( "<pre>$filetext</pre>" );
echo 'Text files have been merged.';
?>