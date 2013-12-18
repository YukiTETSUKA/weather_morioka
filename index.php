<!document html>
<head lang="ja">
    <meta charset="utf-8">
</head>

<body>
<?php
    $url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=030010";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
    $res = curl_exec($curl);
    $info = curl_getinfo($curl);
    curl_close($curl);

    $data = json_decode($res, true);

    echo '明日の盛岡の天気は ' . $data['forecasts'][1]['telop'] . ' です';
?>
</body>
</html>
