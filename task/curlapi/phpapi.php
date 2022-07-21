
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
try{
    $url="https://data.covid19india.org/data.json";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
       "Accept: application/xml",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $data=html_entity_decode($resp); 
    exit($data);
}catch(Exception $e){
    $result = ["error"=>true, "message"=>$e->getMessage()];
    exit(json_encode($result));
}
?>
  