<?php

$access_token = '7YFwv78gIcgBNjX46xoQKTHMADG1eWIT3aclloLp/2Tlbml/Zs8bjeiPudvu/tDk4jmrQCvN1akfDt61RMOyATQcFcxe9kYG0bsGVBUs1DSrrrjmsbgO6zLsIU8Bflnvqq2nZWU+jo/c+JSJMcdTBQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>