<?php

$ch = curl_init();
curl_setopt_array(
    $ch,
    [
      CURLOPT_URL => "https://www.nhuvo.ch/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HEADER => false,
      CURLOPT_FOLLOWLOCATION => true
    ]
);

$test = curl_exec($ch);
print curl_error($ch);
curl_close($ch);

print_r($test);
