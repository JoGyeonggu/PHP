<?
    function request($url, $method="GET" , $params = NULL , $headers=NULL)
    {

    $ch = curl_init();

    if($method == "GET" && $params != NULL)
    {
        $url = $url.'?'.http_build_query($params, '', '&');
    }

    curl_setopt($ch , CURLOPT_URL , $url);

    curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);

    if(stripos($url , 'https://') == TRUE)
    {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSLVERSION,3);
    }

    if($method=="POST")
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    }

    if($headers != NULL)
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    if( !$response = curl_exec($ch) )
    {
        $response = curl_error($ch);
    }

    curl_close($ch);

    return $response;
}
?>
