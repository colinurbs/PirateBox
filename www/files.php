<?php

require 'vendor/autoload.php';

use PhpId3\Id3TagsReader;

function getDirContents($dir, &$results = array()){
    $files = scandir($dir);



    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        $parts = explode("/", $path);




        if(!is_dir($path)) {

            if(strrpos($path, ".mp3" )!== false){
                $tags = new Id3TagsReader(fopen($path, "rb"));

                $tags->readAllTags();

                $tags = $tags->getId3Array();
             
                echo '<tr class="track" data-title="'.$tags['TIT2']['body'].'" data-url="'.$parts[count($parts) - 1].'"><td>'.$tags['TPE1']['body'].'</td><td>'.$tags['TIT2']['body'].'</td><td>'.$tags['TALB']['body'].'</td><td><i class="fa fa-download" aria-hidden="true"></i></td></tr>';
                

                $results[] =  $parts[count($parts) - 1];
            }
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
           // $results[] = $path;
        }
    }

    return true;
}

getDirContents('Shared');


?>