<?php
error_reporting(0);
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$HITAM="\033[40m";
$MERAH="\033[41m";
$HIJAU="\033[42m";
$KUNING="\033[43m";
$BIRU="\033[44m";
$UNGU="\033[45m";
$CYAN="\033[46m";
$PUTIH="\033[47m";
$Off="\033[0m";

//include "cfg.php";

function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
                return "";
        }
        $length = strlen($find_start);
        $end = strpos(substr($str,$start +$length));
        return trim(substr($str,$start +$length));
}


function url($url){
$headers = array();
$headers[] = "user-agent:Dart/2.16 (dart:io)";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

echo $putih."\n------------------------------------------------";
echo $lblue."\n[-] Message  :".$green." Selamat Datang";
echo $lblue."\n[!] Server   :".$green." Online";
echo $lblue."\n[?] Script   :".$putih." AvJoy";
echo $lblue."\n[-] Versi    :".$yellow." 1.0";
echo $lblue."\n[-] Akun     :".$putih2." Tidak Premium";
echo $putih."\n------------------------------------------------";
echo $green."\n[!] Author   :".$putih." >ANONYMOUSE";
echo $green."\n[-] Whatsapp :".$putih." 083866******";
echo $putih."\n------------------------------------------------";
echo $blue."\n[-] Youtube  :".$green." CARI PAHALA";
//echo $blue."\n[-] Group WA :".$green." bit.ly/3ddfT2F";
echo $putih."\n------------------------------------------------\n";
echo $yellow2."\n÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷";
echo $green2."\n            JANGAN LUPA SUBSBSRIBE CHANNEL CARI PAHALA";
echo $yellow2."\n÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷\n";
sleep(3);
echo "\n";

$i = 1;
//while($i < 1){
while(true){
echo $yellow2."\n÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷";
echo $green2."\n            JANGAN LUPA SUBSBSRIBE CHANNEL CARI PAHALA";
echo $yellow2."\n÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷\n";
$ua1 = array(
"user-agent:Dart/2.16 (dart:io)",
"host:watcherviews.com",
"accept:application/json",
"accept-encoding:gzip",
"content-length:95",
"authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTlkMWNmMjdhM2FjYjEzNjA3MjgyNDEzYjExZGE1MDhkMzYzODhlNTkyYzRjZjNjMDZlYzViMjk5NjlmMjRkMTUyODhjZmRmMWYyNjY2ZmYiLCJpYXQiOjE2NTIzNzE4NzcuNTcyNjI0LCJuYmYiOjE2NTIzNzE4NzcuNTcyNjI5LCJleHAiOjE2ODM5MDc4NzcuNTY5Mzk4LCJzdWIiOiIxNTM4NzIiLCJzY29wZXMiOltdfQ.PU1mScIsYfjFyo1dXCuBucDSQQ2CtgDQ3om_3IBLssLie5dEIt_BnmFBKOC0xbISNS86cUv_KE7xhUhtncbCk9ZVBLxtsHsDnvUEdLc3ffZCrHTor-66ewlST6pM-tOpvcDmnlfgT6fJBAQSHKbgI0z9k_BUjN_fwFnT7LcjD97lklclRkOCdsc-AyyaDT1vg69UoiigYT7lRfnM9PMcjf1NOmkiJLUa8DzSs3n0EuqtusgfrA2Lcvhweb-IAWocSEpTqcMidGK4D197waRKmzc7ZKnlKjVACTrL_6LVbDHOVr_pNN0dIKrwyptKZbpyzXmdFda8csnzk_cMX5TrLPxV1BatOJ0tU3h1fB2xIby4VUkSShjjw4_VY3DF7T0MkgTNfI4hCph4Cp8oKlN1iwpF6ljD_Wct0gie0JxndyKqbl-Wq7orCb3V4bTi4xO7ZKTdbAwnbVqZYZhNMF9vg7s4SsbLXcYpttYF-PRBoWIoOlxi2-mIO1_0GhSAY8oFL1uqGwKbYKTIloSMe5QV6ouD2wekryDoCypDfkFvwLOFy12Q91jVoiPpRDZ0YyMqEOJYSdFs1rS2WQrZJdbE8Pkq76ovsSlq6JsJwtPWlpJ1cBxaDK9WRTv4k5-l3hneRf1LtmVjYOhSSVyVofHV95g2k-Wkbf2oxtiKFAkrLGI",
"content-type:application/x-www-form-urlencoded; charset=utf-8",
"Accept-Encoding:gzip",
);




$data1 = "view_id=63586480&video_id=87165&user_id=153872&allocation_id=24033514&description=video+watched";

$data2 = "view_id=63603288&video_id=87315&user_id=153872&allocation_id=24035087&description=video+watched";

$data3 = "view_id=63603293&video_id=84393&user_id=153872&allocation_id=24035111&description=video+watched";


$data4 = "view_id=63603292&video_id=84901&user_id=153872&allocation_id=24035110&description=video+watched";


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watcherviews.com/dashboard/api/watch-video-new");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
echo $lblue."\n[✓] Koin   :".$green." 1600";
echo $green2."\n            JANGAN LUPA SUBSBSRIBE CHANNEL CARI PAHALA";
//$r1 = curl_exec($ch);
//$r1 = json_decode($r1);
//echo $r1;

for ($x=5; $x>0; $x--){
   echo "\r    Detik  Lagi     \r";
   echo "\r ".$x;
   Sleep(1);
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watcherviews.com/dashboard/api/watch-video-new");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
echo $lblue."\n[✓] Koin   :".$green." 1600";
echo $green2."\n            JANGAN LUPA SUBSBSRIBE CHANNEL CARI PAHALA";
//$r1 = curl_exec($ch);
//$r1 = json_decode($r1);
//echo $r1;

for ($x=5; $x>0; $x--){
   echo "\r    Detik  Lagi     \r";
   echo "\r ".$x;
   Sleep(1);
   }


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watcherviews.com/dashboard/api/watch-video-new");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
echo $lblue."\n[✓] Koin   :".$green." 1000";
echo $green2."\n            JANGAN LUPA SUBSBSRIBE CHANNEL CARI PAHALA";
//$r1 = curl_exec($ch);
//$r1 = json_decode($r1);
//echo $r1;

for ($x=5; $x>0; $x--){
   echo "\r    Detik  Lagi     \r";
   echo "\r ".$x;
   Sleep(1);
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://watcherviews.com/dashboard/api/watch-video-new");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
echo $lblue."\n[✓] Koin   :".$green." 1500";
echo $green2."\n            JANGAN LUPA SUBSBSRIBE CHANNEL CARI PAHALA";
//$r1 = curl_exec($ch);
//$r1 = json_decode($r1);
//echo $r1;

for ($x=5; $x>0; $x--){
   echo "\r    Detik  Lagi     \r";
   echo "\r ".$x;
   Sleep(1);
   }

   }
system("clear");
?>







