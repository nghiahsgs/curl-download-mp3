<?php
$text=$_GET['text'];
// echo $text."<br>";
$index=rand();
echo $index;
//$text='nguyễn bá nghĩa';
$text=urlencode($text);
// echo $text;
$ch = curl_init("https://texttospeech.responsivevoice.org/v1/text:synthesize?text=".$text."&lang=vi&engine=g1&name=&pitch=0.5&rate=0.5&volume=1&key=PL3QYYuV&gender=female");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_NOBODY, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
$output = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if ($status == 200) {
    file_put_contents(dirname(__FILE__) .'/audio'.$index.'.mp3', $output);
}