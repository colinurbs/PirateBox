<?php
function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        $parts = explode("/share", $path);

        if(!is_dir($path) && (strpos($parts[1], ".mp3") !== false)) {
            $results[] = $parts[1];
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return json_encode($results);
}

$json = getDirContents('Shared');
?>
<script>
var songs = JSON.parse('<?=$json;?>');
</script>
