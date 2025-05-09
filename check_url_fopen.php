<?php
// فحص ما إذا كان allow_url_fopen مفعلًا
$test = @file_get_contents('http://al-saif.net');  // قم باستبدال example.com بأي رابط خارجي
if ($test) {
    echo "allow_url_fopen is enabled.";
} else {
    echo "allow_url_fopen is disabled.";
}
?>
