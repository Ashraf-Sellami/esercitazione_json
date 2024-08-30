<?php

$json = '{
    "data_points": [
      {
        "date": "2024-08-20",
        "min": 2.77454545454546,
        "max": 9.45,
        "average": 4.96501563343357,
        "sample_size": 262
      },
      {
        "date": "2024-08-21",
        "min": 5.97090909090909,
        "max": 15.93,
        "average": 10.4348248646157,
        "sample_size": 263
      },
      {
        "date": "2024-08-22",
        "min": 10.7845454545455,
        "max": 23.3083333333333,
        "average": 15.7795725961909,
        "sample_size": 262
      },
      {
        "date": "2024-08-23",
        "min": 10.5509090909091,
        "max": 21.5,
        "average": 16.4605584634221, 
        "sample_size": 264
      },
      {
        "date": "2024-08-24",
        "min": 11,
        "max": 26.22,
        "average": 16.2815718357821,
        "sample_size": 264
      },
      {
        "date": "2024-08-25",
        "min": 10.72,
        "max": 17.44,
        "average": 13.653869241659,
        "sample_size": 264
      },
      {
        "date": "2024-08-26",
        "min": 3.72090909090909,
        "max": 22.028,
        "average": 9.54856511134068,
        "sample_size": 264
      },
      {
        "date": "2024-08-27",
        "min": 5.12416666666667,
        "max": 19.8418181818182,
        "average": 10.4993834557698,
        "sample_size": 264
      },
      {
        "date": "2024-08-28",
        "min": 13.1672727272727,
        "max": 28.4616666666667,
        "average": 18.5401773245766,
        "sample_size": 263
      },
      {
        "date": "2024-08-29",
        "min": 13.2945454545455,
        "max": 42.2218181818182,
        "average": 21.9381507662173,
        "sample_size": 263
      }
    ]
  }';

$obj = json_decode($json, true); // ho aggiuunto il true che è necessario per avere l'elemento come array
$json_elements = count($obj['data_points']); // variabile per avere la certezza del numero di elementi all'interno del json




$prodotto_pesato = 0;
$somma_pesata = 0;
$numero_giorni = 7; //variabile di supporto che indica l'ultima settimana ma può essere cambiata per necessità


for ($i = $json_elements - 1; $i > ($json_elements - $numero_giorni - 1); $i--) //vado a ciclare a partire dall n-esimo elemento - 1 l'array
{
    //calcolo la media pesata usando i due elementi trovati entrando "l'array"
    $prodotto_pesato += ($obj['data_points'][$i]['average']) * ($obj['data_points'][$i]['sample_size']);
    $somma_pesata += ($obj['data_points'][$i]['sample_size']);
}

$media_pesata = $prodotto_pesato / $somma_pesata;
echo 'media pesata :' . $media_pesata;
