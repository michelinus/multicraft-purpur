<?php
$ver = end(json_decode(file_get_contents('https://api.papermc.io/v2/projects/paper'))->versions);
$url = 'https://api.purpurmc.org/v2/purpur/' . $ver . '/latest/download';
header('Location: '.$url);
?>