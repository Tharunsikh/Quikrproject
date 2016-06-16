<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://completion.amazon.com/search/complete?search-alias=aps&client=amazon-search-ui&mkt=1&q=facebook");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
print_r(json_decode($result));//return amazone autocomplete suggestion
?>