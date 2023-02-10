#!/usr/bin/php
<?php

$file=$argv[1];

$xml=`mediainfo --Output=XML "$file"`;

$ar=json_decode(json_encode(simplexml_load_string($xml)),TRUE);

$tracks=$ar['media']['track'];

foreach ($tracks as $num => $track) {
  if ($track['@attributes']['type'] == "Text" ) {
    if (@$track['Forced'] == "Yes") {
      die($track['@attributes']['typeorder'] . "\n");
    }
  }
}
die("0\n");

?>
