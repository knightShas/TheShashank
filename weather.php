<?php
 
  include('apptop.php'); 
  include('nav.php'); 


  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://community-open-weather-map.p.rapidapi.com/weather?q=Dhanbad',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'x-rapidapi-host: community-open-weather-map.p.rapidapi.com',
      'x-rapidapi-key: 6b5a542fcamsh351e2816ea3d1a4p122dcbjsn8ec39182caf6'
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
  include('appbottom.php');
?>