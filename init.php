<?php

    $jsonDataAll = file_get_contents("https://corona.lmao.ninja/v2/countries");
    $dataAll = json_decode($jsonDataAll,true);

    // BD DATA
    $jsonDataBD = file_get_contents("https://corona.lmao.ninja/v2/countries/Bangladesh/");
    $dataBD = json_decode($jsonDataBD,true);

    // Historical Data
    $hsDataBD = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
    $dataHS = json_decode($hsDataBD,true);

    foreach ($dataHS as $key => $value)
    {
        $day_c = count($value)-1;
    }
    $c = $day_c;
    
    