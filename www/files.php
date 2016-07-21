<div id="currently-playing">
    <audio id="audio" controls="controls">
        <source id="mp3Source" type="audio/mp3"></source>
    </audio>
</div>
<ul id="playlist">
<?php
error_log("Scanning Directory...");

function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);

        $parts = explode("/www/", $path);

        if(!is_dir($path)) {
            $results[] = $path;

            echo '<li class="track" data-url="'.$parts[1].'">'.$parts[1].'</li>
                 ';
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

getDirContents('Shared');
?>
</ul>