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

				
				if(count($tags)> 0) 
				{
			 
				echo '<tr class="track_row" id="'.$key.'" data-title="'.$tags['TIT2']['body'].'" data-url="'.$parts[count($parts) - 1].'"><td class="track">'.$tags['TPE1']['body'].'</td><td class="track">'.$tags['TIT2']['body'].'</td><td class="track">'.$tags['TALB']['body'].'</td><td><a  download href ="/Shared/'.$parts[count($parts) - 1].'"><i style="color:green;" class="fa fa-download" aria-hidden="true"></i></a></td></tr>';
				}

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